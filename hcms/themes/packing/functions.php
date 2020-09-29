<?php
//分页导航
function pagenavi(){
	global $page_current, $page_num;		//当前页，页面总数
	$n=10;					//展示页面量
	
	/*
	echo "<a href=\"index<?=($page_current-1)?>.html\">上一页</a>";
	echo "<a href=\"index<?=($page_current+1)?>.html\">下一页</a>";
	*/
    
	$n2=ceil($n/2);
	$i_min=$page_current-$n2;	if($i_min<=1) $i_min=1;										$show_begin=$i_min==1? '' : ' ... ';
	$i_max=$page_current+$n2; 	if($i_max>=$page_num) $i_max=$page_num;	$show_end=$i_max==$page_num? '' : ' ... ';
	
	echo "<div class=\"pagenavi\">\n\r";
    for ($i=$i_min; $i<=$i_max; $i++){
		if($i==1){$url='./';}else{$url="index{$i}.html";}
		if($i==$page_current){
			echo "{$i}\n\r";
		}else{
			echo "<a href=\"{$url}\">{$i}</a>\n\r";
		}
	}
	echo "</div>\n\r";

}










?>