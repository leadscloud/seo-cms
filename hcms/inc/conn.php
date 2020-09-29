<?php
//数据库封装

function ConnectDatebase($the_db, $admin=''){
	global $conn;
	$conn=new PDO("sqlite:data/{$the_db}.db3");
	
	global $where_publish, $category;
	$publish_date=isset($category[$the_db][1])?$category[$the_db][1]:'';
	$publish_pernum=isset($category[$the_db][2])?$category[$the_db][2]:0;
	$publish_delay=isset($category[$the_db][3])?$category[$the_db][3]:1000;
	
	if($admin=='admin' or $publish_date=='' or $publish_pernum==0){
		$where_publish='1';
	}else{
		date_default_timezone_set('Asia/Shanghai');
		$now_id=floor( (floor(time()/$publish_delay)*$publish_delay-strtotime($publish_date) )/86400*$publish_pernum );
		if($now_id>99999){$where_publish='1';}else{$where_publish="`Id`<={$now_id}";}
	}
}

function CloseDatebase(){
	global $conn;
	unset($conn);
}


/**
 * 获取第一条记录
 * @param string $sql
 * @return array
 */
function FetchOne($the_where){
	global $conn, $where_publish;
	$resultArr = array();
	
	$sql="select * from `Content` where `已采`=1 and {$where_publish} and {$the_where} limit 1";
	$result = $conn->query($sql);
	$row = $result->fetch();
	!empty($row) && $resultArr = $row;
	return $resultArr;
}

function FetchCount($the_where='1'){
	global $conn, $where_publish;
	$sql="select count(*) as `sum` from `Content` where `已采`=1 and {$where_publish} and {$the_where}";
	$result = $conn->query($sql);
	$sum = $result->fetchColumn();
	return $sum;
}



/**
 * 获取多条记录
 * @param string 
 * @return array
 */
function FetchAll($the_sql_args){
	global $conn, $where_publish;
	$the_sql_args=str_replace('rand()', 'random()', $the_sql_args);		//替换
	$sql="select * from `Content` where `已采`=1 and {$where_publish} {$the_sql_args}";
	$result = $conn->query($sql);
	$resultArr = $result->fetchAll();
	return $resultArr;
}


/**
 * 更新一条记录
 * @param string $sql
 * @return array
 */
function UpdateOne($the_where,  $set_arr){
	global $conn, $where_publish;
	
	$set_arr1=array();
	foreach ($set_arr as $the_k => $the_v){
		$the_v_sql=format($the_v, 'sql');
    	$set_arr1[]="`{$the_k}`='{$the_v_sql}'";
	}
	$set_temp=implode(', ', $set_arr1);
	$sql="update `Content` set {$set_temp} where `已采`=1 and {$where_publish} and {$the_where}";
	
	$result = $conn->query($sql);
}

/**
 * 删除一条记录
 * @param string $sql
 * @return array
 */
function DeleteOne($the_where){
	global $conn, $where_publish;
	
	$sql="delete from `Content` where `已采`=1 and {$where_publish} and {$the_where}";
	$result = $conn->query($sql);
}
?>