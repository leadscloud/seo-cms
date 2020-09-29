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
document.writeln("<form class=\"form-horizontal\" method=\"post\" name=\"form\" action=\"//inquiry.tinycms.xyz/updata.php\" onsubmit=\"return(CheckfootInput())\">");
document.writeln("<table border=\"1\" cellspacing=\"1\">");
document.writeln("<tr>");
document.writeln("<td><label class=\"control-label\"><b>*</b>Productos:</label></td>");
document.writeln("<td><select name=\"products\" class=\"input-xlarge\">");
document.writeln("<option selected=\"selected\" value=\"\" style=\"color:#ff0000; font-weight:bold;\">Seleccione!</option>");
document.writeln("<option value=\"Trituradora Móvil\">Trituradora Móvil</option>");
document.writeln("<option value=\"Molino vertical\">Molino vertical</option>");
document.writeln("<option value=\"Rompe mandíbulas\">Rompe mandíbulas</option>");
document.writeln("<option value=\"Trituradora de cono\">Trituradora de cono</option>");
document.writeln("<option value=\"MTW Rectificadora Europea\">MTW Rectificadora Europea</option>");
document.writeln("<option value=\"Molino ultrafino\">Molino ultrafino</option>");
document.writeln("<option value=\"Trituradora de Impacto\">Trituradora de Impacto</option>");
document.writeln("<option value=\"Trituradora VSI\">Trituradora VSIr</option>");
document.writeln("<option value=\"Conmutador hidráulico del cono del cilindro\">Conmutador hidráulico del cono del cilindro</option>");
document.writeln("<option value=\"Lavadora de Arena\">Lavadora de Arena</option>");
document.writeln("<option value=\"Pantalla vibrante\">Pantalla vibrante</option>");
document.writeln("<option value=\"Alimentador vibratorio\">Alimentador vibratorio</option>");
document.writeln("<option value=\"Cinta transportadora\">Cinta transportadora</option>");
document.writeln("<option value=\"Línea de producción de piedra\">Línea de producción de piedra</option>");
document.writeln("<option value=\"Línea de producción de fresado industrial\">Línea de producción de fresado industrial</option>");
document.writeln("<option value=\"Línea de Producción de Beneficios\">Línea de Producción de Beneficios</option>");
document.writeln("<option value=\"No es seguro !\" style=\"color:#ff0000; font-weight:bold;\">No es seguro !</option>");
document.writeln("</select></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\"top\"><label class=\"control-label\">Materiales:</label></td>");
document.writeln("<td><!-- Multiple Checkboxes -->");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Dolomita\">");
document.writeln("Dolomita</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Calcita\">");
document.writeln("Calcita</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Cuarzo\">");
document.writeln("Cuarzo</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Basalto\">");
document.writeln("Basalto</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Baritina\">");
document.writeln("Baritina</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Feldespato\">");
document.writeln("Feldespato</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Grava\">");
document.writeln("Grava</label>");
document.writeln("<br />");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Bentonita\">");
document.writeln("Bentonita</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Yeso\">");
document.writeln("Yeso</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]2\" type=\"checkbox\" value=\"Granito\" />");
document.writeln("Granito</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Carbón\">");
document.writeln("Carbón</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Batalla\">");
document.writeln("Batalla</label>");
document.writeln("<label class=\"checkbox inline\">");
document.writeln("<input name=\"materials[]\" type=\"checkbox\" value=\"Guijarro\">");
document.writeln("Guijarro</label>");
document.writeln("<br />");
document.writeln("<label class=\"checkbox inline\"> Otro:");
document.writeln("<input name=\"title\" type=\"text\" value=\"Como: Mármol\" style=\"color: rgb(153, 153, 153);\" onblur=\"if(value==\'\'){value=\'Como: Mármol\';this.style.color=\'#999\';};\" onfocus=\"if(value==\'Como: Mármol\'){value=\'\';this.style.color=\'#000\';};\" size=\"15\" />");
document.writeln("</label></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\"top\"><label class=\"control-label\">Capacidad:</label></td>");
document.writeln("<td><!-- Multiple Radios -->");
document.writeln("<label class=\"radio inline\">");
document.writeln("<input type=\"radio\" value=\" > 100 TPH \" name=\"capacity[]\">");
document.writeln("> 100 TPH </label>");
document.writeln("<label class=\"radio inline\">");
document.writeln("<input type=\"radio\" value=\" > 50 TPH \" name=\"capacity[]\">");
document.writeln("> 50 TPH </label>");
document.writeln("<label class=\"radio inline\">");
document.writeln("<input type=\"radio\" value=\" > 30 TPH \" name=\"capacity[]\">");
document.writeln("> 30 TPH </label>");
document.writeln("<br />");
document.writeln("<label class=\"radio inline\">");
document.writeln("<input type=\"radio\" value=\" > 10 TPH \" name=\"capacity[]\">");
document.writeln("> 10 TPH </label>");
document.writeln("<label class=\"radio inline\">");
document.writeln("<input type=\"radio\" value=\" > 1 TPH \" name=\"capacity[]\">");
document.writeln("> 1 TPH </label>");
document.writeln("<label class=\"radio inline\">");
document.writeln("<input type=\"radio\" value=\" < 1 TPH \" name=\"capacity[]\">");
document.writeln("< 1 TPH </label></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\"control-label\" for=\"address\">Usar lugar:</label></td>");
document.writeln("<td><input name=\"address\" type=\"text\" class=\"input-xlarge\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value==\'Como: Sudáfrica\'){value=\'\';this.style.color=\'#000\';};\" onblur=\"if(value==\'\'){value=\'Como: Sudáfrica\';this.style.color=\'#999\';};\" value=\"Como: Sudáfrica\" size=\"25\" /></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\"control-label\" for=\"name\"><b>*</b>Nombre:</label></td>");
document.writeln("<td><input name=\"name\" type=\"text\" class=\"input-xlarge\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value==\'Como: Mario\'){value=\'\';this.style.color=\'#000\';};\" onblur=\"if(value==\'\'){value=\'Como: Mario\';this.style.color=\'#999\';};\" value=\"Como: Mario\" size=\"25\" /></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\"control-label\" for=\"input01\"><b>*</b>Email:</label></td>");
document.writeln("<td><input name=\"email\" type=\"text\" class=\"input-xlarge\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value==\'Como: chat@xxxx.net\'){value=\'\';this.style.color=\'#000\';};\" onblur=\"if(value==\'\'){value=\'Como: chat@xxxx.net\';this.style.color=\'#999\';};\" value=\"Como: chat@xxxx.net\" size=\"25\" maxlength=\"50\" /></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\"control-label\" for=\"phone\">Teléfono:</label></td>");
document.writeln("<td><input name=\"phone\" type=\"text\" class=\"input-xlarge\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value==\'Como: 0086-21-51860251\'){value=\'\';this.style.color=\'#000\';};\" onblur=\"if(value==\'\'){value=\'Como: 0086-21-51860251\';this.style.color=\'#999\';};\" value=\"Como: 0086-21-51860251\" size=\"25\" /></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\"control-label\" for=\"company\">nombre de empresa:</label></td>");
document.writeln("<td><input name=\"company\" type=\"text\" class=\"input-xlarge\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value==\'Como: TQMC Company\'){value=\'\';this.style.color=\'#000\';};\" onblur=\"if(value==\'\'){value=\'Como: TQMC Company\';this.style.color=\'#999\';};\" value=\"Como: TQMC Company\" size=\"25\" /></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\"top\"><!-- Textarea -->");
document.writeln("<label class=\"control-label\">Mensaje:<span class=\"red\">*</span></label></td>");
document.writeln("<td><textarea name=\"content\" cols=\"45\" rows=\"6\" class=\"input-xlarge\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value==\'Como: tamaño de salida como 0-10,10-15, 15-20 mm para triturar o 75 micrones (200 mallas) para máquina de molino y otros requisitos.\'){value=\'\';this.style.color=\'#000\';};\" onblur=\"if(value==\'\'){value=\'Como: tamaño de salida como 0-10,10-15, 15-20 mm para triturar o 75 micrones (200 mallas) para máquina de molino y otros requisitos.\';this.style.color=\'#999\';};\">Como: tamaño de salida como 0-10,10-15, 15-20 mm para triturar o 75 micrones (200 mallas) para máquina de molino y otros requisitos.</textarea></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Button --></td>");
document.writeln("<td><input type=\"submit\" value=\"Enviar\" class=\"btn btn-primary\" /></td>");
document.writeln("</tr>");
document.writeln("</table>");
document.writeln("<form>");
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


if(document.form.name.value==''||document.form.name.value=='Como: Mario'){
alert("Please Write Your Name ^_^");
document.form.name.focus();
return false;
}

if(document.form.email.value==''||document.form.email.value=='Como: chat@xxxx.net'||!is_email(document.form.email.value)){
alert("Please Write Your Email ^_^");
document.form.email.focus();
return false;
}

if(document.form.content.value==''||document.form.content.value=='Como: tamaño de salida como 0-10,10-15, 15-20 mm para triturar o 75 micrones (200 mallas) para máquina de molino y otros requisitos.'){
alert("Please Write Your Message ^_^");
document.form.content.focus();
return false;
}

if(document.form.capacity.value=='Como: 20 TPH'){
document.form.capacity.value='';
}

if(document.form.title.value=='Como: Mármol'){
document.form.title.value='';
}

if(document.form.phone.value=='Como: 0086-21-51860251'){
document.form.phone.value = '';
}

if(document.form.company.value=='Como: TQMC Company'){
document.form.company.value = '';
}

return true;
}