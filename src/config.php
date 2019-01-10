<?php
return [
    'title' => "APi接口文档",  //文档title
    'version'=>'1.1.0', //文档版本
    'copyright'=>'Powered By www.niubea.com', //版权信息
    'password' => 'www.niubea.com', //访问密码，为空不需要密码
    //静态资源路径--默认为云上路径，解决很多人nginx配置问题
    //可将assets目录拷贝到public下面，具体路径课自行配置
    'static_path' => '',
    'controller' => [
        //需要生成文档的类
        'app\api\controller\libo'
    ],
    'filter_method' => [
        //过滤 不解析的方法名称
        'no_doc_api'
    ],
    'return_format' => [
        //数据格式
        'status' => "200/300/301/302/403",
        'message' => "提示信息",
    ],
    'public_header' => [
        //全局公共头部参数
        //如：['name'=>'version', 'require'=>1, 'default'=>'', 'desc'=>'版本号(全局)']
    ],
    'public_param' => [
        //全局公共请求参数，设置了所以的接口会自动增加次参数
        //如：['name'=>'token', 'type'=>'string', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'验证（全局）')']
    ],
];
