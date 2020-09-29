<?php
/*
Description: creat cache
Version: 1.0
Author: zhuhailong
date:2013-12-23
*/


function CreateHtmlFile($FilePath,$Content){
	$FilePath = preg_replace('/[ <>\'\"\r\n\t\(\)]/', '', $FilePath);

	// if there is http:// $FilePath will return its bas path
	$dir_array = explode("/",$FilePath);

	//split the FilePath
	$max_index = count($dir_array) ;
	$i = 0;
	$path = $_SERVER['DOCUMENT_ROOT']."/";

	while( $i < $max_index ){
		$path .= "/".$dir_array[$i];
		$path = str_replace("//","/",$path);

		if( $dir_array[$i] == "" ){
			$i ++ ;
			continue;
		}

		if( substr_count($path, '&') ) return true;
		if( substr_count($path, '?') ) return true;
		if( !substr_count($path, '.htm')){
			//if is a directory
			if( !file_exists( $path ) ){ 
				@mkdir( $path, 0777);
				@chmod( $path, 0777 );
			}
		}
		$i ++;
	}

    if( is_dir( $path ) ){
		$path = $path."/index.html";
	}
	if ( !strstr( strtolower($Content), '</html>' ) ) return;

	//if sql error ignore...
	$fp = @fopen( $path , "w+" );
	if( $fp ){
		@chmod($path, 0666 ) ;
		@flock($fp ,LOCK_EX );

		// write the file。
		fwrite( $fp , $Content );
		@flock($fp, LOCK_UN);
		fclose($fp);
	 }
}


$is_buffer = true;
if(  substr_count($_SERVER['REQUEST_URI'], '?'))  $is_buffer = false;
if(  substr_count($_SERVER['REQUEST_URI'], '../'))  $is_buffer = false;

if( $is_buffer ){
	ob_start('cos_cache_ob_callback');
	register_shutdown_function('cos_cache_shutdown_callback');
}

function cos_cache_ob_callback($buffer){

	$buffer = preg_replace('/(<\s*input[^>]+?(name=["\']author[\'"])[^>]+?value=(["\']))([^"\']+?)\3/i', '\1\3', $buffer);

	$buffer = preg_replace('/(<\s*input[^>]+?value=)([\'"])[^\'"]+\2([^>]+?name=[\'"]author[\'"])/i', '\1""\3', $buffer);
	
	$buffer = preg_replace('/(<\s*input[^>]+?(name=["\']url[\'"])[^>]+?value=(["\']))([^"\']+?)\3/i', '\1\3', $buffer);

	$buffer = preg_replace('/(<\s*input[^>]+?value=)([\'"])[^\'"]+\2([^>]+?name=[\'"]url[\'"])/i', '\1""\3', $buffer);
	
	$buffer = preg_replace('/(<\s*input[^>]+?(name=["\']email[\'"])[^>]+?value=(["\']))([^"\']+?)\3/i', '\1\3', $buffer);

	$buffer = preg_replace('/(<\s*input[^>]+?value=)([\'"])[^\'"]+\2([^>]+?name=[\'"]email[\'"])/i', '\1""\3', $buffer);

	CreateHtmlFile($_SERVER['REQUEST_URI'],$buffer.'<!--cache-html-->');
	
	return $buffer;
}

function cos_cache_shutdown_callback(){
	ob_end_flush();
	flush();
}
?>