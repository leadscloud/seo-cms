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
document.writeln("<td><label class=\'control-label\'><font><font><b>*</b>Produkte:</font></font></label></td>");
document.writeln("<td><select name=\'products\' class=\'input-xlarge\'>");
document.writeln("<option selected=\'selected\' value=\'\' style=\'color:#ff0000; font-weight:bold;\'><font><font>Bitte auswählen!</font></font></option>");
document.writeln("<option value=\'Mobile crushing plant\'><font><font>Mobilbrecher</font></font></option>");
document.writeln("<option value=\'LM Vertical Grinding Mill\'><font><font>vertikale Mühle</font></font></option>");
document.writeln("<option value=\'Jaw Crusher\'><font><font>Kieferbrecher</font></font></option>");
document.writeln("<option value=\'Cone Crusher\'><font><font>Kegelbrecher</font></font></option>");
document.writeln("<option value=\'MTW European Grinding Machine\'><font><font>MTW European Schleifmaschine</font></font></option>");
document.writeln("<option value=\'Ultrafine Mill\'><font><font>Ultrafeine Mühle</font></font></option>");
document.writeln("<option value=\'Impact Crusher\'><font><font>Prallbrecher</font></font></option>");
document.writeln("<option value=\'VSI Crusher\'><font><font>VSI Crusher</font></font></option>");
document.writeln("<option value=\'Hydraulic Cylinder Cone Crusher\'><font><font>Hydraulik-Zylinder Kegelbrecher</font></font></option>");
document.writeln("<option value=\'Sand Washing Machine\'><font><font>Sand-Waschmaschine</font></font></option>");
document.writeln("<option value=\'Vibrating Screen\'><font><font>Vibrierender Bildschirm</font></font></option>");
document.writeln("<option value=\'Vibrating Feeder\'><font><font>Vibrationsaufgeber</font></font></option>");
document.writeln("<option value=\'Belt Conveyor\'><font><font>Gurtförderer</font></font></option>");
document.writeln("<option value=\'Stone processing production line\'><font><font>Steinbearbeitung Produktionslinie</font></font></option>");
document.writeln("<option value=\'Industrial milling production line\'><font><font>Industrielle Fräsen Produktionslinie</font></font></option>");
document.writeln("<option value=\'Beneficiation Production Line\'><font><font>Beneficiation Production Line</font></font></option>");
document.writeln("<option value=\'Not Sure\' style=\'color:#ff0000; font-weight:bold;\'><font><font>Nicht sicher !</font></font></option>");
document.writeln("</select></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\'top\'><label class=\'control-label\'><font><font>Materialien:</font></font></label></td>");
document.writeln("<td><!-- Multiple Checkboxes -->");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Dolomite\'><font><font>");
document.writeln("Dolomit</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Calcite\'><font><font>");
document.writeln("Calcit</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Quartz\'><font><font>");
document.writeln("Quarz</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Basalt\'><font><font>");
document.writeln("Basalt</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Barite\'><font><font>");
document.writeln("Baryt</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Feldspar\'><font><font>");
document.writeln("Feldspat</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Gravel\'><font><font>");
document.writeln("Kies</font></font></label>");
document.writeln("<br>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Bentonite\'><font><font>");
document.writeln("Bentonite</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Gypsum\'><font><font>");
document.writeln("Gips</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]2\' type=\'checkbox\' value=\'Granite\'><font><font>");
document.writeln("Granit</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Coal\'><font><font>");
document.writeln("Kohle</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Slag\'><font><font>");
document.writeln("Schlag</font></font></label>");
document.writeln("<label class=\'checkbox inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Pebble\'><font><font>");
document.writeln("Pebble </font></font></label>");
document.writeln("<br>");
document.writeln("<label class=\'checkbox inline\'><font><font>Sonstiges:");
document.writeln("</font></font><input name=\'title\' type=\'text\' value=\'Als: Marmor\' style=\'color: rgb(153, 153, 153);\' onblur=\'if(value==\'\'){value=\'Als: Marmor\';this.style.color=\'#999\';};\' onfocus=\'if(value==\'Als: Marmor\'){value=\'\';this.style.color=\'#000\';};\' size=\'15\'>");
document.writeln("</label></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\'top\'><label class=\'control-label\'><font><font>Kapazität:</font></font></label></td>");
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
document.writeln("<label class=\'control-label\' for=\'address\'><font><font>Verwenden Ort:</font></font></label></td>");
document.writeln("<td><input name=\'address\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'Als: Südafrika\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'Als: Südafrika\';this.style.color=\'#999\';};\' value=\'Als: Südafrika\' size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'name\'><font><font><b>*</b>Der Name: </font></font></label></td>");
document.writeln("<td><input name=\'name\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'Als: Mario\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'Als: Mario\';this.style.color=\'#999\';};\' value=\'Als: Mario\' size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'input01\'><font><font><b>*</b>E - </font><font>Mail: </font></font></label></td>");
document.writeln("<td><input name=\'email\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'Als: chat@xxxx.net\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'Als: chat@xxxx.net\';this.style.color=\'#999\';};\' value=\'Als: chat@xxxx.net\' size=\'25\' maxlength=\'50\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'phone\'><font><font>Telefon:</font></font></label></td>");
document.writeln("<td><input name=\'phone\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'Als: 0086-21-51860251\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'Als: 0086-21-51860251\';this.style.color=\'#999\';};\' value=\'Als: 0086-21-51860251\' size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Text input-->");
document.writeln("<label class=\'control-label\' for=\'company\'><font><font>Name der Firma:</font></font></label></td>");
document.writeln("<td><input name=\'company\' type=\'text\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'Als: TQMC Company\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'Als: TQMC Company\';this.style.color=\'#999\';};\' value=\'Als: TQMC Company\' size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\'top\'><!-- Textarea -->");
document.writeln("<label class=\'control-label\'><font><font>Nachricht: </font></font><span class=\'red\'><font><font>*</font></font></span></label></td>");
document.writeln("<td><textarea name=\'content\' cols=\'45\' rows=\'6\' class=\'input-xlarge\' style=\'color: rgb(153, 153, 153);\' onfocus=\'if(value==\'Als: Ausgangsgröße wie 0-10,10-15, 15-20 mm für Zerkleinerung oder 75 Mikrometer (200 Maschen) für Mühlenmaschine und andere Anforderungen.\'){value=\'\';this.style.color=\'#000\';};\' onblur=\'if(value==\'\'){value=\'Als: Ausgangsgröße wie 0-10,10-15, 15-20 mm für Zerkleinerung oder 75 Mikrometer (200 Maschen) für Mühlenmaschine und andere Anforderungen.\';this.style.color=\'#999\';};\'>Als: Ausgangsgröße wie 0-10,10-15, 15-20 mm für Zerkleinerung oder 75 Mikrometer (200 Maschen) für Mühlenmaschine und andere Anforderungen.</textarea></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td><!-- Button --></td>");
document.writeln("<td><font><font><input type=\'submit\' value=\'einreichen\' class=\'btn btn-primary\'></font></font></td>");
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
if(document.form.name.value==''||document.form.name.value=='Als: Mario'){
alert("Bitte schreiben Sie Ihren Namen ^_^");
document.form.name.focus();
return false;
}

if(document.form.email.value==''||document.form.email.value=='Als: chat@xxxx.net'||!is_email(document.form.email.value)){
alert("Bitte schreiben Sie Ihre E-Mail ^_^");
document.form.email.focus();
return false;
}

if(document.form.content.value==''||document.form.content.value=='Als: Ausgangsgröße wie 0-10,10-15, 15-20 mm für Zerkleinerung oder 75 Mikrometer (200 Maschen) für Mühlenmaschine und andere Anforderungen.'){
alert("Please Write Your Message ^_^");
document.form.content.focus();
return false;
}

if(document.form.capacity.value=='Als: 20 TPH'){
document.form.capacity.value='';
}

if(document.form.title.value=='Als: Marmor'){
document.form.title.value='';
}

if(document.form.phone.value=='Als: 0086-21-51860251'){
document.form.phone.value = '';
}

if(document.form.company.value=='Als: TQMC Company'){
document.form.company.value = '';
}

return true;
}