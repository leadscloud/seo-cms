<?php
/**
 *
 * @version v2.2013.03.12
 * KISS Is a Stupid System
 * Release Notes
 * =============
 *
 */
class Kiss{
	public $db;
	public $cmsdir;
	public $currentTime;
	public $host;
	public $sitemapPage=1000;//sitemap分页显示，需要htaccess配合。
	private $dateformat;

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
		$this->currentTime=time();
		$this->cmsdir=$cmsdir;
		$this->host=(empty($_SERVER["REQUEST_SCHEME"])?"http":$_SERVER["REQUEST_SCHEME"])."://".$_SERVER["SERVER_NAME"];
		$this->dateformat="Y年m月d日";
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
	function getPostsByIds($ids,$start=0,$count=10){
		$sql="select rowid,title,tag,description,posttime,postname from post where rowid in ({$ids}) and posttime<{$this->currentTime} order by posttime desc limit {$start},{$count}";
		return $this->getData($sql);
	}

	function getLine($sql,$type=true){
		return $this->db->querySingle($sql,$type);
	}

	/**
	 * 按时间(从大到小)倒序
	 * @param int $count
	 * @param int $start
	 * @return array post
	 */
	function getPostsByTime($count=10,$start=0){
		$sql="select rowid,* from post where posttime<{$this->currentTime} order by posttime desc limit {$start},{$count}";
		return $this->getData($sql);
	}

	/**
	 * 返回有多少文章。
	 * @param unknown_type $sql 附加条件。
	 * @return number
	 */
	function getPostsNum($sql=""){
		$sql="select count(rowid) from post where posttime<{$this->currentTime} {$sql}";
		return intval($this->getLine($sql,false));
	}

	//传入一个tag
	function getPostsByTag($tag,$start=0,$count=10){
		return getPostsByIds($this->getLine("select v from tag where k='".$this->db->escapeString($tag)."'",false),$start,$count);
	}
	//根据几个tags得到相关文章
	function getPostsByRelated($tags,$count=10){
		$ids="";
		$tags=explode(",",$tags);
		$allid=array();
		foreach($tags as $tag){
			$tag=trim($tag);
			if($tag){
				$tempid=explode(",",$this->getLine("select v from tag where k='".$this->db->escapeString($tag)."'",false));		
				if(!empty($tempid)){ 
					// 朱海龙修改
					//foreach($tempid as $v)if($v)$allid[$v]=1;
					foreach($tempid as $v) if($v) @$allid[$v]+=1;
					//if(count($allid)>$count)break;
				}
			}
		}
		arsort($allid);
		$allid=array_keys($allid);
		$countID=count($allid);
		if($countID==0)return array();
		if($countID>$count){
			shuffle($allid);
			$allid=array_slice($allid,0,$count);
		}
		return $this->getData("select rowid,* from post where rowid in (".implode(",",$allid).")  and posttime<{$this->currentTime}");
	}
	/**上一篇/下一篇
	 * Kiss2中修正了算法。按照时间排序，更合理。但是由于排序，可能速度会更慢。如果是直接import的db，建议用Kiss1的getPostsByNeighbor
	* @param unknown_type $id
	* @return multitype:mixed Ambigous <mixed, unknown>
	*/
	function getPostsByNeighbor2($id){
		$ret=array();
		$postTime=$this->getLine("select posttime from post where rowid=".intval($id),false);
		if($postTime){
			$sql="select rowid,title,tag,description,postname from post where posttime<{$postTime} order by rowid desc Limit 1";
			$ret["pre"]=$this->getLine($sql);
			$sql="select rowid,title,tag,description,postname from post where  posttime>{$postTime} Limit 1";
			$ret["next"]=$this->getLine($sql);
		}
		return $ret;
	}
	/**
	 * Kiss1中的上一篇/下一篇算法。直接按id得到。理论上速度更快，但是如果rowid和posttime不成正比，会不准确。
	 */
	function getPostsByNeighbor($id){
		$ret=array();
		$id=intval($id);
		$sql="select rowid,title,tag,description,postname from post where posttime<{$this->currentTime} and rowid=".($id-1);
		$ret["pre"]=$this->getLine($sql);
		$sql="select rowid,title,tag,description,postname from post where  posttime<{$this->currentTime} and rowid=".($id+1);
		$ret["next"]=$this->getLine($sql);
		return $ret;
	}
	/**
	 * 经过大数据量测试，发现sqlit3 order by random() 效率确实存在问题。所以我们建议用下面的随机算法。
	 * rand(n)是O(n)的时间复杂度，所以要尽量避免多次rand，这里仅用了一次rand，不是真正随机。
	 * 并且，如果rowid和postime不是正相关关系，可能会出现返回数据不够的问题。
	 * @param int $count
	 * @return Ambigous <multitype:multitype:, multitype:multitype: >
	 */
	function getPostsByRand($count=10){
		$sql="select count(rowid) from post where posttime<{$this->currentTime}";
		$max=intval($this->getLine($sql,false));
		$ids=array();
		if($max<=$count)$ids=range(1,$max);
		else{
			$step=intval($max/$count);
			$rand=mt_rand(1,$step);
			for($i=0;$i<$count;$i++){
				$ids[]=$step*$i+$rand;
			}
		}
		$s_ids="";
		foreach($ids as $id)$s_ids.=",".$id;
		return $this->getData("select rowid,* from post where rowid in (".substr($s_ids,1).") and posttime<{$this->currentTime}");
	}
		
	
			function getPostsByRand_c($categ,$count=10){
		$sql="select count(rowid) from post where tag1='{$categ}'";
		$max=intval($this->getLine($sql,false));
		$ids=array();
		if($max<=$count)$ids=range(1,$max);
		else{
			$step=intval($max/$count);
			$rand=mt_rand(1,$step);
			for($i=0;$i<$count;$i++){
				$ids[]=$step*$i+$rand;
			}
		}
		$s_ids="";
		foreach($ids as $id)$s_ids.=",".$id;
		return $this->getData("select rowid,* from post where tag1='{$categ}'");
	}
	
function getPostsByRand_d($categ){
		$sql="select count(rowid) from post where tag1='{$categ}'";
		$max=intval($this->getLine($sql,false));
		$ids=array();
		$ids=range(1,$max);
		$s_ids="";
		foreach($ids as $id)$s_ids.=",".$id;
		return $this->getData("select rowid,* from post where tag1='{$categ}'");
	}
	


	
	
	function getTagsByRand($count= 30){
		$sql="select count(rowid) from tag";
		$max=intval(getLine($sql,false));
		$ids=array();
		if($max<=$count)$ids=range(1,$max);
		else{
			$step=intval($max/$count);
			$rand=rand(1,$step);
			for($i=0;$i<$count;$i++){
				$ids[]=$step*$i+$rand;
			}
		}
		$s_ids="";
		foreach($ids as $id)$s_ids.=",".$id;
		return $this->getData("select k from tag where rowid in (".substr($s_ids,1).")");
	}
	/**
	 * 兼容WP，可以按rowid,name得到文章。
	 * @param unknown_type $name
	 * @return Ambigous <mixed, unknown>
	 */
	function getPostByName($name){
		$sql="select rowid,* from post where postname='".$this->db->escapeString($name)."'";
		return $this->getLine($sql);
	}
	/**
	 * 根据id返回一篇完整的文章
	 * @param int $id 文章rowid
	 * @return Ambigous <mixed, unknown> 返回一个$post
	 */
	function getPost($id){
		$sql="select rowid,* from post where posttime<{$this->currentTime} and rowid=".intval($id);
		return $this->getLine($sql);
	}
	//返回前rows个tag，按count排序。如果是数组则返回改数组的所有tag
	function getTags($count=10,$start=0){
		$sql="select k from tag order by count desc limit {$start},{$count}";
		return $this->getData($sql);
	}
	//按月返回有日志的月份
	function getArchive(){
		$time=getLine("select min(posttime) as min, max(posttime) as max from post");
		$starttime=intval($time["min"]);
		$endtime=intval($time["max"]);
		if($endtime>$this->currentTime)$endtime=$this->currentTime;
		$sdate=getdate($starttime);
		$edate=getdate($endtime);
		$ret=array();
		$len=12*($edate["year"]-$sdate["year"])+$edate["mon"]-$sdate["mon"];
		for($i=0;$i<=$len;$i++){
			$nowmon=$sdate["mon"]+$i-1;
			$ret[]=($sdate["year"]+intval($nowmon/12)).($nowmon%12<9?"0":"").(1+$nowmon%12);
		}
		return $ret;
	}

	//查看当月的日志
	function getPostsByDate($mon,$start=0,$count=10){
		$stime=strtotime($mon."01 00:00:00");
		$etime=$stime+86400*date("t",$stime);
		return array($this->getLine("select count(rowid) from post where posttime >= {$stime} and posttime<{$etime}",false),$this->getData("select rowid,title,tag,description,posttime,postname from post where posttime >= {$stime} and posttime<{$etime} order by posttime desc limit {$start},{$count}"));
	}

	function get404(){
		return array("rowid"=>-1,"title"=>"not found","tag"=>"not found","description"=>"error,not found","content"=>"<h1>sorry not found</h1>");
	}
	/**
	 * 默认的链接形式。有两个地方用到了，一个是sitemap，一个是生成列表页面。调用的时候可以直接使用。
	 * @param unknown_type $post
	 * @return string
	 */
	function hrefFormat($post){
		//return $post["rowid"].".html";
		return $post["postname"].".html";
	}

	/**
	 * 考虑到google sitemap的通用性，把其他格式删去了。完善了google sitemap的功能。
	 * @param int $page 页数
	 * @param function $format
	 */
	function sitemap($page=0,$format=null){
		header("Content-Type: text/xml;charset=UTF-8");
		$allCount=intval($this->getLine("select count(rowid) from post where posttime<".$this->currentTime,false));
		if($allCount<$this->sitemapPage||$page>0){
			//显示
			echo '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
			$all=$this->db->query("select rowid,title,posttime,postname from post where posttime<".$this->currentTime.($page>0?(" LIMIT {$this->sitemapPage} OFFSET ".($page-1)*$this->sitemapPage):""));
			while($row=$all->fetchArray(SQLITE3_ASSOC)){
				if($format)$url=$format($row);
				else $url=$this->hrefFormat($row);
				$url=$this->host.$this->cmsdir.$url;
				echo "\r\n<url><loc>{$url}</loc></url>";;
			}
			$all->finalize();
			echo "\r\n</urlset>";
		}else{
			echo '<?xml version="1.0" encoding="UTF-8" ?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
			for ($i=1,$len=1+$allCount/$this->sitemapPage;$i<=$len;$i++)
				echo "\r\n<sitemap><loc>{$this->host}{$this->cmsdir}sitemap{$i}.xml</loc></sitemap>";
			echo "\r\n</sitemapindex>";
		}
	}
}
