<?php
namespace app\api\controller;

// 指定允许其他域名访问
header('Access-Control-Allow-Origin:*');
// 响应类型
header('Access-Control-Allow-Methods:*');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with,content-type');
/**
 * @title 示例控制器
 * @description 接口说明
 * @group 示例模块
 */
class Libo
{

    public function initialize(){ }

    /**
     * @title 登录接口（示例）
     * @description 提交账号密码
     * @author libo
     * @url /api/libo/login.html
     * @method post
     * @module 用户模块
     *
     * @param name:username type:string require:1 default: desc:账号（手机号、邮箱）
     * @param name:password type:string require:1 default: desc:密码（8~16位字符）
     *
     * @return referer_url:跳转的链接(登录成功后返回)
     * @return url:账号被冻结的跳转链接(登录失败时返回)
     *
     */
    public function login(){
        $array_return = array(
            "code" => 200,
            "msg" => "登录成功",
            "referer_url" => "http://www.niubea.com",
            "url" => "http://www.niubea.com"
        );
        echo json_encode($array_return);die;
    }

    /**
     * 此接口不需要文档，被过滤掉了，配置入口在config/doc.php里
     */
    public function no_doc_api() {
        echo "filter_api";
    }
}