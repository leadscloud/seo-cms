<?php //
define('admin_tools_password', '1986'); 			//管理员工具的登录密码

//////////////////////////////////////////////////////////////////////////////////////////////////////////
/**基本设置*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////

define('site_name', 'xxxx.com');		/** 网站域名 */
define('index_name', 'SKB Gears');		/** 首页名称 */
define('theme_name', 'packing'); 			//模板选择。模板请放置在themes目录下


//define('static_format', '%postname%-%postzuozhe%-%post_id%/');		//静态网址格式，可用%post_id%、%postname% %postzuozhe% %postchuchu%（建议优先使用%post_id%）

define('static_format', '%postname%-%post_id%/');		//静态网址格式，可用%post_id%、%postname% %postzuozhe% %postchuchu%（建议优先使用%post_id%）


//////////////////////////////////////////////////////////////////////////////////////////////////////////
/**内容设置*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////
/** 目录设置
文件夹名须与sqlite文件名一致
格式：文件夹名称 => array(分类名称, [起始发布时间, 每天发布篇数,] [发布延时秒数])  */
$category=array(				//
  'bevelgear'	=>	array('SKB Beve Lgear', 	'2017-11-13', 10000),
);


/** 目录列表数 */
define('category_perpagenum', 20);
/** 站点地图列表数*/
define('sitemap_perpagenum', 2000);
