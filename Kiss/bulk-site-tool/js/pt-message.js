document.writeln("<style type=\"text/css\">.message table{border-collapse: collapse;}");
document.writeln(".input-xlarge{ width:100% !important;}");
document.writeln(".feedback,.about_contact{ font-family: Arial,Helvetica,sans-serif; font-style: italic;}");
document.writeln(".feedback h3{font-size: 20px;font-weight: normal;line-height: 1.5em;}");
document.writeln(".form-horizontal .control-label{float: left;padding-top: 5px;text-align: right;}");
document.writeln("input, button, select, textarea {font-family: \"Helvetica Neue\",Helvetica,Arial,sans-serif;}");
document.writeln("button, input, select, textarea {font-size: 100%;}");
document.writeln("label, select, button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"], input[type=\"radio\"], input[type=\"checkbox\"] {cursor: pointer;}");
document.writeln("label.control-label { margin-right: 10px;}");
document.writeln("input.btn {background: none repeat scroll 0 0 #e66a48;border: medium none;color: #fff;display: inline;height:38px;line-height: 38px;margin: 0;padding: 0 25px;width: 100%;}");
document.writeln("input.btn:hover {background: none repeat scroll 0 0 #444;transition: background 0.5s ease 0s;}");
document.writeln(".radio.inline, .checkbox.inline {display: inline-block;margin-bottom: 0;padding-top: 5px;vertical-align: middle;}");
document.writeln(".radio.inline + .radio.inline, .checkbox.inline + .checkbox.inline {margin-left: 25px;}");
document.writeln(".feedback {padding-bottom: 20px;}");
document.writeln(".feedback label {color: #888;font-size: 13px;font-weight: bold;}");
document.writeln(".feedback input, .feedback textarea {border: 1px solid #e5e5e5;box-shadow: none;color: #888;height: 40px;line-height: 30px;margin: 6px 0;padding: 0 5px;width: 95%;}");
document.writeln(".about_contact {background: none repeat scroll 0 0 #f8f8f8;margin: 40px 0 30px;padding: 25px 50px;}");
document.writeln(".about_contact p {float: left;font-size: 16px;padding: 6px 5px 0 10px;");
document.writeln("a.contact_button {background: none repeat scroll 0 0 #e66a48;color: #fff;float: right;padding: 10px 25px;}");
document.writeln(".contact_button:hover {background: none repeat scroll 0 0 #444;text-decoration: none;transition:background 0.5s ease 0s;}");
document.writeln("}.red{color:#ED1316;}</style>");
document.writeln("<form class=\'form-horizontal\' method=\'post\' name=\'form\' action=\'//inquiry.tinycms.xyz/updata.php\' onsubmit=\'return(CheckfootInput())\'>");
document.writeln("<table border=\'1\' cellspacing=\'1\'>");
document.writeln("<tbody><tr>");
document.writeln("<td><label class=\'control-label\'><b><font><font>*</font></font></b><font><font> Os produtos:</font></font></label></td>");
document.writeln("<td><select name=\'products\' class=\'input-xlarge\'>");
document.writeln("<option selected=\'selected\' value=\'\' style=\'color:#ff0000; font-weight:bold;\'><font><font>Por favor selecione!</font></font></option>");
document.writeln("<option value=\'Mobile crushing plant\'><font><font>Britador móvel</font></font></option>");
document.writeln("<option value=\'LM Vertical Grinding Mill\'><font><font>Moinho Vertical</font></font></option>");
document.writeln("<option value=\'Jaw Crusher\'><font><font>Britador de mandíbula</font></font></option>");
document.writeln("<option value=\'Cone Crusher\'><font><font>cone Crusher</font></font></option>");
document.writeln("<option value=\'MTW European Grinding Machine\'><font><font>MTW Máquina Europeia Grinding</font></font></option>");
document.writeln("<option value=\'Ultrafine Mill\'><font><font>ultrafinas moinho</font></font></option>");
document.writeln("<option value=\'Impact Crusher\'><font><font>Crusher Impact</font></font></option>");
document.writeln("<option value=\'VSI Crusher\'><font><font>VSI Crusher</font></font></option>");
document.writeln("<option value=\'Hydraulic Cylinder Cone Crusher\'><font><font>Cilindro hidráulico Cone Crusher</font></font></option>");
document.writeln("<option value=\'Sand Washing Machine\'><font><font>Máquina de lavar areia</font></font></option>");
document.writeln("<option value=\'Vibrating Screen\'><font><font>Tela vibratória</font></font></option>");
document.writeln("<option value=\'Vibrating Feeder\'><font><font>Alimentador vibratório</font></font></option>");
document.writeln("<option value=\'Belt Conveyor\'><font><font>Transportador de correia</font></font></option>");
document.writeln("<option value=\'Stone processing production line\'><font><font>A linha de produção de processamento de pedra</font></font></option>");
document.writeln("<option value=\'Industrial milling production line\'><font><font>linha de produção de moagem industrial</font></font></option>");
document.writeln("<option value=\'Beneficiation Production Line\'><font><font>Linha de Produção de beneficiamento</font></font></option>");
document.writeln("<option value=\'Not Sure\' style=\'color:#ff0000; font-weight:bold;\'><font><font>Não tenho certeza !</font></font></option>");
document.writeln("</select></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\'top\'><label class=\'control-label\'><font><font>materiais:</font></font></label></td>");
document.writeln("<td><!-- Multiple Checkboxes -->");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Dolomite\'><font><font>");
document.writeln("Dolomite</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Calcite\'><font><font>");
document.writeln("calcita</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Quartz\'><font><font>");
document.writeln("Quartzo</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Basalt\'><font><font>");
document.writeln("Basalto</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Barite\'><font><font>");
document.writeln("barita</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Feldspar\'><font><font>");
document.writeln("Feldspato</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Gravel\'><font><font>");
document.writeln("Cascalho</font></font></label>");
document.writeln("<br>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Bentonite\'><font><font>");
document.writeln("bentonita</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Gypsum\'><font><font>");
document.writeln("gesso</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]2\' type=\'checkbox\' value=\'Granite\'><font><font>");
document.writeln("Granito</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Coal\'><font><font>");
document.writeln("Carvão</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Slag\'><font><font>");
document.writeln("golpe</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Pebble\'><font><font>");
document.writeln("Pebble </font></font></label>");
document.writeln("<br>");
document.writeln("<label class=\'checkbox inline\'><font><font>Outros:");
document.writeln("</font></font><input name=\'title\' type=\'text\' value=\'As: Marble\' style=\'color: rgb(153, 153, 153);\' onblur=\'if(value==\'\'){value=\'As: Marble\';this.style.color=\'#999\';};\' onfocus=\'if(value==\'As: Marble\'){value=\'\';this.style.color=\'#000\';};\' size=\'15\'>");
document.writeln("</label></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\'top\'><label class=\'control-label\'><font><font>Capacidade:</font></font></label></td>");
document.writeln("<td><!-- Multiple Radios -->");
document.writeln("<label class=\'radio inline\'>");
document.writeln("<input type=\'radio\' value=\' > 100 TPH \' name=\'capacity[]\'><font><font>");
document.writeln("&gt; 100 TPH </font></font></label>");
document.writeln("<label class=\'radio inline\'>");
document.writeln("<input type=\'radio\' value=\' > 50 TPH \' name=\'capacity[]\'><font><font>");
document.writeln("&gt; 50 TPH </font></font></label>");
document.writeln("<label class=\'radio inline\'>");
document.writeln("<input type=\'radio\' value=\' > 30 TPH \' name=\'capacity[]\'><font><font>");
document.writeln("&gt; 30 TPH </font></font></label>");
document.writeln("<br>");
document.writeln("<label class=\'radio inline\'>");
document.writeln("<input type=\'radio\' value=\' > 10 TPH \' name=\'capacity[]\'><font><font>");
document.writeln("&gt; 10 TPH </font></font></label>");
document.writeln("<label class=\'radio inline\'>");
document.writeln("<input type=\'radio\' value=\' > 1 TPH \' name=\'capacity[]\'><font><font>");
document.writeln("&gt; 1 TPH </font></font></label>");
document.writeln("<label class=\'radio inline\'>");
document.writeln("<input type=\'radio\' value=\' < 1 TPH \' name=\'capacity[]\'><font><font>");
document.writeln("&lt;1 TPH </font></font></label></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'address\'><font><font>Use Lugar:</font></font></label></td>");
document.writeln("<td><input name=\'address\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'As: South Africa\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'As: South Africa\';this.style.color=\'#999\';};\' value=\'As: South Africa\' size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'name\'><b><font><font>*</font></font></b><font><font> O Nome: </font></font></label></td>");
document.writeln("<td><input name=\'name\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'As: Mario\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'As: Mario\';this.style.color=\'#999\';};\' value=\'As: Mario\' size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'input01\'><b><font><font>*</font></font></b><font><font> Email: </font></font></label></td>");
document.writeln("<td><input name=\'email\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'As: chat@xxxx.net\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'As: chat@xxxx.net\';this.style.color=\'#999\';};\' value=\'As: chat@xxxx.net\' size=\'25\' maxlength=\'50\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'phone\'><font><font>Telefone:</font></font></label></td>");
document.writeln("<td><input name=\'phone\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'As: 0086-21-51860251\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'As: 0086-21-51860251\';this.style.color=\'#999\';};\' value=\'As: 0086-21-51860251\' size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'company\'><font><font>Nome da empresa:</font></font></label></td>");
document.writeln("<td><input name=\'company\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'As: TQMC Company\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'As: TQMC Company\';this.style.color=\'#999\';};\' value=\'As: TQMC Company\' size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\'top\'><!-- Textarea -->");
document.writeln("<label class=\'control-label\'><font><font>Mensagem: </font></font><span class=\'red\'><font><font>*</font></font></span></label></td>");
document.writeln("<td><textarea name=\'content\' cols=\'45\' rows=\'6\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'As: output size like 0-10,10-15, 15-20 mm for crushing or 75 microns ( 200 meshes) for mill machine and other requirements.\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'As: output size like 0-10,10-15, 15-20 mm for crushing or 75 microns ( 200 meshes) for mill machine and other requirements.\';this.style.color=\'#999\';};\'>As: output size like 0-10,10-15, 15-20 mm for crushing or 75 microns ( 200 meshes) for mill machine and other requirements.</textarea></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Button --></td>");
document.writeln("<td><font><font><input type=\'submit\' value=\'Enviar\' class=\'btn btn-primary\'></font></font></td>");
document.writeln("</tr>");
document.writeln("</tbody></table>");
document.writeln("</form>");
function is_number(str) {
exp = /[^0-9 .+()-]/g;
if (str.search(exp) != -1) {
return false;
}
return true;
}
function is_email(str) {
if ((str.indexOf("@") == -1) || (str.indexOf(".") == -1)) {
return false;
}
return true;
}
function CheckfootInput(){
if (document.form.products.value == "") {
        alert("Please Select A Product !");
        document.form.products.focus();
        return false;
    }	
	

if(document.form.name.value==''||document.form.name.value=='As: Mario'){
alert("Please Write Your Name ^_^");
document.form.name.focus();
return false;
}






if(document.form.email.value==''||document.form.email.value=='As: chat@xxxx.net'||!is_email(document.form.email.value)){
alert("Please Write Your Email ^_^");
document.form.email.focus();
return false;
}

if(document.form.content.value==''||document.form.content.value=='As: output size like 0-10,10-15, 15-20 mm for crushing or 75 microns ( 200 meshes) for mill machine and other requirements.'){
alert("Please Write Your Message ^_^");
document.form.content.focus();
return false;
}

if(document.form.capacity.value=='As: 20 TPH'){
document.form.capacity.value='';
}

if(document.form.title.value=='As: Marble'){
document.form.title.value='';
}

if(document.form.phone.value=='As: 0086-21-51860251'){
document.form.phone.value = '';
}

if(document.form.company.value=='As: TQMC Company'){
document.form.company.value = '';
}

return true;
}