<?php
declare (strict_types = 1);

namespace app\service;

use EasyWeChat\Factory;

class WechatService  extends \think\Service
{

    /**
     * 注册服务
     *
     * @return mixed
     */
    public function register()
    {
        $config = [
            'app_id' => 'wxc9be4e3556ce5781',
            'secret' => 'b3a69c6e243a8f5d2cebadc023682e65',

            // 下面为可选项
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];

        $this->app->bind('wechat', Factory::miniProgram($config));
    }

    
    /**
     * 执行服务
     *
     * @return mixed
     */
    public function boot()
    {
        //
    }
}
