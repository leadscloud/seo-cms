

这个系统使用thinkPHP开发的。据说这个系统比kiss好用些，主要是功能完善，可以方便后台管理数据库，产品数据库和采集数据库分开，可以方便生成。

具体自己摸索吧，我没有使用过这个系统。


```bash
/home/wwwroot/mfCommn  # 所有网站都会用到的公共文件
/home/wwwroot/default # 安装好lnmp后，自动会有这个文件夹，默认站点
/home/wwwroot/example.com # 这是示例站点，以后上线的站点都和这个差不多
```

使用这个系统时，用一个新的VPS去尝试它，不要在已有的生产环境中使用。


## 上站流程

### 安装lnmpa

https://lnmp.org/

### 上传站点

你可以安装ftp，或者使用sftp上传
ftp工具有filezilla等

```
cd /home/wwwroot/
unzip xx.com.zip
chown -R www.www /home/wwwroot
php /home/make.php
```

### 生成站点

把make.php 放到 `/home/make.php` 放到其它位置也行

```
php /home/make.php
```

