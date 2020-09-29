<form action="" method="get">
<input name="dbname" type="text" /><input name="" type="submit" />
</form>
<?php
if($_GET['dbname']!=''){
set_time_limit(0);
ini_set('memory_limit', '2048M'); // 内存可以改成1024M

$dbname=$_GET['dbname']; //新数据库名称
$db=getDB();

updateTags();
$db->close();
}
//创建一个空的DB
function getDB(){
	global $dbname;
	if(file_exists($dbname))echo "<h2>{$dbname}存在，做追加操作。</h2>";
	$db=new SQLite3($dbname,SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE);
	$db->exec("CREATE TABLE IF NOT EXISTS post (title varchar(256),tag varchar(256),description varchar(256),content TEXT,comment TEXT,posttime INTEGER,postname varchar(512))") && $db->exec("CREATE TABLE if not exists tag (k VARCHAR(128) PRIMARY KEY,v TEXT,count integer)") && $db->exec("create index if not exists indexcount on tag (count desc) ") && $db->exec("create index if not exists indextime on post (posttime desc)") && $db->exec("create UNIQUE index if not exists indexpostname on post (postname)");
	return $db;
}

function post($url,$postData){
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
	if($postData) {
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($postData));
	}
	$curlResponse = curl_exec($ch);
	$curlErrno = curl_errno($ch);
	if ($curlErrno) {
		$curlError = curl_error($ch);
		echo $curlError;
		throw new Exception($curlError);
	}
	curl_close($ch);
	return $curlResponse;
}

function checkTables(){
	global $db;
	return $db->exec("CREATE TABLE IF NOT EXISTS post (title varchar(256),tag varchar(256),description varchar(256),content TEXT,comment TEXT,posttime INTEGER)") && $db->exec("CREATE TABLE if not exists tag (k VARCHAR(128) PRIMARY KEY,v TEXT,count integer)") && $db->exec("create index if not exists indexcount on tag (count desc) ") && $db->exec("create index if not exists indextime on post (posttime desc)");
}
function getData($sql){
	global $db;
	$result=$db->query($sql) or die("Error:".$sql);
	$ret=array();
	while($row=$result->fetchArray(SQLITE3_ASSOC))$ret[]=$row;
	unset($result);
	unset($row);
	return $ret;
}
function updateTags(){
	$tags=array();
	$sql="select rowid,tag from post";
	$data=getData($sql);
	foreach($data as $d){
		$postTags=explode(",",$d["tag"]);
		foreach($postTags as $pt){
			if(isset($tags[$pt]))$tags[$pt]=$tags[$pt].",".$d["rowid"];
			else $tags[$pt]=$d["rowid"];
		}
	}
	if(!empty($tags)){
		global $db;
		$db->exec("drop table tag");
		checkTables();
		$db->exec("begin exclusive transaction");
		foreach($tags as $k=>$v){
			$sql="insert into tag(k,v,count) values ('".$db->escapeString($k)."','{$v}',".(substr_count($v,",")+1).")";
			$db->exec($sql);
		}
		$db->exec("end transaction");
	}
	echo count($tags)." tags updated";
}
?>