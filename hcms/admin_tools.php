<?php //管理员工具V2.0.1
$password='hcms';			//管理密码

require_once('config.php');
require_once('inc/function.php');
require_once('inc/function_get.php');
require_once('inc/conn.php');
if(defined('admin_tools_password')){$password=constant('admin_tools_password');}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员工具</title>
<style>
body	{ font-size:14px; font-family:Arial, Helvetica, sans-serif}
</style>
</head>

<body>
<?php
$m=filter('m');
if($m=='logout'){	setcookie('p', '');	Alert('退出登录！', 'admin_tools.php');}


if (isset($_POST['p'])){$p=$_POST['p'];}elseif(isset($_COOKIE['p'])){$p=$_COOKIE['p'];}else{$p='';}
setcookie('p', $p, time()+30*86400);
if($p<>$password){
	LoginForm();
}else{
	$dir=filter('dir'); $w=filter('w');
	SearchForm();
	
	if(array_key_exists($dir, $category)){
		ConnectDatebase($dir, 'admin');
		$id=filter('id', 'int', 0); $where="`Id`={$id}";
		$m=filter('m', '', '');
		if($m=='' or $m=='del'){
			if($id>0) DeleteOne($where);
			
			$w_sqlike=format($w, 'sqlike');
			$where="and (`Id` like '%{$w_sqlike}%' or `标题` like '%{$w_sqlike}%') limit 40000";
			$rs=FetchAll($where);
	
			SearchResult();
		}elseif($m=='edit' or $m=='submit'){
			$where="`Id`={$id}";
			
			if($m=='submit'){
				$title=filter('title');
				$content=filter('content');
				$set=array(	'标题'	=> $title, '内容' => $content);
				UpdateOne($where, $set);
			}
			$row=FetchOne($where);
			
			$title=$row['标题'];
			$content=$row['内容'];
			$permalink=GetPermalink($id, $title);
			EditForm();
		}
		CloseDatebase();
	}
}

?>


<?php function Alert($message, $url='./'){?>
<p style="text-align:center; margin:200px auto 0"><?=$message?>三秒后<a href="<?=$url?>">返回</a>！</p>
<script>setTimeout("window.location='<?=$url?>';", 3000)</script>
<?php die;?>
<?php }?>

<?php function LoginForm(){?>
<form name="loginform" method="post" style="text-align:center; margin:200px auto 0;">
<input name="p" type="password" style="width:96px"  /><input type="submit" value="登录" />
</form>
<script>loginform.p.focus();</script>
<?php }?>


<?php function SearchForm(){?>
<p style="font-size:12px">
<span style="float:right;">Admin已登录  <a href="?m=logout">退出</a></span>
请选择数据库，并输入ID或标题查找：
</p>
<form  name="searchform" method="post">
<input name="p" type="hidden" value="<?=$GLOBALS['p']?>" />
<input name="m" type="hidden" />
<input name="id" type="hidden" />
<select name="dir" title="数据库名">
<?php foreach($GLOBALS['category'] as $k => $v){
	echo "<option value=\"{$k}\"";
	if($k==$GLOBALS['dir']) echo ' selected="selected"';
	echo ">{$k}</option>\r\n";}
?>
</select>
<input name="w" type="text" value="<?=$GLOBALS['w']?>" title="ID or 标题" /> <input type="submit" value="  查  找  " />
</form>
<?php }?>

<?php function SearchResult(){
	global $rs;

	echo "<table cellspacing=\"5\">\r\n";
	foreach($rs as $row){
		$temp_id=$row['Id'];
		$temp_title=$row['标题'];
		$temp_content=$row['内容'];
		$temp_permalink=GetPermalink($temp_id, $temp_title);
		echo "<tr>\r\n";
		echo "<td title=\"ID\">{$temp_id}</td>";
		echo "<td title=\"标题\"><a href=\"{$temp_permalink}\" target=_blank>{$temp_title}</td>";
		echo "<td><a href=\"javascript:\" onclick=\"searchform.m.value='edit'; searchform.id.value='{$temp_id}'; searchform.submit();\">Edit</a>  <a href=\"javascript:\" onclick=\"if(window.confirm('确认删除么？')){searchform.m.value='del'; searchform.id.value='{$temp_id}'; searchform.submit();}\">Del</a></td>";
		echo "</tr>\r\n";
	}
	echo "</table>\r\n";
}
?>



<?php function EditForm(){?>
<form method="post">
<input name="p" type="hidden" value="<?=$GLOBALS['p']?>" />
<input name="dir" type="hidden" value="<?=$GLOBALS['dir']?>" />
<input name="w" type="hidden" value="<?=$GLOBALS['w']?>" />
<input name="id" type="hidden" value="<?=$GLOBALS['id']?>" />
<input name="m" type="hidden" value="submit" />
<p>ID:<b title="ID"><?=$GLOBALS['id']?></b> URL:<a href="<?=$GLOBALS['permalink']?>" target="_blank"><?=$GLOBALS['permalink']?></a></p>
<p><input name="title" type="text" value="<?=$GLOBALS['title']?>" style="width:66%" /></p>
<p><textarea name="content" style="width:66%; height:260px"><?=$GLOBALS['content']?></textarea></p>
<p><input name="" type="submit" value="  提  交  " /></p>
</form>
<?php }?>
</body>
</html>