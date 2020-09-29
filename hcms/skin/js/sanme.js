// JavaScript Document

//导航菜单
function menuFix() {
 var sfEls = document.getElementById("nav").getElementsByTagName("li");
 for (var i=0; i<sfEls.length; i++) {
  sfEls[i].onmouseover=function() {
  this.className+=(this.className.length>0? " ": "") + "sfhover";
  }
  sfEls[i].onMouseDown=function() {
  this.className+=(this.className.length>0? " ": "") + "sfhover";
  }
  sfEls[i].onMouseUp=function() {
  this.className+=(this.className.length>0? " ": "") + "sfhover";
  }
  sfEls[i].onmouseout=function() {
  this.className=this.className.replace(new RegExp("( ?|^)sfhover\\b"),

"");
  }
 }
}
window.onload=menuFix;

//右侧伸缩菜单
$(document).ready(function(){

	$("#firstpane p.menu_head").click(function(){
		$(this).addClass("current").next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
		$(this).siblings().removeClass("current");
	});

	
});

//返回顶部
$(function() {
	$(window).scroll(function(){
		var scrolltop=$(this).scrollTop();		
		if(scrolltop>=200){		
			$("#elevator_item").show();
		}else{
			$("#elevator_item").hide();
		}
	});		
	$("#elevator").click(function(){
		$("html,body").animate({scrollTop: 0}, 500);	
	});		
});


//首页banner
jQuery(function ($) {
    if ($(".slide-pic").length > 0) {
        var defaultOpts = { interval: 5000, fadeInTime: 300, fadeOutTime: 200 };
        var _titles = $("ul.slide-txt li");
        var _titles_bg = $("ul.op li");
        var _bodies = $("ul.slide-pic li");
        var _count = _titles.length;
        var _current = 0;
        var _intervalID = null;
        var stop = function () { window.clearInterval(_intervalID); };
        var slide = function (opts) {
            if (opts) {
                _current = opts.current || 0;
            } else {
                _current = (_current >= (_count - 1)) ? 0 : (++_current);
            };
            _bodies.filter(":visible").fadeOut(defaultOpts.fadeOutTime, function () {
                _bodies.eq(_current).fadeIn(defaultOpts.fadeInTime);
                _bodies.removeClass("cur").eq(_current).addClass("cur");
            });
            _titles.removeClass("cur").eq(_current).addClass("cur");
            _titles_bg.removeClass("cur").eq(_current).addClass("cur");
        };
        var go = function () {
            stop();
            _intervalID = window.setInterval(function () { slide(); }, defaultOpts.interval);
        };
        var itemMouseOver = function (target, items) {
            stop();
            var i = $.inArray(target, items);
            slide({ current: i });
        };
        _titles.hover(function () { if ($(this).attr('class') != 'cur') { itemMouseOver(this, _titles); } else { stop(); } }, go);
        _bodies.hover(stop, go);
        go();
    }
});


//手机菜单
$(function(){
    $('#header .navlist ul').css('display','none');
	$('#header .close').css('display','none');
    $('#header .menu').click(function(){
			$(this).hide();
			$('#header .navlist ul').toggle(1000);
			$('#header .close').css('display','block');
		});
    $('#header .close').click(function(){
			$('.menu').show();
			$('#header .navlist ul').toggle(1000);
			$('#header .close').css('display','none');
		});	
});


//详情页面固定菜单
$(function(){       
	//获取要定位元素距离浏览器顶部的距离
	var navH = $(".products-menu").offset().top;
	//滚动条事件
	$(window).scroll(function(){
			//获取滚动条的滑动距离
			var scroH = $(this).scrollTop();
			//滚动条的滑动距离大于等于定位元素距离浏览器顶部的距离，就固定，反之就不固定
			if(scroH>navH){
					$(".products-menu").css({"position":"fixed","top":0,"left":0,"background":"#0094da"});
					$(".products-menu ul li a").css({"color":"#fff"});
					$(".products-menu ul li.livechat").css({"display":"block"});
			}else if(scroH<=navH){
					$(".products-menu").css({"position":"static","margin":"0 auto","background":"url(../images/bg.jpg) repeat"});
					$(".products-menu ul li a").css({"color":"#454545"});
					$(".products-menu ul li.livechat").css({"display":"none"});
			}
			console.log(scroH==navH);
	})
})




// 产品详情页面图片切换
function getStyle(obj,name)
{
	if(obj.currentStyle)
	{
		return obj.currentStyle[name]
	}
	else
	{
		return getComputedStyle(obj,false)[name]
	}
}

function getByClass(oParent,nClass)
{
	var eLe = oParent.getElementsByTagName('*');
	var aRrent  = [];
	for(var i=0; i<eLe.length; i++)
	{
		if(eLe[i].className == nClass)
		{
			aRrent.push(eLe[i]);
		}
	}
	return aRrent;
}

function startMove(obj,att,add)
{
	clearInterval(obj.timer)
	obj.timer = setInterval(function(){
	   var cutt = 0 ;
	   if(att=='opacity')
	   {
		   cutt = Math.round(parseFloat(getStyle(obj,att)));
	   }
	   else
	   {
		   cutt = Math.round(parseInt(getStyle(obj,att)));
	   }
	   var speed = (add-cutt)/4;
	   speed = speed>0?Math.ceil(speed):Math.floor(speed);
	   if(cutt==add)
	   {
		   clearInterval(obj.timer)
	   }
	   else
	   {
		   if(att=='opacity')
		   {
			   obj.style.opacity = (cutt+speed)/100;
			   obj.style.filter = 'alpha(opacity:'+(cutt+speed)+')';
		   }
		   else
		   {
			   obj.style[att] = cutt+speed+'px';
		   }
	   }
	   
	},30)
}

  window.onload = function()
  {
	  var oDiv = document.getElementById('playBox');
	  var oPre = getByClass(oDiv,'pre')[0];
	  var oNext = getByClass(oDiv,'next')[0];
	  var oUlBig = getByClass(oDiv,'oUlplay')[0];
	  var aBigLi = oUlBig.getElementsByTagName('li');
	  var oDivSmall = getByClass(oDiv,'smalltitle')[0]
	  var aLiSmall = oDivSmall.getElementsByTagName('li');
	  
	  function tab()
	  {
	     for(var i=0; i<aLiSmall.length; i++)
	     {
		    aLiSmall[i].className = '';
	     }
	     aLiSmall[now].className = 'thistitle'
	     startMove(oUlBig,'left',-(now*aBigLi[0].offsetWidth))
	  }
	  var now = 0;
	  for(var i=0; i<aLiSmall.length; i++)
	  {
		  aLiSmall[i].index = i;
		  aLiSmall[i].onclick = function()
		  {
			  now = this.index;
			  tab();
		  }
	 }
	  oPre.onclick = function()
	  {
		  now--
		  if(now ==-1)
		  {
			  now = aBigLi.length;
		  }
		   tab();
	  }
	   oNext.onclick = function()
	  {
		   now++
		  if(now ==aBigLi.length)
		  {
			  now = 0;
		  }
		  tab();
	  }
	  var timer = setInterval(oNext.onclick,3000) //滚动间隔时间设置
	  oDiv.onmouseover = function()
	  {
		  clearInterval(timer)
	  }
	   oDiv.onmouseout = function()
	  {
		  timer = setInterval(oNext.onclick,3000) //滚动间隔时间设置
	  }
  }

//留言验证
function check(){
	if(document.meg.area.value=="" || document.meg.area.value=="Please fill out your location" ){
		alert("Please fill out your location!");
		document.meg.area.focus();
		return false;
	}
	if(document.meg.Name.value==""){
		alert("Please fill out your name!");
		document.meg.Name.focus();
		return false;
	}
	if(document.meg.tell.value==""){
		alert("Please fill out your contact details!");
		document.meg.tell.focus();
		return false;
	}
	
	if(fucCheckTEL(document.meg.tell.value)==0){
		alert("Please fill out your right contact details!");
		document.meg.tell.focus();
		return false;		
	}
	if(document.meg.email.value==""){
		alert("Please fill out your email address！");
		document.meg.email.focus();
		return false;
	}	
	if(!isEmail(document.meg.email.value)){
		alert("Please fill out your right email address!");
		document.meg.email.focus();
		return false;		
	}		
   return true;
}
function fucCheckTEL(TEL)     
{     
	var i,j,strTemp;     
	strTemp="0123456789-()# ";     
	for (i=0;i<TEL.length;i++)     
	{     
		j=strTemp.indexOf(TEL.charAt(i));     
		if (j==-1)     
		{     
		//说明有字符不合法     
		return 0;     
		}     
	}     
	//说明合法     
	return 1;     
}  
function isEmail(strEmail) {
if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
	return true;
else
	return false;
}

// 产品详情技术参数表单
function senfe(o,a,b,c,d){
var t=document.getElementById(o).getElementsByTagName("tr");
for(var i=0;i<t.length;i++){
t[i].style.backgroundColor=(t[i].sectionRowIndex%2==0)?a:b;
t[i].onmouseover=function(){
if(this.x!="1"){
	this.style.backgroundColor=c;
	this.style.color="#fff";}
}
t[i].onmouseout=function(){
if(this.x!="1")
{this.style.backgroundColor=(this.sectionRowIndex%2==0)?a:b;
this.style.color="#444";}
}
}
}
