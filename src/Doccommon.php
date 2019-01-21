<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2017 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.ctolog.com
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

namespace app\api\controller;


/**
 * @title 示例title
 * @description 接口说明
 */
class Doccommon
{
	/**
     * @title 接口说明
     * @description 接口说明
     * @url /api/doccommon/first
     * @module 公共模块
     * 
     * @author libo
     * @qqdz1 http://xxx.xxx.com
     * @qqdz2
     * @wdsm 为了保证数据安全性，数据要求加密。
     * @my  
     * @cskey 您的密钥请填写在这里
     * @zskey 正式的密钥填写在这里
     * @signgs sign = MD5(url_encode(uri链接 + “?” + 参数) + 密钥KEY);
     * @qqlj https://xxxx.xxx.com/api/libo/login.html?user=xxxxx&password=xxxx&time=1588888888
     * @sign md5(urlencode(“https://xxxx.xxx.com/api/libo/login.html?password=xxxx&time=1588888888&user=xxxxx”) + 密钥key)
    计算出来的值是一个全小写32位的字符串。
     *
     * @result name:未微信授权 code:｛<br>&nbsp;&nbsp;“code”:“40301”,<br>&nbsp;&nbsp;“msg”:“尚未微信授权或微信授权已过期”,<br>&nbsp;&nbsp;“data”:{<br>&nbsp;&nbsp;&nbsp;&nbsp;“url”:“https://wx.qq.com/authorization?xxx”<br>&nbsp;&nbsp;}<br>｝ desc:（无需展示错误给用户）<br>url：用户未在微信上授权，需要重定向的链接
     * @result name:未关注公众号 code:｛<br>&nbsp;&nbsp;“code”:“40302”,<br>&nbsp;&nbsp;“msg”:“尚未关注公众号，请先关注公众号”,<br>&nbsp;&nbsp;“data”:{<br>&nbsp;&nbsp;&nbsp;&nbsp;“url”:“https://wx.qq.com/authorization?xxx”<br>&nbsp;&nbsp;}<br>｝ desc:（需要展示错误给用户）<br>url：用户未关注公众号，url为关注公众号的二维码
     *
     */
    public function first(){}
}
