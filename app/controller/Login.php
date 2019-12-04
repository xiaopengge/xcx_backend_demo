<?php
declare (strict_types = 1);

namespace app\controller;

use think\Request;

class Login
{
    /**
     * @var \EasyWeChat\MiniProgram\Application
     */
    private $wechat;

    public function __construct()
    {
        $this->wechat = app('wechat');
    }

    /**
     * 显示资源列表
     *
     * @param Request $request
     * @return \think\Response
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function index(Request $request)
    {
        return $this->wechat->auth->session($request->get('code'));
    }

    /**
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     */
    public function appcode() {
        $path = root_path() . '/public';
        $response = $this->wechat->app_code->get($path);
        if ($response instanceof \EasyWeChat\Kernel\Http\StreamResponse) {
            $filename = $response->saveAs($path, 'appcode.png');
            dd($filename);
        }
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
