<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DbConfig>
 */
class DbConfigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'widget_code',
            'group' => 'zoho',
            'title' => 'zoho widget码',
            'tip' => 'zoho中文网站(https://salesiq.zoho.com.cn/)获取',
            'type' => 'text',
            'value' => '7a3b5fa13151df95cc5201999fec5f650b9d02615c80cf38a3dc425c62dc0f5c',
        ];
    }
}
