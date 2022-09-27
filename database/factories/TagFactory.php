<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tagArr = [
            '手机定位', '免费定位', '1元定位', '开房记录查询', '手机定位追踪', '电话跟踪', '查看手机相册', '微信记录查看'
        ];
        return [
            'name' => Arr::random($tagArr),
            'articles' => 0,
        ];
    }
}
