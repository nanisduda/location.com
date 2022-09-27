<?php

declare(strict_types=1);

namespace App\Util;

use App\Models\DbConfig as ModelsDbConfig;

class DbConfig
{
    /**
     * 根据配置名称获取配置
     * @param $name
     * @return array
     */
    public static function getConfigByName($name)
    {
        $config = ModelsDbConfig::query()->where('name', $name)->first();
        if ($config) return $config->toArray();
        return [];
    }

    //获取键值配置
    public static function get($key, $default = null)
    {
        $backupKey = $key;
        if (is_null($key)) {
            return $default;
        }

        $key = is_array($key) ? $key : explode('.', is_int($key) ? (string) $key : $key);
        if (count($key) <= 2) {
            $group = count($key) == 1 ? 'basic' : $key[0];
            $name  = count($key) == 1 ? $key[0] : $key[1];
            if (count($key) == 2 && $name == '*') {
                $data = ModelsDbConfig::query()->where('group', $group)
                    ->get(['name', 'value']);
                $config = [];
                foreach ($data as $v) {
                    $config[$v['name']] = $v['value'];
                }
                return $config;
            }
            $value = ModelsDbConfig::query()->where('group', $group)
                ->where('name', $name)
                ->value('value');
            if (!is_null($value)) return $value;
        }

        return config($backupKey, $default);
    }
    //获取分组的配置
    public static function getConfigByGroup($group)
    {
        return ModelsDbConfig::query()
            ->where('group', $group)
            ->get()
            ->pluck('value', 'name')
            ->toArray();
    }

    //获取所有配置
    public static function all()
    {
        return ModelsDbConfig::query()
            ->get()
            ->pluck('value', 'name')
            ->toArray();
    }
}
