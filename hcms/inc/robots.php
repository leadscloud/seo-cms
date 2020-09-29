<?php //Ver1.1
$http_host='http://' . $_SERVER ['HTTP_HOST'];

header('Content-Type: text/plain'); //纯文本格式 

echo "User-agent: *\r\n";
echo "Sitemap: {$http_host}/sitemap.xml";
die;
?>