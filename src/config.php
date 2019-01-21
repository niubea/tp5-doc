<?php
date_default_timezone_set("Asia/Shanghai");
return [
    'title' => "APi接口文档",  //文档title
    'version'=>'1.0', //接口文档版本
    'copyright'=>'Powered By www.niubea.com', //版权信息
    'password' => 'www.niubea.com', //访问密码，为空不需要密码
    //静态资源路径--默认为云上路径，解决很多人nginx配置问题
    //可将assets目录拷贝到public下面，具体路径课自行配置
    'static_path' => '',
    'controller' => [
        //需要生成文档的控制器类
        'app\api\controller\Libo',
    ],
    'nav' => [
        //首页导航
        '文档说明'=>"app\\\api\\\controller\\\Doccommon::first",
        '公共返回码'=>"app\api\controller\Doccommon::back",
    ],
    'filter_method' => [
        //过滤 不解析的方法名称 不需要文档的接口
        "initialize",
        'no_doc_api',
    ],
    'return_format' => [
        //公共返回数据格式
        'code' => "返回码。<a href='' onclick=\"parent.loadText('公共返回码','公共返回码','app\\api\\controller\\Doccommon::back')\">查看返回码说明</a>",
        'msg' => "提示信息",
    ],
    'public_header' => [
        //全局公共请求头部参数
        //如：['name'=>'version', 'require'=>1, 'default'=>'', 'desc'=>'版本号(全局)']
        ['name'=>'Auth', 'type'=>'string', 'require'=>1, 'default'=>'', 'desc'=>'登录或授权成功后接口返回的令牌']
    ],
    'public_param' => [
        //全局公共请求参数，设置了所以的接口会自动增加次参数
        //如：['name'=>'token', 'type'=>'string', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'验证（全局）')']
        ['name'=>'time', 'type'=>'int', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'当前时间戳，10位数字，参与签名'],
        ['name'=>'version', 'type'=>'string', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'接口版本详情 JSON，参与签名，示例：1.0'],
        ['name'=>'sign', 'type'=>'string', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'接口签名，MD5加密，加密规则参考1.2说明']
    ],
    'public_param_back' => [
        //全局公共返回参数
        '10000'=>"操作成功",
        '20000'=>"操作成功，并执行完成",
        '40001'=>"该功能已下架",
        '40301'=>"签名错误",
        '50001'=>"参数错误",
    ],
    'public_param_html' => [
        //遇到想自定义html的却又不想再创建一个页面模板的话，就在这里定义一个html，链接是：/doc/info?name=libo::html&html_key=queryStatus_DESC 最后的这个queryStatus_DESC就是下面的那个键。
        'queryStatus_DESC' => '<div class="tab-content">
                <div class="tab-pane fade in active" id="info">
                    <h3>queryStatus返回码说明</h3>
                    <table class="table table-striped">
                        <tbody><tr><th>code</th><th>说明</th></tr>
                                            <tr>
                            <td><span style="color:red">100</span></td>
                            <td><span style="color:red">操作成功</span></td>
                        </tr>
                                            <tr>
                            <td><span style="color:red">200</span></td>
                            <td><span style="color:red">支付成功</span></td>
                        </tr>
                                            <tr>
                            <td>-99</td>
                            <td>参数错误</td>
                        </tr>
                                        </tbody></table>
                </div>
            </div>'
    ],
];
