<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\SystemConfig;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Tab;

class SystemConfigController extends AdminController
{
    protected $tabs = [
        'zoho' => '客服配置',
    ];

    public function index(Content $content)
    {
        $tab = new Tab();

        foreach ($this->tabs as $group => $title) {
            $tab->add($title, SystemConfig::make($group));
        }

        return $content->title('系统参数配置')
            ->body(new Card($tab));
    }
}
