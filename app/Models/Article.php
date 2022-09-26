<?php

namespace App\Models;

use Carbon\Carbon;
use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'article';
    protected $fillable = ['date_time', 'abbr'];
    protected $allowField = ['id', 'author', 'cover', 'created_at', 'title', 'content'];

    const CAT_NEWS = 1;
    const CAT_HELP = 2;
    const CAT_SERVICE = 3;
    const MAPPING_CAT = [
        self::CAT_NEWS => '新闻动态',
        self::CAT_HELP => '帮助中心',
        self::CAT_SERVICE => '服务项目',
    ];

    public function getAbbrAttribute()
    {
        return Str::limit($this->content, 169);
    }
    public function getDateTimeAttribute()
    {
        return Carbon::parse($this->created_at)->format('Y-m-d');
    }
}
