<?php
//function_get.php Ver1.0 by jkj

////////////////////////////////////////////////////////////////////////////
//网站配置
////////////////////////////////////////////////////////////////////////////
//加载配置信息
function bloginfo($the_show='name'){echo get_bloginfo($the_show);}
function get_bloginfo($the_show='name'){
	switch ($the_show) {
		case 'name':					return constant('site_name');			break; 
		case 'site':						return constant('site_name');			break; 
		case 'site_name':			return constant('site_name');			break; 
		case 'index':					return constant('index_name');			break; 
		case 'index_name':		return constant('index_name');			break;
		case 'template_url':				return $GLOBALS['template_path'];	break; 
		case 'template_directory':	return $GLOBALS['template_path'];	break; 
		default: break;
	}
}


////////////////////////////////////////////////////////////////////////////
//网站模板
////////////////////////////////////////////////////////////////////////////
$theme_name=constant('theme_name');
$theme_path="themes/{$theme_name}/";
$template_path='/themes/' . $theme_name;
function get_theme_url($the_file){$the_file=substr($the_file, 0, 1)=='/'?$the_file:"/{$the_file}"; return $GLOBALS['theme_path'] . $the_file;}	//获取模板文件路径
function get_template_url($the_file){$the_file=substr($the_file, 0, 1)=='/'?$the_file:"/{$the_file}"; return $GLOBALS['template_path'] . $the_file;}	//模板引用部分

function get_template(){return $GLOBALS['theme_name'];}	//获得模板目录的名车
function get_template_directory(){return $GLOBALS['template_path'];}	//获得模板目录的url

//加载模板文件
function get_header()	{require_file(get_theme_url('header.php')); }
function get_footer()	{require_file(get_theme_url('footer.php')); }
function get_nav()	{require_file(get_theme_url('nav.php')); }
function get_right()	{require_file(get_theme_url('right.php')); }
function get_message()	{require_file(get_theme_url('message.php')); }

//加载文档
function require_file($the_file_url){
	global $post, $posts, $template_path;
	require_once($the_file_url);
}

//获取链接
function GetPermalink($the_post_id='', $the_post_name='', $the_post_chuchu='', $the_post_zuozhe=''){

	$the_permalink=constant('static_format');

	$the_permalink=str_replace('%post_id%', $the_post_id, $the_permalink);

	if($the_post_name) $the_post_name=str_replace(' ', '-', $the_post_name);
	$the_permalink=str_replace('%postname%', urlencode($the_post_name), $the_permalink);

	if($the_post_chuchu) $the_post_chuchu=str_replace(' ', '-', $the_post_chuchu);
	$the_permalink=str_replace('%postchuchu%', urlencode($the_post_chuchu), $the_permalink);

	if($the_post_zuozhe) $the_post_zuozhe=str_replace(' ', '-', $the_post_zuozhe);
	$the_permalink=str_replace('%postzuozhe%', urlencode($the_post_zuozhe), $the_permalink);

	$the_permalink='/' . $GLOBALS['dir'] . '/' . $the_permalink;
	return $the_permalink;
}
?>