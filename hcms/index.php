<?php	
ini_set("display_errors","On");
error_reporting(E_ALL);

require_once('config.php');
require_once('inc/function.php');
require_once('inc/function_get.php');
require_once('inc/function_post.php');
require_once('inc/conn.php');

$static_format=constant('static_format');
$static_format_reg=format(static_format, 'reg');
$static_format_reg=str_replace('%post_id%', '(\d+)', $static_format_reg);
$static_format_reg=str_replace('%postname%', '([^\.]+)', $static_format_reg);
$static_format_reg=str_replace('%postzuozhe%', '([^\.]+)', $static_format_reg);
$static_format_reg=str_replace('%postchuchu%', '([^\.]+)', $static_format_reg);

//获取地址
$the_host=$_SERVER ['HTTP_HOST'];
$request_uri=isset($_SERVER ['REQUEST_URI'])? $_SERVER ['REQUEST_URI'] : '';

//main run
if(preg_match('/^\/([^\/]*)$/', $request_uri, $matches)){
	//单页情况
 	$dir=''; $text=$matches[1]; 
	if($text==''){
		$class='index'; 			//首页情况
	}elseif($text=='robots.txt'){
		$class='robots';
	}elseif(preg_match('/^sitemap(_\w+_\d+)?\.xml$/i', $text, $matches)){
		$class='sitemap'; $text=isset($matches[1])?$matches[1]:'';		//站点地图
	}else{
		$class='page';		//page单页
	}
}elseif(preg_match('/^\/([^\/]+)\/(.*)$/', $request_uri, $matches)){
	$dir=$matches[1]; $text=$matches[2];
	if(array_key_exists($dir, $category)){
		//目录情况
		if($text==''){
			$class='category';		//默认目录
		}elseif(preg_match('/^index(\d*)\.html$/i', $text, $matches)){
			$class='category';	$text=$matches[1];	//
		}elseif(preg_match("/^{$static_format_reg}$/i", $text, $matches)){
			$class='single';
		}else{R404();}
	}else{R404();}
}else{R404();}


switch($class){
  case 'single':		get_single();			$file='single.php';		break;
  case 'category':	get_category();		$file='category.php';	break;
  case 'page':			get_page();			$file='page.php';		break;
  case 'index':			get_index();			$file='index.php';		break; 
  case 'sitemap':	require_once('inc/sitemap.php');				break;
  case 'robots':		require_once('inc/robots.php');				break;
  default:																						break;	//不在范围内则中止
}
if(empty($post) and empty($posts)) R404();	//如果无内容则404

require_once(get_theme_url('functions.php'));	//加载模板函数
$url=get_theme_url($file); require_once($url);	//加载对应模板

///////////////////////////////////////////////////////////////////////////////////////////
function R404(){echo '404 Not Found'; header('HTTP/1.1 404 Not Found'); header("status: 404 Not Found"); die;}
?>