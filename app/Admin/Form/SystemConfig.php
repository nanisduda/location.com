<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use App\Models\DbConfig;
use Illuminate\Support\Facades\DB;

class SystemConfig extends Form
{
    protected $groupKey = '';
    protected $groupFields = [];

    public function __construct($group = '')
    {
        $this->groupKey = $group;
        $this->groupFields = DbConfig::query()->where('group', $group)->get();

        parent::__construct();
    }

    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle($input)
    {
        $input = (request()->except(['_form_', '_current_', '_token']));
        $groupKey = $this->groupKey = $input['group'] ?? '';
        unset($input['group']);
        DB::beginTransaction();
        try {
            foreach ($input as $k => $v) {
                DbConfig::query()->where('group', $groupKey)->where('name', $k)->update(['value' => $v ?? '']);
            };

            Db::commit();
        } catch (\Throwable $th) {
            Db::rollBack();
            throw $th;
        }

        return $this->response()->success('操作成功');
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        if (empty($this->groupKey)) {
            $field = request()->input('_column') ?: request()->input('upload_column');
            $this->groupKey = DbConfig::query()->where('name', $field)->value('group');
            $this->groupFields = DbConfig::query()->where('group', $this->groupKey)->get();
        }

        $this->hidden('group')->value($this->groupKey);

        foreach ($this->groupFields as $v) {
            $key = $v->name;
            $type = $v->type;
            $title = $v->title;
            switch ($type) {
                case 'image':
                case 'file':
                    $field = $this->$type($key, $title)->saveAsString();
                    break;
                case 'select':
                    $field = $this->$type($key, $title)->options(json_decode($v->tip, true));
                    break;
                case 'radio':
                    $field = $this->$type($key, $title)->options(json_decode($v->tip));
                    break;
                case 'range':
                    $key1 = $key . '.start';
                    $key2 = $key . '.end';
                    $field = $this->range($key1, $key2, $title);
                    break;
                default:
                    $field = $this->$type($key, $title);
                    break;
            }
            if ($v->tip) {
                if ($type != 'radio') {
                    $field->help($v->tip);
                }
            }
        }
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function
    default()
    {
        $default = ['group' => $this->groupKey];
        foreach ($this->groupFields as $v) {
            $key = $v->name;
            if ($v->type == 'range') {
                $default[$key] = json_decode($v->value, true);
            } else {
                $default[$key] = $v->value;
            }
        }

        return $default;
    }
}
