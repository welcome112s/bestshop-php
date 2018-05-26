<?php

namespace app\admin\model;

use app\common\model\Setting as SettingModel;
use think\Cache;

/**
 * 系统设置模型
 * Class Wxapp
 * @package app\admin\model
 */
class Setting extends SettingModel
{
    /**
     * 更新系统设置
     * @param $data
     * @return bool
     */
    public function edit($data)
    {
        // 删除系统设置缓存
        Cache::rm('setting');
        return $this->save(['values' => $data]) !== false ?: false;
    }

}
