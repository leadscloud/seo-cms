<?php
$config=array(
		"/en/"=>array("db1","这是英语目录"),
		"/es/"=>array("db2","这是西语目录")
		//"/配置虚拟路径名/"=》arry("数据库名","赋值该虚拟路径index页面的title")
);

//通过list.php就可以解析路径
//可修改以适应自己路径格式。
$uri=$_SERVER["REQUEST_URI"];
$pathpos=strrpos($uri,'/')+1;
$path=substr($uri,0,$pathpos);
//处理非法路径。
if(!in_array($path,array_keys($config))){
	if(in_array($uri."/",array_keys($config))){
		//目录301
		header("HTTP/1.1 301 Moved Permanently");
		header ("Location:{$uri}/");
	}else if(substr($uri,0,10)=="/index.htm"){
		//重定向原来模板中的index.htm*到首页
		header("HTTP/1.1 301 Moved Permanently");
		header ("Location:/");
	}else{
		//404
		header('HTTP/1.1 404 Not Found');
		header('Status: 404 Not Found');
		echo "<h1>404 File Not Found</h1>";
	}
	exit;
}
$file=substr($uri,$pathpos);
$id=intval($file);
$post=array("title"=>$config[$path][1]);
require_once("Kiss.php");//引用功能文件
$kiss=new Kiss($config[$path][0],$path);//新建一个对象,赋予初始值
//1、建议调用不同数据库的时候（如侧边栏放了很多不同数据库的文章），使用不同对象名；
//2、或是谨慎一点，检查每次使用的是不是对应的数据库，如果不是，重新赋值即可
if($id>0){
	//内容页面
	$post=$kiss->getPost($id);
	if(empty($post)){
		header('HTTP/1.1 404 Not Found');
		header('Status: 404 Not Found');
		echo "<h1>404 File Not Found</h1>";
		exit;
	}
}else{
	if(substr($file,0,5)=="index"){
		$page=intval(substr($file,5));
	}else if(substr($file,0,7)=="sitemap"){
		$kiss->sitemap(intval(substr($file,7)));
		exit;
	}
}
//解析完毕，可以通过$id>0来判断是否是内容页或者列表页
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$post["title"]?></title>
</head>
<body>
	<div id="head">
		<div id="banner">
    	</div>
    	<div id="menu">
			<ul>
				<li><a href="/index.php">HOME</a></li>
				<li><a href="<?=$path?>" target="_blank"><?=$config[$path][1] ?> </a></li>
			</ul>
		</div>
	</div>
	<div class="main">
		<?php 
			echo "<a href='{$path}'>{$config[$path][1]}</a>";
			if($id>0)echo "&gt;".$post["title"];
		?>
		<?php 
		if($id){
			//内页
			echo "<h2>{$post["title"]}</h2><div class='article'>{$post["content"]}</div>";
			$posts=$kiss->getPostsByNeighbor($post["rowid"]);
			echo "<div class='article-nav'>";
			if (!empty($posts["pre"]))echo "上一篇:<a href='{$posts["pre"]["rowid"]}.html'>{$posts["pre"]["title"]}</a><br>";
			if (!empty($posts["next"]))echo "下一篇:<a href='{$posts["next"]["rowid"]}.html'>{$posts["next"]["title"]}</a><br>";
			echo "</div>";
			//相关文章
			$posts=$kiss->getPostsByRelated($post["tag"],20);
			echo "<div><h3>相关文章</h3><ul>";
			foreach ($posts as $p){
				echo "<li><a href='{$p["rowid"]}.html'>{$p["title"]}</a></li>";
			}
			echo "</ul></div>";
			//随机文章
			$posts=$kiss->getPostsByRand(20);
			echo "<div><h3>随机文章</h3><ul>";
			foreach ($posts as $p){
				echo "<li><a href='{$p["rowid"]}.html'>{$p["title"]}</a></li>";
			}
			echo "</ul></div>";
		}else{
			//列表页。
			$num=5;//每页100个
			$count=$kiss->getPostsNum();
			$posts=$kiss->getPostsByTime($num,($page-1)*$num);
			echo "<div class='liebiao'><ul>";
			foreach ($posts as $p)echo "<li><a href='{$p["rowid"]}.html'>{$p["title"]}</a></li>";
			echo "</ul></div>";
			//翻页链接
			echo "<div  id='nav-below'><ul>";
			for ($i=1,$len=1+intval($count/$num);$i<=$len;$i++){
				echo "<li><a href='index".($i==1?"":$i).".html'".(($page==0&&$i==1)||$page==$i?" class='current_page'":"").">{$i}</a></li>";
			}
			echo "</ul></div>";
		} ?>
	</div>
	<div id="side">
		<ul>
        <?php
			$ki=new Kiss("db1");//数据库路径
			$pos=$ki->getPostsByRand(10);
			foreach($pos as $po)
				echo "<li><a href='/en/{$po["rowid"]}.html'>".htmlspecialchars($po["title"])."</a></li>";
		?>
        </ul>
        <ul>
        <?php
			$ki=new Kiss("db2");//数据库路径
			$pos=$ki->getPostsByRand(10);
			foreach($pos as $po)
				echo "<li><a href='/es/{$po["rowid"]}.html'>".htmlspecialchars($po["title"])."</a></li>";
		?>
        </ul>
	</div>
	<div class="foot">
      <a href="/sitemap.xml" target="_blank">Sitemap</a>|
      <?php
      foreach ($config as $k=>$v)
        echo "|<a href='{$k}'>{$v[1]}</a>";
      ?>
	</div>
</body>
</html>