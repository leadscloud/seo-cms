<?php
/**
 * 使用网站管理系统生成
 * 基于原始版本importLocoy.php修改
 * 适用于新版火车头程序，即数据库名称为 “SpiderResult.db3” 格式。
 * 生成的时间：2017-08-15
 * 版本：v1.0.1
 * 更新：
 * 2018-7-19：新增依据title来判断每一条采集内容是否保留
**/
// 默认配置
header("Content-Type: text/html; charset=UTF-8");
set_time_limit(0);
ini_set('memory_limit','1024M');
date_default_timezone_set("Asia/Shanghai");

// 参数
$file="SpiderResult.db3"; // 请将源文件放在本文件的相同目录中
$file="de.db3"; // 请将源文件放在本文件的相同目录中
$dbname="db.db"; // 生成数据库名称
$fromTime=strtotime("2010-01-16 05:42:44"); // 文章发布开始时间
$toTime=strtotime("2019-10-20 05:42:44");   // 文章发布截止时间
$num = 0; // 要读取的文章数量，0 为全部，如果该数字大于数据库实际文章数，则读取全部，否则读取该数量文章。

// 程序开始
$db=getDB();
$kiss=@new Kiss($file);
$tmp_ids=$kiss->getPostsIds("where 内容 is not NULL");
$count= count($tmp_ids);
echo "数据库中共有非空内容：{$count}篇。\n";
if($num!=0){
  if($num<$count) $count=$num;
}
if($count==0||$toTime-$fromTime==0) die("没有找到文章。活着发布开始时间和结束时间相同。");
$step=intval(($toTime-$fromTime)/$count);
$ids=array();
foreach($tmp_ids as $id){
	$ids[]=$id['ID'];
}
shuffle($ids);  // 随机结果
echo "本次设置发布 {$count} 篇文章。\n根据设定的起止时间，每隔 {$step} 秒发布一篇。\n开始转换格式...\n";
$db->exec("begin exclusive transaction");
$yes=0;
$no=0;
for($i=0;$i<$count;$i++){
	try{
    $post=$kiss->getPost($ids[$i]);
		$title=trim($post["标题"]); // 火车头中title字段，注意改成自己的字段名
		$content=trim($post["内容"]); // 火车头中content字段，注意改成自己的字段名
    $content = preg_replace("|http://[\w\_\/\.\-\?\=]+|","",$content);
    $content = preg_replace("|www.[\w\_\/\.\-\?\=]+|","",$content);
    $content=preg_replace("|[\x{4e00}-\x{9fa5}]+|u","",$content);
    // 替换title和content中的标点符号
    $biaodians = array( "&#39,"=>"'", "&#039,"=>"'", "&quot,"=>"\"", "&amp,"=>"&", "\\"=>"", "‘"=>"'", "’"=>"'", "“"=>"\"", "”"=>"\"", "，"=>",", " ,"=>",", "\r"=>"", "\n"=>"","  "=>" ","  "=>" ","  "=>" ", );
    foreach($biaodians as $k=>$v){
      $title = str_replace($k,$v,$title);
      $content = str_replace($k,$v,$content);
    }
    // 删除title中的特殊标点符号
    $fuhao = array("`", ",", ".", "/", ":", ";", "?", "'", "\"", "(", ")", "[", "]", "@", "«", "»", "®", "&", "™", "€", "#", "%", "*", "–", "_", "+", "!", "|", "`", "~", "<", ">", "  ", "  ", "  ", "  ",);
    $title = str_replace($fuhao," ",$title);
    // 删除title中的搜索引擎标记
    $title=str_replace(" - 国内版 Bing","",$title); /**替换bing Title中的字符 */
    $title=str_replace(" - Yahoo奇摩 搜尋結果","",$title); /**替换 Yahoo奇摩 中的字符 */
    $title=str_replace(" - Dogpile Web Search","",$title); /**替换 Dogpile 中的字符 */
    // echo $content;
    // exit;
    // 把content拆分成数组
    if(strstr($content,'</div></li>')){
      $content = explode("</div></li>",$content); // content使用的分隔符
      if(count($content)>5){
        shuffle($content); // 结果随机
        // 获取 tags
        $tag=getTags($title);
        // 获取最终content
        $postcontent="";
        $tmptag=explode(",",$tag);
        foreach($content as $v){
          $tmp_v='';
          /**兼容bing和yahoo */
          if(strstr($v,'<h3 class="title">')){ /**yahoo */
            $tmp_v.=getInfo('<h3 class="title">','</h3>',$v,true);
            $tmp_v.=getInfo('<p class="lh-16">', '</p>', $v,true);
            $tmp_v.=getInfo('<p class="lh-l">', '</p>', $v,true); // 奇摩yahoo
            $tmp_v=str_replace(' class="title"','',$tmp_v);
            $tmp_v=str_replace(' class="lh-16"','',$tmp_v);
            $tmp_v=str_replace(' class="lh-l"','',$tmp_v);
          }
          if(strlen($tmp_v)>50){ 
            $postcontent.=$tmp_v.'[|||]';
          }
        }
        $content=$postcontent;
        if(substr_count($content,'[|||]')>4){
          // description字段，获取content中第一个<p>...</p>内容
          $des_pos1=strpos($content,'<p>')+3;
          $des_pos2=strpos($content,'</p>')-$des_pos1;
          $description=substr($content,$des_pos1,$des_pos2);
          // postname
          $postname=str_replace(' ', '-',strtolower($title));
          $postname=rawurlencode($postname);
          // 转义字符
          $title=$db->escapeString($title);
          $tag=$db->escapeString($tag);
          $description=$db->escapeString($description);
          $content=$db->escapeString($content);
          $postname=$db->escapeString($postname);
          // $sql="insert into post values ('{$title}','{$tag}','{$description}','{$content}','',".($fromTime+$i*$step+mt_rand(0,$step)).",100,'{$postname}')";
          $sql="insert into post values ('{$title}','{$tag}','{$description}','{$content}','owner',NULL,".($fromTime+$i*$step+mt_rand(0,$step)).",'{$postname}')";
          $result=$db->exec($sql);
          print_r($result);
          if($result) $yes++; else $no++;
          if($i%100==0){
            flush(); //将输出发送给客户端浏览器，使其可以立即执行服务器端输出的 JavaScript 程序。
            echo $i.'. '.$title."\n";
          }
        }else{
          $no++;
        }
      }else{
        $no++;
      }
    } else {
      echo "内容格式不符合要求，因为不存在标签：</div></li>";
      $no++;
    }
   }catch(Exception $e){
     echo $e;
     $no++;
   }
 }
 $db->exec("end transaction");
 echo "成功 {$yes} 篇，失败{$no}篇。\n更新tags...\n共计：";
 updateTags();
 echo "个\n完成tags更新!\n";
 $db->close();
 function getTags($title){
   $title = strtolower(trim($title));
   $teshuzimu = array("á"=>"a", "à"=>"a", "â"=>"a", "ä"=>"a", "ã"=>"a", "ç"=>"c", "é"=>"e", "è"=>"e", "ê"=>"e", "ë"=>"e", "í"=>"i", "ì"=>"i", "î"=>"i", "ï"=>"i", "ñ"=>"n", "ó"=>"o", "ò"=>"o", "ô"=>"o", "ö"=>"o", "õ"=>"o", "œ"=>"e", "ß"=>"b", "ú"=>"u", "ù"=>"u", "û"=>"u", "ü"=>"u",);
   foreach($teshuzimu as $k => $v) $title = str_ireplace($k,$v,$title);
   $stopwords = array( " a "," about "," above "," above "," across "," after "," afterwards "," again "," against "," all "," almost "," alone "," along "," already "," also "," although "," always "," am "," among "," amongst "," amoungst "," amount "," an "," and "," another "," any "," anyhow "," anyone "," anything "," anyway "," anywhere "," are "," around "," as "," at "," back "," be "," became "," because "," become "," becomes "," becoming "," been "," before "," beforehand "," behind "," being "," below "," beside "," besides "," between "," beyond "," bill "," both "," bottom "," but "," by "," call "," can "," cannot "," cant "," co "," con "," could "," couldnt "," cry "," de "," describe "," detail "," do "," done "," does "," down "," due "," during "," each "," eg "," eight "," either "," eleven "," else "," elsewhere "," empty "," enough "," etc "," even "," ever "," every "," everyone "," everything "," everywhere "," except "," few "," fifteen "," fify "," fill "," find "," fire "," first "," five "," for "," former "," formerly "," forty "," found "," four "," from "," front "," full "," further "," get "," give "," go "," had "," has "," hasnt "," have "," he "," hence "," her "," here "," hereafter "," hereby "," herein "," hereupon "," hers "," herself "," him "," himself "," his "," however "," hundred "," ie "," if "," in "," inc "," indeed "," interest "," into "," is "," it "," its "," itself "," keep "," last "," latter "," latterly "," least "," less "," ltd "," made "," many "," may "," me "," meanwhile "," might "," more "," moreover "," most "," mostly "," move "," much "," must "," my "," myself "," name "," namely "," neither "," never "," nevertheless "," next "," nine "," no "," nobody "," none "," noone "," nor "," not "," nothing "," now "," nowhere "," of "," off "," often "," on "," once "," one "," only "," onto "," or "," other "," others "," otherwise "," our "," ours "," ourselves "," out "," over "," own "," part "," per "," perhaps "," please "," put "," rather "," re "," same "," see "," seem "," seemed "," seeming "," seems "," serious "," several "," she "," should "," show "," side "," since "," sincere "," six "," sixty "," so "," some "," somehow "," someone "," something "," sometime "," sometimes "," somewhere "," still "," such "," system "," take "," ten "," than "," that "," the "," their "," them "," themselves "," then "," thence "," there "," thereafter "," thereby "," therefore "," therein "," thereupon "," these "," they "," thickv "," thin "," third "," this "," those "," though "," three "," through "," throughout "," thru "," thus "," to "," together "," too "," top "," toward "," towards "," twelve "," twenty "," two "," un "," under "," until "," up "," upon "," us "," very "," via "," was "," we "," well "," were "," whatever "," when "," whence "," whenever "," whereafter "," whereas "," whereby "," wherein "," whereupon "," wherever "," whether "," while "," whither "," who "," whoever "," whole "," whom "," whose "," will "," with "," within "," without "," would "," yet "," you "," your "," yours "," yourself "," yourselves "," commonly "," common " );
   $title = trim(str_replace($stopwords," "," ".$title." "));
   $tag="";
   $tags=explode(" ",$title);
   $tags=array_unique($tags);
   foreach($tags as $t){
     $t=trim($t);
     if(strlen($t)>1) $tag.=",".$t;
   }
   if($tag)$tag=substr($tag,1);
   return $tag;
 }
 function getDB(){
   global $dbname;
   if(file_exists($dbname))echo "{$dbname} 存在，做追加操作。\n";
   $db=new SQLite3($dbname,SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE);
   $db->exec("CREATE TABLE IF NOT EXISTS post (title varchar(256),tag varchar(256),description varchar(256),content TEXT,source varchar(256),ready INTEGER,posttime INTEGER,postname varchar(512))");
   $db->exec("create index if not exists indextime on post (posttime desc)");
   $db->exec("create index if not exists indextitle on post (title)");
   $db->exec("create UNIQUE index if not exists indexpostname on post (postname)");
   
   $db->exec("CREATE TABLE if not exists tag (k VARCHAR(128) PRIMARY KEY,v TEXT,count integer)");
   $db->exec("create index if not exists indexcount on tag (count desc) ");
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
 function getData($sql){
   global $db;
   $result=$db->query($sql) or die("Error:".$sql);
   $ret=array();
   while($row=$result->fetchArray(SQLITE3_ASSOC))$ret[]=$row;
   unset($result);
   unset($row);
   return $ret;
 }
 function checkTables(){
   global $db;
   $db->exec("CREATE TABLE IF NOT EXISTS post (title varchar(256),tag varchar(256),description varchar(256),content TEXT,source varchar(256),ready INTEGER,posttime INTEGER,postname varchar(512))");
   $db->exec("create index if not exists indextime on post (posttime desc)");
   $db->exec("create index if not exists indextitle on post (title)");
   $db->exec("create UNIQUE index if not exists indexpostname on post (postname)");
   
   $db->exec("CREATE TABLE if not exists tag (k VARCHAR(128) PRIMARY KEY,v TEXT,count integer)");
   $db->exec("create index if not exists indexcount on tag (count desc) ");
   return $db;
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
   echo count($tags);
 }
 // 获取2个字符串之间的内容
 function getInfo($startstr,$endstr,$content,$fun=false){
	$strpos1=strpos($content,$startstr);
	$strpos2=strpos($content,$endstr,$strpos1);
	if($strpos1&&$strpos2){
		$strlens=$strpos2-$strpos1;
		$result=substr($content,$strpos1,$strlens);
		$result=trim($result);
		if($fun) $result=$startstr.strip_tags($result).$endstr;
	}else $result='';
	return $result;
 }
 /**
 *
 * KISS Is a Stupid System
 * Release Notes
 * =============
 *
 */
 class Kiss{
	public $db;
	function __construct($dbfile=null,$cmsdir="/"){
		try{
			$this->db=new SQLite3($dbfile?$dbfile:"db",SQLITE3_OPEN_READONLY);
		}catch(Exception $e){
			header('HTTP/1.1 503 Service Temporarily Unavailable');
			header('Status: 503 Service Temporarily Unavailable');
			header('Retry-After: 3600');
			echo "<h2>Database error. 503 Service Temporarily Unavailable</h2><p>".$e->getMessage()."</p>";
			die();
		}
		date_default_timezone_set("Asia/Shanghai");
	}
	function __destruct(){
		if($this->db)$this->db->close();
	}
	function getData($sql){
		$result=$this->db->query($sql) or die("Error:".$sql);
		$ret=array();
		while($row=$result->fetchArray(SQLITE3_ASSOC))$ret[]=$row;
		$result->finalize();
		unset($result);
		unset($row);
		return $ret;
	}
	function getLine($sql,$type=true){
		return $this->db->querySingle($sql,$type);
	}
	/**
	 * 返回有多少文章。
	 * @param unknown_type $sql 附加条件。
	 * @return number
	 */
	function getPostsIds($sql){
		$sql="select ID from \"Content\" {$sql}";
		return $this->getData($sql);
	}
	/**
	 * 根据id返回一篇完整的文章
	 * @param int $id 文章rowid
	 * @return Ambigous <mixed, unknown> 返回一个$post
	 */
	function getPost($id){
		$sql="select * from \"Content\" where ID=".intval($id);
		return $this->getLine($sql);
	}
 }
?>
