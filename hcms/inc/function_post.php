<?php
//function_post.php V1.1 by jkj
$post=array(); $posts=array();	//文档初始化

//测试posts是否存在
function have_posts(){
	global $posts;	
	$result = empty($posts);
	return !$result; 
}
function the_post(){
	global $post, $posts;
	$post=array_shift($posts);
}




//加载模板文件
function the_ID()			{echo get_ID();}
function the_title()		{echo get_title();}
function the_content()		{echo get_content();}
function the_content2()		{echo get_content2();} //新增加字段
function the_permalink()	         {echo get_permalink();}

function get_ID()			{global $post; return array_key_exists('the_ID', $post)?$post['the_ID']:'';}
function get_title()		{global $post; return array_key_exists('the_title', $post)?$post['the_title']:'';}
function get_content()		{global $post; return array_key_exists('the_content', $post)?$post['the_content']:'';}
function get_content2()		{global $post; return array_key_exists('the_content2', $post)?$post['the_content2']:'';}//新增加字段
function get_permalink()	         {global $post; return array_key_exists('the_permalink', $post)?$post['the_permalink']:'';}



//get_single
function get_single(){
	global $dir, $matches;
	$static_format=constant('static_format');
	$static_format_reg=format(static_format, 'reg');
	$static_format_reg=str_replace('%post_id%', '(%post_id%)', $static_format_reg);
	$static_format_reg=str_replace('%postname%', '(%postname%)', $static_format_reg);
	preg_match("/^{$static_format_reg}$/i", $static_format, $name_matches);

	$where_arr=array();
	for ($i=1; $i<count($name_matches); $i++){
		switch($name_matches[$i]){
			case '%post_id%':
				$where_arr[]='`Id`=' . $matches[$i];
				break;
			case '%postname%': 
				$text_sql=format(urldecode($matches[$i]), 'sql');
				$where_arr[]="REPLACE(`标题`, ' ', '-')='{$text_sql}'";
				break;

		}
	}
	if(empty($where_arr)){$where='0';}else{$where=implode(' and ', $where_arr);}
	
	ConnectDatebase($dir);
	$row=FetchOne($where);
	CloseDatebase();
	if(empty($row)) return;
	
	$temp=array();
	$temp['the_ID']=$row['Id'];
	$temp['the_title']=$row['标题'];
	$temp['the_content']=$row['内容'];
	$temp['the_content2']=$row['内容1']; //新增加字段
	$temp['the_permalink']=GetPermalink($temp['the_ID'], $temp['the_title']);
	
	global $post, $posts;
	$post=$temp;
	$posts=array($post);
}


//get_category
function get_category(){
	global $dir, $text;

	global $page_current, $page_num;
	$category_perpagenum=constant('category_perpagenum');
	
	ConnectDatebase($dir);
	$page_current=$text==''?1:$text;		//获取index的id
	if(!is_numeric($page_current) or $page_current<=0) return;
	$page_begin=$category_perpagenum*($page_current-1);
	
	$sum=FetchCount();
	$page_num=ceil($sum/$category_perpagenum);
	
	$sql_args="limit {$page_begin}, {$category_perpagenum}";
	$rs=FetchAll($sql_args);
	CloseDatebase();
	if(empty($rs)) return;
	
	global $posts;
	$posts=array();
	foreach($rs as $row){
		$temp=array();
		$temp['the_ID']=$row['Id'];
		$temp['the_title']=$row['标题'];
		$temp['the_content']=$row['内容'];
    	//$temp['the_zuozhe']=$row['作者']; //列表新增加字段
    	//$temp['the_chuchu']=$row['出处']; //列表新增加字段
		$temp['the_permalink']=GetPermalink($temp['the_ID'], $temp['the_title']);
		
		$posts[]=$temp;
	}
	
	global $post, $category;
	$post['the_title']=$category[$dir][0] . ' ' . $page_current;
	$post['the_title']=ucwords($post['the_title']);
}


//get_page
function get_page(){
	global $text;
	$the_filename=trim($text);
	if($the_filename=='') $the_filename='index.html';
	$file_path='pages/' . $the_filename;
	if(!file_exists($file_path)) return;		//如果不存在则返回空
	$the_content = file_get_contents($file_path);
	
	global $post;
	$post['the_ID']=0;
	$post['the_title']=substr($the_filename, 0, -5);
	$post['the_content']=$the_content;
	$post['the_permalink']='/' . $the_filename;

	$post['the_title']=ucwords($post['the_title']);
	
	global $posts;
	$posts=array($post);
}


//get_page
function get_index(){
	global $post;
	$post['the_title']=get_bloginfo('index_name');
	$post['the_title']=ucwords($post['the_title']);

	global $posts;
	$posts=array($post);
}

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


//get_posts
function get_posts($the_args=''){	//get_posts('numberposts=30&orderby=rand');
	global $dir;
	if($dir==''){global $category; $key_arr=array_keys($category); $dir=$key_arr[0];}
	
	$args = array(
		'numberposts'  	=> 10,			//需要提取的文章数
		'offset'     			=> 0,						//以第几篇文章为起始位置
		'orderby'      		=> 'rand()',			//排序规则（注1）
		'order'     				=> 'DESC',					//升序、降序 'ASC' —— 升序 （低到高）  'DESC' —— 降序 （高到底）
		'post_status' 		=> 'publish' 					//文章状态
	);
	if(is_array($the_args)){
	
	}
	if(is_string($the_args) and $the_args<>''){
		$arg1=explode('&', $the_args);
		foreach($arg1 as $arg2){
			$temp=explode('=', $arg2);
			$args[$temp[0]]=$temp[1];
		}
	}
	if($args['orderby']=='rand') $args['orderby'].='()';
	$sql_args=' order by ' . $args['orderby'] . ' ' . $args['order'] . ' limit ' . $args['offset'] . ',' . $args['numberposts'];
	

	ConnectDatebase($dir);
	$rs=FetchAll($sql_args);
	CloseDatebase();
	
	$posts=array();
	foreach($rs as $row){
		$temp=array();
		$temp['the_ID']=$row['Id'];
		$temp['the_title']=$row['标题'];
		$temp['the_content']=$row['内容'];
		$temp['the_content2']=$row['内容1']; //新增加字段
		//$temp['the_zuozhe']=$row['作者']; //新增加字段
		$temp['the_permalink']=GetPermalink($temp['the_ID'], $temp['the_title']);
		
		$posts[]=$temp;
	}

	
	return $posts;
}



?>