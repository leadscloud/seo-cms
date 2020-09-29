<?php //Ver1.1
$http_host='http://' . $_SERVER ['HTTP_HOST'];
$sitemap_perpagenum=constant('sitemap_perpagenum');

if($text==''){
	//显示主xml
	$flag=false;
	if(count($category)<=1){
		$key_arr=array_keys($category);
		$key0=$key_arr[0];
		ConnectDatebase($key0);
		$sum=FetchCount();
		CloseDatebase();
		if($sum<=$sitemap_perpagenum) $flag=true;
	}
	//判断是否直接显示sitemap
	if($flag){ShowMap($key0, 1);}else{ShowIndex(); die;}

}else{
	//分xml
	list($temp, $dir, $page)=explode('_', $text);
	if(!is_numeric($page) or $page<=0) R404();
	if(!array_key_exists($dir, $category)) R404();
	ShowMap($page); die;
}




//地图索引
function ShowIndex(){
	global $category, $http_host, $sitemap_perpagenum;
	//初始化
	header("Content-type: application/xml"); 
	echo '<?xml version="1.0" encoding="utf-8"?>'; echo "\r\n";
	echo '<sitemapindex xmlns="http://www.google.com/schemas/sitemap/0.84">'; echo "\r\n";
	
	foreach($category as $dir=>$dir_name){
		ConnectDatebase($dir);
		$sum=FetchCount();
		CloseDatebase();
		
		$page_num=ceil($sum/$sitemap_perpagenum);
		for($i=1;$i<=$page_num; $i++){
			echo '<sitemap>'; echo "\r\n";
			echo "<loc>{$http_host}/sitemap_{$dir}_{$i}.xml</loc>\r\n";
			echo '</sitemap>'; echo "\r\n";
		}
	}
	echo '</sitemapindex>';
}




//地图文档
function ShowMap($the_page){
	global $http_host, $sitemap_perpagenum, $dir;
	$page_begin=$sitemap_perpagenum*($the_page-1);
	$sql_args="limit {$page_begin}, {$sitemap_perpagenum}";
	

	ConnectDatebase($dir);
	$rs=FetchAll($sql_args);
	CloseDatebase();
	if(empty($rs)) R404();
	
	global $posts;
	foreach($rs as $row){
		$temp=array();
		$temp['the_ID']=$row['Id'];
		$temp['the_title']=$row['标题'];
		//$temp['the_content']=$row['内容'];
		$temp['the_permalink']=GetPermalink($temp['the_ID'], $temp['the_title']);
		$posts[]=$temp;
	}

	//初始化
	header("Content-type: application/xml"); 
	echo '<?xml version="1.0" encoding="utf-8"?>'; echo "\r\n";
	echo '<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">'; echo "\r\n";
	foreach($posts as $post){
     	echo '<url>'; echo "\r\n";
		echo '<loc>' . $http_host . $post['the_permalink'] . '</loc>'; echo "\r\n";
		echo '</url>'; echo "\r\n";
	}
	echo '</urlset>';
}
?>