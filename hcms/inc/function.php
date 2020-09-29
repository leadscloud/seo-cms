<?php
//filter Ver1.0.1
function filter($name, $type='', $default=''){
	if(isset($_GET[$name])){
		$temp=trim($_GET[$name]);
	}elseif(isset($_POST[$name])){
		$temp=trim($_POST[$name]);
	}else{
		$temp=$default;
	}
	switch($type){
	 case 'int':	$temp=(int)$temp; break;
	}
	return $temp;
}


////GetIntroVer1.0
function GetIntro($the_text, $length=36){
    if (strlen($the_text)>$length){
        for($i=0; $i<$length; $i++){ if(ord($the_text[$i])>128) $i+=2;}
        $the_text = substr($the_text,0,$i) .'..';
    }
    return $the_text;
}


////GetSpace Ver1.0.0
function GetSpace($the_inquiry){
	if (strlen($the_inquiry)==0) $the_inquiry='&nbsp;';
	return $the_inquiry;
}

//format 格式化字符串
function format($str, $type=''){
	$temp=$str;
	switch($type){
	 case 'sql':
	 	$temp=str_replace('\\', '\\\\', $temp);
	 	$temp=str_replace('\'', '\\\'', $temp);
		break;
	 case 'sqlike':
	 	$temp=str_replace('\\', '\\\\', $temp);
	 	$temp=str_replace('\'', '\\\'', $temp);
	 	$temp=str_replace('%', '\\%', $temp);
		$temp=str_replace('_', '\\_', $temp);
		break;
	 case 'reg':
		$temp=str_replace('.', '\.', $temp);
		$temp=str_replace('/', '\/', $temp);
		break;
	 case 'pre':
	 	$temp=str_replace("\r\n", "<br>\r\n", $temp);
		break;
	}
	return $temp;
}



///////////////////////////////////////////
//debug调试
/////////////////////////////////////////
function debug($string){
	echo '<p><textarea style="width:800px; height:200px">';
	print_r($string);
	echo "</textarea></p>\r\n";
	//ob_flush();flush();
}
?>