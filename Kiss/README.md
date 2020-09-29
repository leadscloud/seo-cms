## Kiss2使用说明

### 文件列表说明

- .htaccess 
- index.php # 入口文件，请求从这儿开始
- Kiss.php # 主要的数据库操作类，获取文章等的功能函数集合
- list.php # 显示采集列表页使用的文件

- db1 # 测试数据库1
- db2 # 测试数据库2
- db-admin.php # 数据库管理工具，你也可以无视它
- importNewLocoy.php # 火车头db3数据库导出为系统可用的数据库

- SpiderResult.mdb # 老版本的火车头用的数据库是access数据库，目前已弃用
- importLocoy.php # 老版本火车头数据库转换工具，已弃用


### 网站上线时用到的文件
- .htaccess
- db1 db2 …… dbn – 自命名数据库
- index.php
- Kiss.php
- list.php
- 个人网站使用的其他文件和文件夹

### 快速上手

- 修改空白模版index.php（首页） list.php（内页和列表页）的样式，以及内容填充
- 使用火车头采集数据并得到数据库SpiderResult.db3
- 修改importNewLocoy.php的路径时间等，自把握，访问得到自己的N个db
- 访问db-admin.php，可以用sql处理N个db (建议你在本地使用navicat等sqlite数据库管理工具)
- 上传要放到网站上的文件

### Kiss.php里常用的fuction使用介绍：

**公共变量**

```php
	public $cmsdir;
	public $currentTime;
	public $sitemapPage;
```

**其它一些函数***

```php
function getData($sql){}
//执行sql得到存储的文章数据，返回数组

function getPostsByIds($ids,$start=0,$count=10){} 
//获取rowid在数组ids中，从第start个（不写则默认为第一个）开始的count（不写则默认为10）篇文章

function getLine($sql,$type=true){}
//只根据sql获取一篇文章

function getPostsByTime($count=10,$start=0){}
//获取最新发布的posts，从第start个（不写则默认为最新的一个）开始的count（不写则默认为10）篇文章

function getPostsNum($sql=""){}
//获取数目

function getPostsByTag($tag,$start=0,$count=10){}
//获取 tag相同的从第start个开始的count篇文章

function getPostsByRelated($tags,$count=10){} 
//根据几个tags得到相关的count（不写则默认为10）篇文章

function getPostsByNeighbor2($id){}
//第id篇文章的和上一篇 ["pre"] /下一篇["next"]，精确，可能速度慢。如果直接import的db，建议用下一个

function getPostsByNeighbor($id){}
//第id篇文章的和上一篇 ["pre"] /下一篇["next"]，理论上速度更快,但如果rowid和posttime不成正比，会不准确

function getPostsByRand($count=10){}
//获取10篇随机文章

function getTagsByRand($count= 30){}
//获取随机tag

function getPostByName($name){}
//根据name获取文章

function getPost($id){}
//根据id获取一篇完整的文章

function getTags($count=10,$start=0){}
//返回从start开始的count个tag，按照count（表中的attribute）排序

function getArchive(){}
//按月返回有文章

function getPostsByDate($mon,$start=0,$count=10){}
//查看mon月的count篇文章，从start开始
	
function hrefFormat($post){}
//默认的链接形式。sitemap和列表页面用到。如调用可以直接使用

function sitemap($page=0,$format=null){}
//地图
```