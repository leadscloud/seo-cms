<?php
function the_excerpt($description,$n=100){
	global $company;
	$description = str_replace('<p>','',$description);
	$description = str_replace('</p>','',$description);
	$description=str_replace('SB',$company,$description);
	$description = trim($description);
	if($n>strlen($description)) $stop=strlen($description); else $stop = strpos($description,' ',$n);
	echo substr($description,0,$stop).'&hellip;';
}
function getMenu($tag,$class){
	global $nav,$path;
	foreach($nav as $k=>$v){
       echo "<{$tag}";
	   if(@$path==$k) echo ' class="'.$class.'"';
	   echo '><a href="'.$k.'"';
	   if(@$path==$k) echo ' class="'.$class.'"';
	   echo '>'.$v."</a></{$tag}>";
	}
}
function dbPath($dbname){
	global $path,$language;
	//$dbpath;
	if($path=='/')
	  $dbpath='includes/'.$language.'.'.$dbname;
	else
	  $dbpath='../includes/'.$language.'.'.$dbname;
	return $dbpath;
}

function _e($text){
	$text=trim($text);
	global $language,$dir;
	$lang=strtolower($language);
	if($lang=='vn') $lang='vi';
	if($lang=='ir') $lang='fa';
	if($lang=='en') $ret=$text; 
	else{
		//@mkdir($dir."/includes/translate");
		$check=$dir.'/includes/translate/'.md5($text);
		if(is_dir($check)){
			//判断目录存在
			$file=$check.'/'.$lang.'.txt';
			if(file_exists($file)){
				// 文件已经存在，则直接获取即可。
				$ret=file_get_contents($file);
				//break;
			}else{
				// 文件不存在，翻译并保存。
				$text=urlencode($text);
				$url='http://api.microsofttranslator.com/v2/ajax.svc/TranslateArray2?appId=%22Tp9A4V5THLBP0pe9E5Vb5eX8MNixNVhGFv36k0440Y7aowwcYrvAP_5xDX_1zFjZq%22&texts=%5B%22'.$text.'%22%5D&from=%22en%22&to=%22'.$lang.'%22';
				$value=file_get_contents($url);
				$p1=strpos($value,'TranslatedText":"')+17;
				$p2=strpos($value,'","TranslatedTextSentenceLengths')-$p1;
				$ret = substr($value,$p1,$p2);
				file_put_contents($file,$ret);	
			}
		}else{
			//目录不存在，创建目录，翻译并保存
			mkdir($check);
			$file=$check.'/'.$lang.'.txt';
			$text=urlencode($text);
			$url='http://api.microsofttranslator.com/v2/ajax.svc/TranslateArray2?appId=%22Tp9A4V5THLBP0pe9E5Vb5eX8MNixNVhGFv36k0440Y7aowwcYrvAP_5xDX_1zFjZq%22&texts=%5B%22'.$text.'%22%5D&from=%22en%22&to=%22'.$lang.'%22';
			$value=file_get_contents($url);
			$p1=strpos($value,'TranslatedText":"')+17;
			$p2=strpos($value,'","TranslatedTextSentenceLengths')-$p1;
			$ret = substr($value,$p1,$p2);	
			file_put_contents($file,$ret);
		}	
	}
	echo $ret;
}
?>