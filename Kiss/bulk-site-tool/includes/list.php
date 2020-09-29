<?php
// 载入配置文件
$dir=dirname(__FILE__);
$dir = str_replace("\\","/",$dir);
$dir = str_replace("/includes","",$dir);
require_once($dir.'/config.php');
require_once($dir.'/includes/Kiss.php');
require_once($dir.'/includes/functions.php');
/*
* 这里一般不需要修改，是语种对应的数据库名称和分类页的标题
* 如果需要自己定制的，可以修改对应的选项
*/
$page=0;
$category=false;
$single=false;
if($cache) include($dir.'/includes/cache.php');
$EN=array( // 英文
	"/"				=>array("","Home"),
	"/products/"	=>array("EN.products","Products"),
	"/solutions/"	=>array("EN.solutions","Solutions"),
	"/project/"		=>array("EN.project","Project"),
	"/about.html"	=>array("","About"),
	"/contact.html"	=>array("","Contact"),
	"/service.html"	=>array("","Service"),
	"/galleries.html"	=>array("","Galleries"),
	
);
$ES=array( // 西语
	"/"				=>array("","Inicio"),
	"/products/"	=>array("ES.products","Productos"),
	"/solutions/"	=>array("ES.solutions","Soluciones"),
	"/project/"		=>array("ES.project","Proyecto"),
	"/about.html"	=>array("","Sobre nosotros"),
	"/contact.html"	=>array("","Contacto"),
	"/service.html"	=>array("","Servicio"),
	"/galleries.html"	=>array("","Galerías"),
);
$FR=array( // 法语
	"/"				=>array("","Accueil"),
	"/products/"	=>array("FR.products","Produit"),
	"/solutions/"	=>array("FR.solutions","Solution"),
	"/project/"		=>array("FR.project","Projet"),
	"/about.html"	=>array("","A propos de nous"),
	"/contact.html"	=>array("","Contactez-nous"),
	"/service.html"	=>array("","Un service"),
	"/galleries.html"	=>array("","Galeries"),
);
$AR=array( // 阿语
	"/"				=>array("","منزل"),
	"/products/"	=>array("AR.products","المنتجات"),
	"/solutions/"	=>array("AR.solutions","محلول"),
	"/project/"		=>array("AR.project","مشروع"),
	"/about.html"	=>array("","حول الولايات المتحدة"),
	"/contact.html"	=>array("","اتصل بنا"),
	"/service.html"	=>array("","الخدمات"),
	"/galleries.html"	=>array("","المعارض"),
);

$RU=array( // 俄语
	"/"				=>array("","ГЛАВНАЯ"),
	"/products/"	=>array("RU.products","ПРОДУКТЫ"),
	"/solutions/"	=>array("RU.solutions","РЕШЕНИЕ"),
	"/project/"		=>array("RU.project","ПРОЕКТ"),
	"/about.html"	=>array("","О Нас"),
	"/contact.html"	=>array("","КОНТАКТЫ"),
	"/service.html"	=>array("","обслуживание"),
	"/galleries.html"	=>array("","галереи"),
);
$VN=array( // 越南语
	"/"				=>array("","Trang đầu"),
	"/products/"	=>array("VN.products","Sản phẩm"),
	"/solutions/"	=>array("VN.solutions","Giải pháp"),
	"/project/"		=>array("VN.project","Các dự án"),
	"/about.html"	=>array("","Liên quan"),
	"/contact.html"	=>array("","Liên hệ"),
	"/service.html"	=>array("","Dịch vụ"),
	"/galleries.html"	=>array("","Phòng trưng bày"),
);
$PT=array( // 葡语
	"/"				=>array("","Página inicial"),
	"/products/"	=>array("PT.products","Produtos"),
	"/solutions/"	=>array("PT.solutions","Soluções"),
	"/project/"		=>array("PT.project","Caso do projeto"),
	"/about.html"	=>array("","Quem somos"),
	"/contact.html"	=>array("","Contacte-nos"),
	"/service.html"	=>array("","Serviço"),
	"/galleries.html"	=>array("","Galerias"),
);
$IR=array( // 波斯语
	"/"				=>array("","صفحه خانگی"),
	"/products/"	=>array("IR.products","محصول"),
	"/solutions/"	=>array("IR.solutions","راه حل"),
	"/project/"		=>array("IR.project","پروژه"),
	"/about.html"	=>array("","در باره"),
	"/contact.html"	=>array("","تماس"),
	"/service.html"	=>array("","سرویس"),
	"/galleries.html"	=>array("","گالری ها"),
);
$TH=array( // 泰语
	"/"				=>array("","โฮมเพจ"),
	"/products/"	=>array("TH.products","ผลิตภัณฑ์"),
	"/solutions/"	=>array("TH.solutions","โซลูชั่น"),
	"/project/"		=>array("TH.project","โครงการ"),
	"/about.html"	=>array("","เกี่ยวกับเรา"),
	"/contact.html"	=>array("","ติดต่อเรา"),
	"/service.html"	=>array("","บริการ"),
	"/galleries.html"	=>array("","แกลลอรี่"),
);
$ID=array( // 印尼
	"/"				=>array("","Home"),
	"/products/"	=>array("TH.products","Produk"),
	"/solutions/"	=>array("TH.solutions","Solusi"),
	"/project/"		=>array("TH.project","Proyek"),
	"/about.html"	=>array("","Tentang kami"),
	"/contact.html"	=>array("","Hubungi kami"),
		"/service.html"	=>array("","Layanan"),
		"/galleries.html"	=>array("","Galeri"),
);
$DE=array( //德语
	"/"				=>array("","Zuhause"),
	"/products/"	=>array("DE.products","produkte"),
	"/solutions/"	=>array("DE.solutions","lösungen"),
	"/project/"		=>array("DE.project","Projekt"),
	"/about.html"	=>array("","Über uns"),
	"/contact.html"	=>array("","kontaktiere uns"),
		"/service.html"	=>array("","Bedienung"),
		"/galleries.html"	=>array("","galerien"),
);
$YD=array( // 印地
	"/"				=>array("","घर"),
	"/products/"	=>array("YD.products","उत्पादों"),
	"/solutions/"	=>array("YD.solutions","समाधान की"),
	"/project/"		=>array("YD.project","परियोजना"),
	"/about.html"	=>array("","हमारे बारे में"),
	"/contact.html"	=>array("","हमसे संपर्क करें"),
		"/service.html"	=>array("","सेवाएं"),
		"/galleries.html"	=>array("","दीर्घाओं"),
);

$MN=array( // 蒙古
	"/"				=>array("","Нүүр хуудас"),
	"/products/"	=>array("MN.products","бүтээгдэхүүн"),
	"/solutions/"	=>array("MN.solutions","шийдэл"),
	"/project/"		=>array("MN.project","төсөл"),
	"/about.html"	=>array("","Бидний тухай"),
	"/contact.html"	=>array("","Холбоо барих"),
		"/service.html"	=>array("","үйлчилгээ"),
		"/galleries.html"	=>array("","галлерей"),
);

$FL=array( // 菲律宾语
	"/"				=>array("","Bahay"),
	"/products/"	=>array("FL.products","Mga Produkto"),
	"/solutions/"	=>array("FL.solutions","Solusyon"),
	"/project/"		=>array("FL.project","Proyekto"),
	"/about.html"	=>array("","Tungkol sa"),
	"/contact.html"	=>array("","Makipag-ugnay sa"),
	"/service.html"	=>array("","Serbisyo"),
	"/galleries.html"	=>array("","Mga Gallery"),
	
);

$KR=array( // 韩语
	"/"				=>array("","집"),
	"/products/"	=>array("KR.products","제작품"),
	"/solutions/"	=>array("KR.solutions","솔루션"),
	"/project/"		=>array("KR.project","계획"),
	"/about.html"	=>array("","우리에 대해"),
	"/contact.html"	=>array("","문의하기"),
	"/service.html"	=>array("","서비스"),
	"/galleries.html"	=>array("","갤러리"),
	
);
$WE=array( // 乌尔都语
	"/"				=>array("","الصفحة الرئيسية"),
	"/products/"	=>array("WE.products","منتجات"),
	"/solutions/"	=>array("WE.solutions","محاليل"),
	"/project/"		=>array("WE.project","مشروع"),
	"/about.html"	=>array("","معلومات عنا"),
	"/contact.html"	=>array("","اتصل بنا"),
	"/service.html"	=>array("","الخدمات"),
	"/galleries.html"	=>array("","المعارض"),
	
);
$BE=array( //布尔语
	"/"				=>array("","huis"),
	"/products/"	=>array("BE.products","produkte"),
	"/solutions/"	=>array("BE.solutions","Oplossings"),
	"/project/"		=>array("BE.project","projek"),
	"/about.html"	=>array("","Oor ons"),
	"/contact.html"	=>array("","Kontak Ons"),
	"/service.html"	=>array("","dienste"),
	"/galleries.html"	=>array("","galerye"),
	
);
$AM=array( //阿姆
	"/"				=>array("","ቤት"),
	"/products/"	=>array("AM.products","ምርቶች"),
	"/solutions/"	=>array("AM.solutions","መፍትሄዎች"),
	"/project/"		=>array("AM.project","ፕሮጀክት"),
	"/about.html"	=>array("","ስለ እኛ"),
	"/contact.html"	=>array("","አግኙን"),
	"/service.html"	=>array("","አገልግሎቶች"),
	"/galleries.html"	=>array("","ጋለሪዎች"),
	
);
$IT=array( // 意大利语
	"/"				=>array("","Casa"),
	"/products/"	=>array("IT.products","Prodotti"),
	"/solutions/"	=>array("IT.solutions","soluzioni"),
	"/project/"		=>array("IT.project","Progetto"),
	"/about.html"	=>array("","riguardo a noi"),
	"/contact.html"	=>array("","Contattaci"),
	"/service.html"	=>array("","Servizio"),
	"/galleries.html"	=>array("","Gallerie"),
	
);
$TE=array( // 英文
	"/"				=>array("","Ev"),
	"/products/"	=>array("TE.products","Ürünler"),
	"/solutions/"	=>array("TE.solutions","Çözümler"),
	"/project/"		=>array("TE.project","proje"),
	"/about.html"	=>array("","hakkında"),
	"/contact.html"	=>array("","Temas"),
	"/service.html"	=>array("","Hizmet"),
	"/galleries.html"	=>array("","Galeriler"),
	
);

// 联系我们信息
$contact=array(
	'sb'=>array(
				 'tel'=>'+86-21-123123, 58381236176',
				 'fax'=>'+86-21-1231212',
				 'add'=>'No.444 chuangye Road, South Jinqiao Area,Pudong New Area, Shanghai, China.',
				 'postcode'=>'201201',
				 'email'=>'test@gmail.com',
				 ),
	'ze'=>array(
				 'tel'=>'0086-21-12345600 0086-21-12345601',
				 'fax'=>'0086-21-13123121',
				 'add'=>'No.444 chuangye Road, South Jinqiao Area, Pudong, Shanghai, China',
				 'postcode'=>'201201',
				 'email'=>'test@gmail.com',
				 ),
);
// 商务通
$livechat=array(
	'sb'=>'<script language="javascript" src="http://pkt.zoosnet.net/JS/LsJS.aspx?siteid=float=1&lng=en"></script>',
	'ze'=>'<script language="javascript" src="http://pkt.zoosnet.net/JS/LsJS.aspx?siteid=float=1&lng=en"></script>',

);
require_once($dir.'/includes/fanyi.php');
$curdir='/themes/'.$themedir;

$config = $$language;
$nav = array();
foreach($config as $k=>$v){
	$nav[$k]=$v[1];
}
$home = $config['/'][1];
$post['title']='homepage';
$banner['sb']=array('/images/banner_s_1.jpg','/images/banner_s_2.jpg','/images/banner_s_3.jpg','/images/banner_s_4.jpg','/images/banner_s_5.jpg');
$banner['ze']=array('/images/banner_z_1.jpg','/images/banner_z_2.jpg','/images/banner_z_3.jpg','/images/banner_z_4.jpg','/images/banner_z_5.jpg','/images/banner_z_6.jpg');

/*
* 载入配置文件，并解析
*/

$uri=$_SERVER["REQUEST_URI"];

if($uri=='/'||$uri=='/index.html'||$uri=='/index.php'){
	$path='/';
	include($dir.'/themes/'.$themedir.'/index.php');
	exit;
	}
if($uri=='/about-us.html'||$uri=='/about.html'){
	$path='/about.html';
	$post['title']=$config['/about.html'][1].' '.$company;
	$post['img1']='/images/about-1.jpg';
	$post['img2']='/images/about-2.jpg';
	$post['img3']='/images/about-3.jpg';
	$post['img4']='/images/about-4.jpg';
	$post['content']="<p>{$company} is a leading and pioneering enterprise with the most advanced international level in R&D, manufacturing and selling of large-scale crushing & screening plants , industrial milling equipments and beneficiation plants. All of our equipment have got ISO international quality system certification, European Union CE certification and Russian GOST certification.</p><p>{$company} brings a large number of high-qualification talents together. Bai Yinghui, general research and development engineer, is a well-known expert in crushing and grinding area who won the youth medal of technology of the state council and receives special government allowance. {$company} owns an experienced service team, offering the customer free design and professional skill training and live guide for installation and debugging. The company's service networks have spread all over the country. Established client files, and mix the traditional door-to-door service with online service together, complementary the advantages. {$company} has won high recognition from clients.</p><p>The company mainly manufactures mobile crushers, stationary crushers, sand-making machines, grinding mills and complete plants that are widely used in mining, construction, highway, bridge, coal, chemical, metallurgy, refractory matter, etc. Product quality is life, and scientific innovation is motive power. {$company} got ISO international quality system certification, European Union CE certification and Russian GOST certification. The company has strong research and development strength and innovation.</p><p>{$company} machinery research institute was founded in 2005 which is the most powerful comprehensive technological research institute in the domestic mining machinery industry and provides top scientific research platform for professional personnel. Up to now, {$company} has won 10 national patents, 24 national utility model patents and 3 provincial science and technology achievement awards. The company products remain the international leading level by strengthening international exchanges and cooperation all the time, and has won a wide range of international market, such as Russian, Azerbaijan, Kazakhstan, Turkey, Kuwait, South Africa, Egypt, Vietnam, Malaysia, India, Australia, Korea, Canada and European Union,etc.</p><p>Through 30 year's hard work, {$company}'s staff built supremacy of credibility, excellent quality, service \"{$company}\" brand, and has made outstanding contributions to the development of mechanical manufacturing industry for China and the whole world.</p>";
	if(file_exists($dir.'/themes/'.$themedir.'/page.php')) include($dir.'/themes/'.$themedir.'/page.php'); 
	else include($dir.'/themes/'.$themedir.'/about.php');
	exit;
}
if($uri=='/contact-us.html'||$uri=='/contact.html'){
	$path='/contact.html';
	$post['title']=$config['/contact.html'][1];
	$post['img1']='/images/contact-1.jpg';
	$post['img2']='/images/contact-2.jpg';
	$post['img3']='/images/contact-3.jpg';
	$post['img4']='/images/contact-4.jpg';
	$post['content']="<h3>Head office address</h3><p>No.444 chuangye Road, South Jinqiao Area, Pudong, Shanghai, China</p><p> Zip: 201201</p>";
	if(file_exists($dir.'/themes/'.$themedir.'/page.php')) include($dir.'/themes/'.$themedir.'/page.php'); 
	else include($dir.'/themes/'.$themedir.'/contact.php');
	exit;
}

if($uri=='/service-us.html'||$uri=='/service.html'){
	$path='/service.html';
	$post['title']=$config['/service.html'][1];
	$post['img1']='/images/service-1.jpg';
	$post['img2']='/images/service-2.jpg';
	$post['img3']='/images/service-3.jpg';
	$post['img4']='/images/service-4.jpg';
	$post['content']="<h3>Head office address</h3><p>No.444 chuangye Road, South Jinqiao Area, Pudong, Shanghai, China</p><p> Zip: 201201</p>";
	if(file_exists($dir.'/themes/'.$themedir.'/page.php')) include($dir.'/themes/'.$themedir.'/page.php'); 
	else include($dir.'/themes/'.$themedir.'/service.php');
	exit;
}

if($uri=='/galleries-us.html'||$uri=='/galleries.html'){
	$path='/galleries.html';
	$post['title']=$config['/galleries.html'][1];
	if(file_exists($dir.'/themes/'.$themedir.'/page.php')) include($dir.'/themes/'.$themedir.'/page.php'); 
	else include($dir.'/themes/'.$themedir.'/galleries.php');
	exit;
}




$pathpos=strrpos($uri,'/')+1;
$path = substr($uri,0,$pathpos);
if(!in_array($path,array_keys($config))){	
	if(in_array($uri."/",array_keys($config))){
		//目录301
		header("HTTP/1.1 301 Moved Permanently");
		header ("Location:{$uri}/");
	}else if(substr($uri,0,10)=="/index.htm"){
		//重定向原来模板中的index.htm*到首页
		header("HTTP/1.1 301 Moved Permanently");
		header ("Location:/");
	}else{
		//404
		header('HTTP/1.1 404 Not Found');
		header('Status: 404 Not Found');
		echo "<h1>404 File Not Found</h1>";
	}		
	exit;
}
$kiss=new Kiss($config[$path][0],$path);
$post=array("title"=>$config[$path][1]);
$catTitle = $config[$path][1];
$file=substr($uri,$pathpos);
if(substr($file,0,7)=="sitemap"){
	$kiss->sitemap(intval(substr($file,7)));
	exit;
}
if(substr($file,-5)=='.html') {$file=substr($file,0,-5); }
if(substr($file,-4)=='.php') {$file=substr($file,0,-4);}
if(substr($file,-1)=='/') {$file=substr($file,0,-1);}
if(strstr($file,'-')){
	$single=true;
	$post=$kiss->getPostByName($file);
	if(empty($post)){
		header('HTTP/1.1 404 Not Found');
		header('Status: 404 Not Found');
		echo "<h1>404 File Not Found</h1>";
		exit;
	}
	
	$post['title']=str_replace('SB',$company,$post['title']);
	$post['description']=str_replace('SB',$company,$post['description']);
	$post['content']=str_replace('SB',$company,$post['content']);

	//$breadcrumbs = '<a href="/">Home</a> &raquo; <a href="'.$path.'">'.$catTitle.'</a> &raquo; '.$post['title'];
	
	if(file_exists($dir.'/themes/'.$themedir.'/single-'.substr($path,1,-1).'.php')) include($dir.'/themes/'.$themedir.'/single-'.substr($path,1,-1).'.php'); 
	else include($dir.'/themes/'.$themedir.'/single.php');
}else{
	$page=intval(substr($file,5));
	$category=true;
	//$breadcrumbs = '<a href="/">Home</a> &raquo; '.$catTitle;
	if(file_exists($dir.'/themes/'.$themedir.'/category-'.substr($path,1,-1).'.php')) include($dir.'/themes/'.$themedir.'/category-'.substr($path,1,-1).'.php'); 
	else include($dir.'/themes/'.$themedir.'/category.php');
}
exit;
?>