<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
  <div id="head">
    <div id="banner">
    </div>
    <div id="menu">
    </div>
  </div>
  <div class="main">
    <h2><a href="/index.php">Kiss Site</a></h2>
    <div>
      <h2><a href="/en/" target="_blank">英语的目录en</a></h2><!--虚拟路径1-->
      <ul>
      <?php
      require_once("Kiss.php");//引用fuction文件
      $kiss=new Kiss("db1");//建立一个kiss对象，可读取实际存在的db1数据库
      $posts=$kiss->getPostsByTime(7);//随机读取db1数据7条
      print_r($posts);
      foreach($posts as $post)
      	echo "<li><a href='/en/{$post["id"]}.html'>".htmlspecialchars($post["title"])."</a></li>";//显示<li><a href='/虚拟路径/{$post["rowid"]}.html'>".htmlspecialchars($post["title"])."</a></li>
      ?>
      </ul>
    </div>
    <div>
      <h2><a href="/es/" target="_blank">西语的目录en</a></h2><!--虚拟路径2-->
      <ul>
      <?php
      $kiss=new Kiss("db2");//建立一个kiss对象，可读取实际存在的db2数据库
      $posts=$kiss->getPostsByTime(7);//随机读取db2数据7条
      foreach($posts as $post)
      	echo "<li><a href='/es/{$post["rowid"]}.html'>".htmlspecialchars($post["title"])."</a></li>";//显示<li><a href='/虚拟路径/{$post["rowid"]}.html'>".htmlspecialchars($post["title"])."</a></li>
      ?>
      </ul>
    </div>
  </div>
  <div class="foot">
    <a href="/sitemap.xml" target="_blank">Sitemap</a>
  </div>
</body>
</html>