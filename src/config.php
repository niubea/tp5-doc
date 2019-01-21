
<?php
date_default_timezone_set("Asia/Shanghai");
return [
    'title' => "APi接口文档",  //文档title
    'version'=>'1.6', //文档版本
    'copyright'=>'Powered By '.$_SERVER['HTTP_HOST'], //版权信息
    'password' => 'www.niubea.com', //访问密码，为空不需要密码
    //静态资源路径--默认为云上路径，解决很多人nginx配置问题
    //可将assets目录拷贝到public下面，具体路径课自行配置
    'static_path' => '',
    'controller' => [
        //需要生成文档的类
        'app\api\controller\Libo',
    ],
    'nav' => [
        //首页导航
        '文档说明'=>"app\\\api\\\controller\\\Doccommon::first",
        '公共返回码'=>"app\api\controller\Doccommon::back",
    ],
    'filter_method' => [
        //过滤 不解析的方法名称
        'no_doc_api'
    ],
    'return_format' => [
        //数据格式
        'code' => "返回码。<a href='/doc/info?name=app\api\controller\Doccommon::back'>查看返回码说明</a>",
        'msg' => "提示信息",
    ],
    'public_header' => [
        //全局公共头部参数
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
        //公共返回参数
        '10000'=>"操作成功",
        '20000'=>"操作成功，并执行完成",
        '40001'=>"该功能已下架",
        '40301'=>"签名错误",
        '50001'=>"参数错误",
    ],
];
