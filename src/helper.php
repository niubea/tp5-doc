<?php
if(defined('THINK_VERSION')){
    \think\Route::get('doc/assets', "\\Libo\\Doc\\DocController@assets",['deny_ext'=>'php|.htacess']);
    \think\Route::get('doc/search', "\\Libo\\Doc\\DocController@search");
    \think\Route::get('doc/list', "\\Libo\\Doc\\DocController@getList");
    \think\Route::get('doc/info', "\\Libo\\Doc\\DocController@getInfo");
    \think\Route::any('doc/debug', "\\Libo\\Doc\\DocController@debug");
    \think\Route::any('doc/pass', "\\Libo\\Doc\\DocController@pass");
    \think\Route::any('doc/login', "\\Libo\\Doc\\DocController@login");
    \think\Route::get('doc', "\\Libo\\Doc\\DocController@index");
}else{
    Route::get('doc/assets', "\\Libo\\Doc\\DocController@assets",['deny_ext'=>'php|.htacess']);
    Route::get('doc/search', "\\Libo\\Doc\\DocController@search");
    Route::get('doc/list', "\\Libo\\Doc\\DocController@getList");
    Route::get('doc/info', "\\Libo\\Doc\\DocController@getInfo");
    Route::any('doc/debug', "\\Libo\\Doc\\DocController@debug");
    Route::any('doc/pass', "\\Libo\\Doc\\DocController@pass");
    Route::any('doc/login', "\\Libo\\Doc\\DocController@login");
    Route::any('doc', "\\Libo\\Doc\\DocController@index");
}


/**
 * curl模拟请求方法
 * @param $url
 * @param $cookie
 * @param array $data
 * @param $method
 * @param array $headers
 * @return mixed
 */
function http_request($url, $cookie, $data = array(), $method = array(), $headers = array()){
    $curl = curl_init();
    if(count($data) && $method == "GET"){
        $data = array_filter($data);
        $url .= "?".http_build_query($data);
        $url = str_replace(array('%5B0%5D'), array('[]'), $url);
    }
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (count($headers)){
        $head = array();
        foreach ($headers as $name=>$value){
            $head[] = $name.":".$value;
        }
        curl_setopt($curl, CURLOPT_HTTPHEADER, $head);
    }
    $method = strtoupper($method);
    switch($method) {
        case 'GET':
            break;
        case 'POST':
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case 'PUT':
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case 'DELETE':
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
            break;
    }
    if (!empty($cookie)){
        curl_setopt($curl, CURLOPT_COOKIE, $cookie);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

/**
 * array_column
 */
if(!function_exists("array_column"))
{
    function array_column($array,$column_name)
    {
        return array_map(function($element) use($column_name){return $element[$column_name];}, $array);
    }
}