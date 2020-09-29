

// JavaScript Document 

document.writeln("<script type=\"text/javascript\">");
document.writeln("window.setTimeout(function(){");
document.writeln("LR_showInviteDiv(\"Добро пожаловать на наш сайт\",\"Это наш интернет-сервис. Если у вас есть какие-либо вопросы, пожалуйста, примите этот диалог. ^_^&nbsp;<br/>Вы также можете использовать следующие способы:<br/>Email:<b> chat@xxxx.net</b>\");");
document.writeln("},3000);");
document.writeln("</script>");

document.writeln("<div id=\"swt\" style=\"width:8%;height:auto;float:right; z-index:999;position:fixed !important; top/**/:90px; position:absolute; top:expression(offsetParent.scrollTop+400);right:0px;\"> ");

document.writeln("<script language=\'javascript\' src=\'https://mnn.zoosnet.net/JS/LsJS.aspx?siteid=float=0&lng=en\'></script>");
document.writeln("<a href=\"javascript:void(0)\" onclick=openZoosUrl(\'chatwin\')  target=\"_self\"><img style=\"width:100%;height:auto;\" src=\"/images/livechat.jpg\" border=\"0\"><img style=\"width:100%;height:auto;\" src=\"/images/email.png\"></a>");
document.writeln('  <span class="closeBtn_swt absolute" style=\"top:-18px;right:-1px;width:30px;height:30px; position: absolute;cursor:pointer;background:url(/images/livechat-close.png) no-repeat;-webkit-background-size:100%;-moz-background-size:100%;background-size:100%\" id="closeBtn_swt" onclick="closeSwt()"></span>');

document.writeln("</div>");


// JavaScript Document
function browserRedirect() {  
	var sUserAgent = navigator.userAgent.toLowerCase();  
	var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";  
	var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";  
	var bIsMidp = sUserAgent.match(/midp/i) == "midp";  
	var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";  
	var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";  
	var bIsAndroid = sUserAgent.match(/android/i) == "android";  
	var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";  
	var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";  
	if ((bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) ){  
		closeSwt();
	} 
}  
browserRedirect();



function closeSwt(){

	document.getElementById('swt').style.display='none';
	
	
	}


$(function(){
    var swtcenter = $('#swt');
  setTimeout(function(){showcenter()},10000);
});
function showcenter(){
  $("#swt").fadeIn();
	
}
function hidecenter(){
  $("#swt").fadeOut();
 
  setTimeout("swt()",60000);
}

