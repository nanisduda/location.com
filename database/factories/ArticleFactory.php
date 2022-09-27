<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $titleArr = [
            '手机号码免费定位试用一次，1元手机定位花1元钱',
            '为啥这么难？漫游手机定位费即将退出历史舞台',
            '因此今年的iPhone手机号码定位 7应该还是会有三款',
            '提升VR视觉体验手机号码定位追踪系统 三星S8将首',
            '言语刺激收信手机号码定位人的方式种植木马',
            '以保证用户数据手机号码定位找人的多样性和完',
            '这样的手机号码定位诺基亚回来还能火吗？',
            '信号太多导致“打架”手机定位也成为了信号不',
            '对于这些贴着互联手机号码定位追踪系统网标签',
            '诺基亚年底王者归来 推两款高端安卓机',
        ];
        return [
            'title' => Arr::random($titleArr),
            'category' => $this->faker->numberBetween(1, 3),
            'tags' => $this->faker->numberBetween(1, 3),
            'author' => $this->faker->name(),
            'cover' => $this->faker->imageUrl(),
            'content' => $this->faker->realText(),
            'hot_desc' => $this->faker->numberBetween(0, 999),
        ];
    }
}
