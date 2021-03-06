<?php
/**
 * 脚本遍历/home/wwwroot/文件夹，为每个站点生成一份vhost文件放到/usr/local/nginx/conf/vhost/*
 * 不要在已经有站点的VPS下面运行它，因为它会先删除所有的vhost，建议你在新的VPS中使用
 */
$dir="/home/wwwroot";
$opendir=opendir($dir);
$i=0;
$date_dir='/home/wwwlogs/'.date("Y-m-d");
if (!file_exists($date_dir))mkdir($date_dir);
$rz_txt='/home/wwwlogs/0000rz.txt';
if(file_exists($rz_txt)){
	file_put_contents($rz_txt,"\r\n".date('Y-m-d H:i:s'),FILE_APPEND);
}else{
	file_put_contents($rz_txt,date('Y-m-d H:i:s'));
}
$owners=array();
while(($owner=readdir($opendir))!==false){
	if(is_dir($dir."/".$owner)&&$owner!="."&&$owner!=".."&&$owner!="default"&&$owner!="mfCommon"){
		$owners[]=$owner;
	}
}
unset($owner);
sort($owners);

if($owners){
	exec("rm -rf /usr/local/nginx/conf/vhost/*");
}

foreach($owners as $domain){
	$i++;
	$realpath="{$dir}/{$domain}";
	$s="#GENERATED BY make.php AT ".date("Y-m-d H:i:s").".\n\n";
	$s.=<<<EOF
server
    {
        listen 80;
        #listen [::]:80;
        server_name ${domain} www.${domain};
		if (\$host != 'www.${domain}' ) {
            rewrite ^/(.*)$ http://www.${domain}/$1 permanent;
        }
        index index.php index.html index.htm;
        root  ${realpath};

        include other.conf;
        include enable-php.conf;

        location ~ .*\.(gif|jpg|jpeg|png|bmp|swf)$
        {
            expires      30d;
        }

        location ~ .*\.(js|css)?$
        {
            expires      12h;
        }

        location ~ /.well-known {
            allow all;
        }

        location ~ /\.
        {
            deny all;
        }
		
		limit_conn perip 10;
		limit_rate 100k;

        access_log  ${date_dir}/${domain}.log;
    }
EOF;
	file_put_contents("/usr/local/nginx/conf/vhost/{$domain}.conf",$s);
}
echo "i found {$i} sites in total\n";
echo "restarting lnmp\n";
exec("lnmp restart",$out);
foreach($out as $v)echo $v."\n";
?>
