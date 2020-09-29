// JavaScript Document

document.writeln("<style type=\"text/css\">.message table{ border-collapse: collapse; font-size:12px;font-family: Arial, Helvetica, sans-serif;font-weight: bold;}");
document.writeln(".message{ padding:10px 0;  line-height: 20px; }");
document.writeln(".message p{ font-size:13px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;}");
document.writeln(".message table td{ padding:6px 4px; font-weight: bold; margin-right: 8px; text-align: left; }");
document.writeln(".message table td input[type=\"text\"]{border: 1px solid #7b9ebd; color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; height: 20px; width: 100%;}");
document.writeln(".message table td select{ border: 1px solid #7b9ebd; color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; height: 20px; line-height: 20px; width: 100%;}");
document.writeln(".message table td textarea{padding:2px 4px; border: 1px solid #7b9ebd; color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; height: 140px; line-height: 20px; width: 100%;font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;}.message table td label.inline{display: inline-block;width:80px;}</style>");

document.writeln("<div class=\'message\'>");
document.writeln("<p>Please leave your message here! We will send detail technical info and quotation to you!<span class=\'red\'>(Your data will only be used to respond to you!)</span></p>");
document.writeln("<form class=\'form-horizontal\' method=\'post\' name=\'form\' action=\'//inquiry.tinycms.xyz/updata.php\' onsubmit=\'return(CheckfootInput())\'>");
document.writeln("<table>");
document.writeln("<tbody>");
document.writeln("<tr>");
document.writeln("<td width=\'80\'>Products:<span class=\'red\'>*</span></td>");
document.writeln("<td><select name=\'products\' class=\'input-xlarge\'>");
document.writeln("<option selected=\'selected\' value=\'\' style=\'color:#ff0000; font-weight:bold;\'>Please Select!</option>");
document.writeln("<option>Jaw Crusher</option>");
document.writeln("<option>Cone Crusher</option>");
document.writeln("<option>Impact Crusher</option>");
document.writeln("<option>Mobile Crusher</option>");
document.writeln("<option>Vertical Mill</option>");
document.writeln("<option>Ball Mill</option>");
document.writeln("<option>Raymond Mill</option>");
document.writeln("<option>Hammer Mill</option>");
document.writeln("<option>Ultrafine Mill</option>");
document.writeln("<option>Vibrating Feeder</option>");
document.writeln("<option>Vibrating Screen</option>");
document.writeln("<option>Belt Conveyor</option>");
document.writeln("<option>Sand Washing Machine</option>");
document.writeln("<option>Sand making machine</option>");
document.writeln("<option style=\'color:#ff0000; font-weight:bold;\'>Not Sure !</option>");
document.writeln("</select></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td valign=\'top\'>Materials:<span class=\'red\'>*</span></td>");
document.writeln("<td><label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Basalt\'>Basalt</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Barite\'>Barite</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Bentonite\'>Bentonite</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Calcite\'>Calcite</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Coal\'>Coal</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Copper\'>Copper</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Dolomite\'>Dolomite</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Feldspar\'>Feldspar</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Gypsum\'>Gypsum</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Gravel\'>Gravel</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Granite\'>Granite</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Quartz\'>Quartz</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Pebble\'>Pebble</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Slag\'>Slag</label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input name=\'materials[]\' type=\'checkbox\' value=\'Limestone\'>Limestone</label>");
document.writeln("<br>");
document.writeln("<label class=\' inline\'> Other:</label>");
document.writeln("<input name=\'title\' type=\'text\' value=\'\' size=\'10\' class=\'title\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td>Capacity:<span class=\'red\'>*</span></td>");
document.writeln("<td><!-- Multiple Radios -->");
document.writeln("<label class=\' inline\'>");
document.writeln("<input type=\'radio\' value=\' > 100 TPH \' name=\'capacity[]\'>&gt; 100 TPH </label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input type=\'radio\' value=\' > 50 TPH \' name=\'capacity[]\'>&gt; 50 TPH </label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input type=\'radio\' value=\' > 30 TPH \' name=\'capacity[]\'>&gt; 30 TPH </label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input type=\'radio\' value=\' > 10 TPH \' name=\'capacity[]\'>&gt; 10 TPH </label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input type=\'radio\' value=\' > 1 TPH \' name=\'capacity[]\'>&gt; 1 TPH </label>");
document.writeln("<label class=\' inline\'>");
document.writeln("<input type=\'radio\' value=\' < 1 TPH \' name=\'capacity[]\'>&lt; 1 TPH </label></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td>Name:<span class=\'red\'>*</span></td>");
document.writeln("<td><input name=\'name\' type=\'text\' value=\'Such as: John\' style=\'color: rgb(153, 153, 153);\' onblur=\"if(value==\'\'){value=\'Such as: John\';this.style.color=\'#999\';};\" onfocus=\"if(value==\'Such as: John\'){value=\'\';this.style.color=\'#000\';};\" size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td>Email:<span class=\'red\'>*</span></td>");
document.writeln("<td><input name=\'email\' type=\'text\' value=\'Such as: chat@xxxx.net\' style=\'color: rgb(153, 153, 153);\' maxlength=\'50\' onblur=\"if(value==\'\'){value=\'Such as: chat@xxxx.net\';this.style.color=\'#999\';};\" onfocus=\"if(value==\'Such as: chat@xxxx.net\'){value=\'\';this.style.color=\'#000\';};\" size=\'25\'></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td>Phone:</td>");
document.writeln("<td><input name=\'phone\' type=\'text\' value=\'Such as: 0086-21-58386189\' style=\'color: rgb(153, 153, 153);\' onblur=\"if(value==\'\'){value=\'Such as: 0086-21-58386189\';this.style.color=\'#999\';};\" onfocus=\"if(value==\'Such as: 0086-21-58386189\'){value=\'\';this.style.color=\'#000\';};\" size=\'25\'></td>");
document.writeln("</tr>");

document.writeln("<tr>");
document.writeln("<td>Company:</td>");
document.writeln("<td><input name=\'company\' type=\'text\' style=\'color: rgb(153, 153, 153);\'></td>");
document.writeln("</tr>");

document.writeln("<tr>");
document.writeln("<td valign=\'top\'>Message:</td>");
document.writeln("<td><textarea name=\'content\' cols=\'45\' rows=\'6\' onblur=\"if(value==\'\'){value=\'Other requirements: output size like 0-10,10-15, 15-20 mm for crushing or 75 microns ( 200 meshes) for mill machine and other requirements.\';this.style.color=\'#999\';};\" onfocus=\"if(value==\'Other requirements: output size like 0-10,10-15, 15-20 mm for crushing or 75 microns ( 200 meshes) for mill machine and other requirements.\'){value=\'\';this.style.color=\'#000\';};\">Other requirements: output size like 0-10,10-15, 15-20 mm for crushing or 75 microns ( 200 meshes) for mill machine and other requirements.</textarea></td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td></td>");
document.writeln("<td><input type=\'submit\' value=\'Submit\'></td>");
document.writeln("</tr>");
document.writeln("</tbody>");
document.writeln("</table>");
document.writeln("</form>");
document.writeln("</div>");
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
function CheckfootInput() {
    if (document.form.products.value == "") {
        alert("Please Select A Product !");
        document.form.products.focus();
        return false;
    }
    if (document.form.name.value == '' || document.form.name.value == 'Such as: John') {
        alert("Please fill out fields Name !");
        document.form.name.focus();
        return false;
    }
    if (document.form.email.value == '' || document.form.email.value == 'Such as: chat@xxxx.net' || !is_email(document.form.email.value)) {
        alert("Please fill out fields Email !");
        document.form.email.focus();
        return false;
    }
    if(document.form.phone.value=='Such as: 0086-21-58386189'){
        document.form.phone.value=''
    }
    // if (document.form.phone.value == '' || document.form.phone.value == 'Such as: 0086-21-58386189') {
    //     alert("Please fill out fields Phone !");
    //     document.form.phone.focus();
    //     return false;
    // }
    if (document.form.content.value == '' || document.form.content.value == 'Other requirements: output size like 0-10,10-15, 15-20 mm for crushing or 75 microns ( 200 meshes) for mill machine and other requirements.') {
        document.form.content.value = document.form.email.value + ' ' + document.form.name.value;
    }
    return true;
}
