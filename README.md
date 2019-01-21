# tp5-doc  
 just for tp5 make the api document auto.   
 让使用TP5框架的系统，自动生成接口文档。  
 一个基于 Thinkphp5 的 api 文档自动生成工具    
      
环境要求：  
    框架：tp5.1.x 框架  
    PHP：>= 5.6.x   
      
安装步骤：  
    1. 先部署安装好你的TP5.1框架  
    2. 项目根目录执行：composer require libo/tp5-doc  
    3. 将src下的Doccommon.php拷贝到application/api/controller/目录下，如果没有就创建一个  
    4. composer安装好插件的时候，已经自动将src下的config.php拷贝到config目录下的doc.php文件  
    5. 修改config下的doc.php，根据你的实际情况填写  
    6. doc.php里有static_path，自己根据实际情况配置静态文件目录  
    7. doc.php里的controller指的是需要做文件的控制器类  
    8. 控制器类需要按既定的格式写，才会自动生成文档的。格式可以参考我提供的例子：src/libo.php  
    9. Doccommon.php 是公共文档说明部分，可以细看一下里面的代码。        
      
 更新日志：  
 v2.3  
    更新了多处bug  
    增加自定义html可以使用模板的功能    
  
v2.4  
    注释掉的{$doc}也会报错的，已经删除了    
  
v2.5  
    更新了README.md    
  
v2.6  
    优化一下代码    

v2.6.1   
    增加了README.md 说明    
    修改了config.php里的return_format说明    
    
    
用过觉得好的，请打赏一下作者，谢谢！        
![Image text](https://raw.githubusercontent.com/niubea/img-respo/master/pay_qrcode/alipay.jpg)
![Image text](https://raw.githubusercontent.com/niubea/img-respo/master/pay_qrcode/wechat.jpg)
    
     