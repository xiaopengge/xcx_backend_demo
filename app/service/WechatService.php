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
            'app_id' => env('WECHAT.APPID'),
            'app_id' => "wx5fcaf84cfe377362",
            'secret' => env('WECHAT.APPSECRET'),
            'secret' => "43bba8f069cee247fa2e839675641cc1",

            // 下面为可选项
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'raw',

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
