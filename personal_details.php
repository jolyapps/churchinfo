
<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
    header('location:index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>DCLM Church Locations | Personal Details</title>
<link rel='SHORTCUT ICON' href='http://dclmstream.s3.amazonaws.com/img/favicon.ico' type='image/x-icon'/>

<style type="text/css">
div.scroll {
height: 500px;
width: 650px;
overflow: auto;
border: 1px solid blue;
background-color: #ffff;
padding: 8px;
}
.auto-style1 {
	font-size: x-small;
}
.auto-style2 {
	font-size: small;
}
</style>
</head>

<body>

<table width="728" style="height: 514px">

<tr>
<td align="center" bgcolor="#FFFFFF">
<div class = "scroll">
<table width="580" style="height: 660px">
                          <form name="reg" action="prof.php" method="post">
<tr>


<CENTER><td width="130" COLSPAN = 2><strong><font face="Georgia" size="2" color="red"><center>PERSONAL DETAILS:</center></font></strong></td></CENTER><TR>

<td width="130">Title</td>
<td width="299">
<input type="text" name="tit" size="41" style="border: 1px dotted #333333" value = '<?php echo htmlentities($disp_tit) ?>' ></td>
<tr>
<td width="130">Surname</td>
<td width="299">
<input type="text" name="sname" size="41" style="border: 1px dotted #333333" value = '<?php echo htmlentities($disp_name) ?>'> </td>


<tr>
<td width="130">Other Name</td>
<td width="299">
<input type="text" name="othname" size="41" style="border: 1px dotted #333333" value = '<?php echo htmlentities($disp_othname) ?>' ></td>


<tr>






<td width="130"><font face="Georgia" size="2" color="#666666"><strong>Sex:</strong></font></td>
<td width="299">

<select name="sex" style="border: 1px dotted #333333" size="1">


  <option name="Male" selected>Male</option>
  <option name="Female">Female</option>
</select></td>
<tr>
<td width="130"><strong>Phone number<span class="auto-style1">&nbsp; (</span><span class="auto-style2">CUG)</span></strong></td>
                            <td width="299">
<input type="text" name="cug" size="41" style="border: 1px dotted #333333" value="Church Line"  onfocus ="if (this.value=='Church Line') this.value='';"></td>
                            <td width="137"  style="cursor:hand">
							&nbsp;</td>
							
						  <tr>
						  <td width="130">Others:</td>
                            <td width="299">
<input type="text" name="myphone" size="41" style="border: 1px dotted #333333" value="Other Phone Numbers" onfocus ="if (this.value=='Other Phone Numbers') this.value='';" ></td>
                            <td width="137"  style="cursor:hand">
							&nbsp;</td>
							
						  <tr>

<td width="130"><strong>Email:</strong></td>
<td width="299">
<input type="text" name="email" size="41" style="border: 1px dotted #333333" value = '<?php echo htmlentities($disp_email) ?>'></td><tr>

<td width="130"><strong>Skype Id:</strong></td>
<td width="299">
<input type="text" name="skypeid" size="41" style="border: 1px dotted #333333" value = '<?php echo htmlentities($disp_skype ) ?>'></td><tr>



<td width="130"><strong><font color="#666666" size="2" face="Georgia" value = '<?php echo htmlentities($disp_count) ?>'>Country:</font></strong></td>
<td width="299">
<input type="text" name="country" size="41" style="border: 1px dotted #333333"></td><tr>
<td width="130"><strong><font color="#666666" size="2" face="Georgia">State:</font></strong></td>
<td width="299">
<select name="state" style="border: 1px dotted #333333" size="1">
<option name="state" selected>State</option>
<option name="Abia">Abia State</option>
<option name="Adamawa">Adamawa State</option>
<option name="Akwa">Akwa Ibom State</option>
<option name="Anambra">Anambra State</option>
<option name="Bauchi">Bauchi State</option>
<option name="Bayelsa">Bayelsa State</option>
<option name="Benue">Benue State</option>
<option name="Borno">Borno State</option>
<option name="Cross">Cross River State</option>
<option name="Delta">Delta State</option>
<option name="Ebonyi">Ebonyi State</option>
<option name="Edo">Edo State</option>
<option name="Ekiti">Ekiti State</option>
<option name="Enugu">Enugu State</option>
<option name="Federal">Federal Capital Territory</option>
<option name="Gombe">Gombe State</option>
<option name="Imo">Imo State</option>
<option name="Jigawa">Jigawa State</option>
<option name="Kaduna">Kaduna State</option>
<option name="Kano">Kano State</option>
<option name="Katsina">Katsina State</option>
<option name="Kebbi State">Kebbi</option>
<option name="Kogi">Kogi State</option>
<option name="Kwara">Kwara State</option>
<option name="Lagos">Lagos State</option>
<option name="Nasarawa">Nasarawa State</option>
<option name="Niger">Niger State</option>
<option name="Ogun">Ogun State</option>
<option name="Ondo">Ondo State</option>
<option name="Osun State">Osun State</option>
<option name="Oyo">Oyo State</option>
<option name="Plateau">Plateau State</option>
<option name="Rivers State">Rivers State</option>
<option name="Sokoto">Sokoto State</option>
<option name="Taraba">Taraba State</option>
<option name="Yobe">Yobe State</option>
<option name="Zamfara State">Zamfara State</option>
</select> </td>

					  <tr>
<td width="130"><strong>Region </strong></td>
<td width="299">
<input type="text" name="region" size="41" style="border: 1px dotted #333333"></td>

<tr>




<td width="130">M<strong><font color="#666666" size="2" face="Georgia">arital Status </font></strong></td>
<td width="299">
<select name = "status" style="border: 1px dotted #333333" >
<option name = "single" selected = "">Single</option>
<option name = "Married" selected = "Married">Married</option>
<option name = "single" selected = "Widower">Widower</option>
<option name = "Married" selected = "Widow">Widow</option>

</select></td>

<tr>



<td width="130"><strong>Profession/Occupation</strong></td>
<td width="299"><select name ="prof">
  <option name = "prof1">Select</option>
  <option  name = "prof2">Accounting</option>
  <option  name = "prof4">Aviation</option>
  <option  name = "prof5">Ambassadorial</option>
  <option  name = "prof6">Architecturing</option>
  <option  name = "prof9">Publication</option>
  <option  name = "prof10">Banking</option>
  <option  name = "prof13">Catering</option>
  <option  name = "prof16">Construction</option>
  <option  name = "prof18">Transport/ Logistics</option>
  <option  name = "prof19">Engineering</option>
  <option  name = "prof22">Foreign Service</option>
  <option  name = "prof23">Immigration</option>
  <option  name = "prof24">ICT</option>
  <option  name = "prof25">Judicial</option>
  <option  name = "prof26">Estate Agent</option>
  <option  name = "prof28">Education</option>
  <option  name = "prof32">Military</option>
  <option  name = "prof33">Para Medical</option>
  <option  name = "prof35">Police</option>
  <option  name = "prof37">Secetary Typist /PA/PS</option>
  <option  name = "prof39">Telecommunication</option>
  
  
  
</select></td>

<tr>
<td width="130"><font color="#666666" size="2" face="Georgia"><strong>Specialization</strong></font></td>
<td width="299"><input type name="special"  size = "41" style="border: 1px dotted #333333"></td><tr>


<td width="130"><font color="#666666" size="2" face="Georgia"><strong>Place of Work </strong></font></td>
<td width="299"><input type name="pl_w"  size = "41" style="border: 1px dotted #333333"></td>
<tr>

<td width="130"><strong><font face="Georgia" size="2" color="#666666">Nature of Work</font></strong></td>
<td width="299">

<select name="nature_wk" style="border: 1px dotted #333333" size="1">


  <option name="pb" selected>Public</option>
  <option name="pr">Private</option>
</select></td>
<tr>


<td width="130"><font color="#666666" size="2" face="Georgia"><strong>Rank/Position </strong></font></td>
<td width="299"><input type name="level"  size = "41" style="border: 1px dotted #333333"></td>
<tr>


<td width="130"><strong><font face="Georgia" size="2" color="#666666">Availability</font></strong></td>
<td width="299">

<select name="avbility" style="border: 1px dotted #333333" size="1">


  <option name="alw" selected>Available</option>
  <option name="seld">Seldom</option>
</select></td>
<tr>







<td colspan="2">
<p align="center"><input type="submit" name = 'submit' value="Register"></td>


</tr></form></table> </div></td>
</tr>

</table>

</body>

</html>
