<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'article';
    
    const CAT_NEWS = 1;
    const CAT_HELP = 2;
    const CAT_SERVICE = 3;
    const MAPPING_CAT = [
        self::CAT_NEWS => '新闻动态',
        self::CAT_HELP => '帮助中心',
        self::CAT_SERVICE => '服务项目',
    ];
}
