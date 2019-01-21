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
 * @title 违章查询
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
     * @author xzb
     * @qqdz1 http://test.wz.c8c88.com
     * @qqdz2
     * @wdsm 为了保证数据安全性，客户端与服务器端api数据交互接口需要加入sign签名，签名形式以每个接口URL后需带一个sign字段，用来校验数据合法性。Sign签名是将客户端向服务器端传递的参数，加上一个密钥，然后进行md5加密（全小写），参数按照字母a-z顺序排序。
     * @my
     * @cskey 33#$59*8<@
     * @zskey
     * @signgs sign = MD5(url_encode(uri链接 + “?” + 参数) + 密钥KEY);
     * @qqlj https://chewu.buyzx.cn/api/daijiao/test.html?user=xxxxx&fuck=xxxx&time=1588888888
     * @sign md5(urlencode(“https://chewu.buyzx.cn/api/daijiao/test.html?fuck=xxxx&time=1588888888&user=xxxxx”) + 密钥key)
    计算出来的值是一个全小写32位的字符串。
     *
     * @result name:未微信授权 code:｛<br>&nbsp;&nbsp;“code”:“40301”,<br>&nbsp;&nbsp;“msg”:“尚未微信授权或微信授权已过期”,<br>&nbsp;&nbsp;“data”:{<br>&nbsp;&nbsp;&nbsp;&nbsp;“url”:“https://wx.qq.com/authorization?xxx”<br>&nbsp;&nbsp;}<br>｝ desc:（无需展示错误给用户）<br>url：用户未在微信上授权，需要重定向的链接
     * @result name:未关注公众号 code:｛<br>&nbsp;&nbsp;“code”:“40302”,<br>&nbsp;&nbsp;“msg”:“尚未关注公众号，请先关注公众号”,<br>&nbsp;&nbsp;“data”:{<br>&nbsp;&nbsp;&nbsp;&nbsp;“url”:“https://wx.qq.com/authorization?xxx”<br>&nbsp;&nbsp;}<br>｝ desc:（需要展示错误给用户）<br>url：用户未关注公众号，url为关注公众号的二维码
     *
     */
    public function first(){}
}
