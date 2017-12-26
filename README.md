CodeIgniter-3.1.6up 框架介绍
===========================

CodeIgniter是一个应用程序开发框架 - 一个工具包 - 用于使用PHP构建网站的人员。它的目标是使您能够比从头开始编写代码更快的速度开发项目，提供丰富的常用任务库以及访问这些库的简单界面和逻辑结构。CodeIgniter通过最小化给定任务所需的代码量，使您可以创造性地专注于您的项目。

## 发布信息

基于 [CodeIgniter3.1.6](https://codeigniter.com) 框架的一个优化版本。

## 更新日志和新功能

#### 0.源框架修改记录：
	###### index.php已经搬到了public目录。
	###### 修正php7+版本中无法正确记录session。
	###### 文件夹cache、errors、logs、session、static、temp、uploads已经搬到public目录。


#### 1.全面支持composer。

####  2.新增全局message与success方法：
```php
return message('hello,CodeIgniter-3.1.6up');
// {"msg":"hello,CodeIgniter-3.1.6up","code":500,"status":true}
return success('hello,CodeIgniter-3.1.6up');
// {"msg":"hello,CodeIgniter-3.1.6up","code":200,"status":false}
```	
	请在接口控制器里面调用它，非常有用！

#### 3.新增file_url方法：

	这个方法的作用是引入外部样式主题文件，跟site_url()、base_url()一样使用，你也可以在config.php中统一配置域名。


#### 4.新增service层:

	现在你可以把你的业务逻辑丢进services文件夹了，避免产生臃肿的控制器。


#### 5.解决controller、service、model命名冲突:

	你可以在core文件夹中配置你的类名后缀：
	Base_Router.php中：
```php
public $controller_suffix = '_Controller';
```
	Base_Loader.php中：
```php
public $service_suffix = '_Service';
public $model_suffix = '_Model';
```
	然后在各类名中加入以上后缀，注意文件命名须为去掉后缀的类名。


#### 6.新增了两个控制器基类：

	Smarty_Controller为smarty模板使用基类，如果你的视图需要用到smarty，请配置并在你的控制器里边继承它。

	Ajax_Controller为ajax检测类，调用它可以判断是否为ajax请求，用于前后台数据交互接口。


#### 7.默认调试环境打开了程序分析：

	你可以在core文件夹下找到Base_Controller类中改变或者注释掉
```php
ENVIRONMENT!=='development'?:$this->output->enable_profiler(TRUE);
```
## 服务器要求

PHP>=7.0

## 安装

请参阅 CodeIgniter用户指南的 [安装部分](https://codeigniter.com/user_guide/installation/index.html)

## 执照

请参阅 [许可协议](https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst)

## 资源

-  [用户指南](https://codeigniter.com/docs)
-  [语言文件翻译](https://github.com/bcit-ci/codeigniter3-translations)
-  [社区论坛](http://forum.codeigniter.com/)
-  [社区维基](https://github.com/bcit-ci/CodeIgniter/wiki)
-  [社区松弛频道](https://codeigniterchat.slack.com/)

将安全问题报告给我们的 [安全小组](mailto:security@codeigniter.com) 或通过我们的 [HackerOne页面](https://hackerone.com/codeigniter)，谢谢。

## 结语

CodeIgniter3.1.6up团队要感谢EllisLab，CodeIgniter项目的所有贡献者和CodeIgniter团队。
