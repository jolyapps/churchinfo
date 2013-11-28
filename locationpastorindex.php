
<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
    header('location:index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>DCLM Church Locations</title>
<link rel='SHORTCUT ICON' href='http://dclmstream.s3.amazonaws.com/img/favicon.ico' type='image/x-icon'/>




<style type="text/css">

#pa {
table-layout:auto
	
	
}
.home {
	margin-left: 132px;
	background-color: #1A446C ;
	 position: absolute;
	 font:caption; border-color:maroon 
	 text-transform: uppercase;
		font-weight: bold;
	 
}
font.home{
border-left-color:blue
}
.carpet {
	margin-left: 130px;
	background-color: #1A446C ;
	 border-left-style: groove;
	
	 position:absolute;
}
.marq {
	margin-left: 130px;
	background-color: #1A446C; 
	 position: absolute;

}
.nav{
    background-color: beige;
	margin-left: 771px;
	position: absolute;
	
}



.leftbar {
    background-color: #8D0D19;
	margin-left: 344px;
	position: absolute;
	
		}
.midcont {
	margin-left: 294px;
	position: absolute;
	background-color: white; 
	border-color:black ; 
	border-style:solid;     
	border-width:2px;
	

}
.patako {
	margin-left: 660px;
	position: absolute;
	background-color: #8D0D19; 

}
.help {
	margin-left: 660px;
	position: fixed;
	background-image: url(help.fw.png);
	text-align: center;
	color: #D5D3D3;
	
}

.foot {
	margin-left: 132px;
	background-color: #1A446C ;
	 position: absolute;
}

.logo{
position:absolute

	}


#selected{

font-weight: bold; 
	
}


.container{
position: absolute
background-color: black;
}


.auto-style20 {
	position: absolute background-color:black;
	margin-top: 85px ;
	border-left-color:aqua
}


.auto-style21 {
	color: #D5D3D3;
}


.input1 {
   
   background-color: beige;
	margin-bottom: 0px;
	display:block;
	position:absolute;
	width: 400px;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	right:150;
	height:100; 
	font-weight:normal;
	
	color: #1A446C;
	border: 1px solid #999;
	
}

.aworan {
	
	position:absolute;
}
	
.input2{
background-color:white;

width:175px;
border: 1px solid #999;
height: 25px;
left:65;
position:absolute;

-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input2.button:hover {
background:#fff;
color:#09C;
}
input2:focus {
border: 3px solid #09C;
}
label {
	float: left;
	text-align: right;
	margin-right: 15px;
	width: 100px;
}




.auto-style22 {
	margin-bottom: 0px;
	position: absolute;
	text-align: center;
	color: #1A1313;
	font-size: larger;
}



.auto-style23 {
	text-align: center;
}



.auto-style24 {
	color: #DA4A4A;
}



.auto-style28 {
	color: #F1E9E9;
}



.auto-style29 {
	color: #041431;
}
.auto-style30 {
	background-color: white;
	width: 175px;
	border: 1px solid #999;
	height: 25px;
	position: absolute;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	color: #05132D;
}
.auto-style31 {
	color: #05132D;
}
.auto-style32 {
	background-color: white;
	width: 175px;
	border: 1px solid #999;
	height: 25px;
	left: 65;
	position: absolute;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	color: #041F52;
}
.auto-style33 {
	color: #041F52;
}
.auto-style34 {
	background-color: white;
	width: 175px;
	border: 1px solid #999;
	height: 25px;
	position: absolute;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	color: #051736;
}
.auto-style35 {
	color: #051736;
}
.auto-style36 {
	color: #020916;
}
.auto-style37 {
	background-color: white;
	width: 175px;
	border: 1px solid #999;
	height: 25px;
	left: 65;
	position: absolute;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	color: #040F23;
}
.auto-style38 {
	color: #040F23;
}

<?php  $disp_name  = isset($_POST['name'])?$_POST['name']:'';  ?>

.auto-style39 {
	text-decoration: none;
}


#selected0{

font-weight: bold; 
	
}


</style>

</head>

<body style="height: 30px; width: 783px; margin-left: 56px" bgcolor ="white">





<div class="auto-style20" style="left: 48px; top: 15px; width: 1298px; height: 874px">

	<div class="nav" style="left: 472px; top: 44px; width: 108px; height: 22px;"><a href="#" style="text-decoration:none">Home</a>&nbsp;&nbsp;<a href="#" style="text-decoration:none"> Admin</a></div>

<div class="home" style="height: 30px; width: 1615px; left: -160px; top: 6px;">
&nbsp;<br />
	<div class ="logo" style="left: 187px; top: 34px; width: 100px; height: 131px; right: 1328px;">
		<img src="images/logo.png" height="101"/></div>
	<div class="marq" style="height: 32px; width: 665px; left: 179px; top: 108px; bottom: -110px;">
	<marquee scrollammount ="2" style="height: 27px; position : absolute; left: 5px; top: 6px; width: 653px;" scrollamount="2" onmouseover ="this.stop()" onmouseout ="this.start()"><font color="white">Please fill in the correct details as the national Overseer</font></marquee></div>

	
	<div class="help" style="width: 222px; height: 224px; left: 421px; top: 299px;"> 
		<br />
		<span class="auto-style16">&nbsp;<br />
&nbsp;&nbsp;&nbsp;</span></div>




	</div>
<div class="carpet" style="width: 810px; height: 806px; left: 6px; top: 145px;">
	<div class="auto-style8" style="height: 547px; width: 145px; left: -202px; top: 203px;">
		<p class="auto-style23" id ="selected0"style="height: 100px; width: 142px; position:absolute; left: 1px; top: 208px;"><br />
		<span class="auto-style28">&nbsp;EXISTING<br />
		USER </span><br class="auto-style28" /></p>
		<p class="auto-style23" id ="selected"style="height: 100px; width: 142px; position:absolute; left: 1px; top: 57px;"><br />
		<span class="auto-style28">&nbsp;LOCAL<br />
		GOVERNMENT<br />
		PASTOR</span><br class="auto-style28" /></p>
		
	</div>
	<div class="midcont" style="width: 661px; left: -151px; top: 0px; height: 797px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br />
		<br />
		
		
	<form action="check_log.php" method="post" enctype="multipart/form-data" >
		<div class ="auto-style22" style="height: 13px; left: 174px; top: 1px; width: 197px;">
					<?php
$chk = $_REQUEST[log_tr];
if($chk != false) {

echo "<font size =3 color = red>Please Complete the registration!</font>";

} 

?>

				<?php
$chk = $_REQUEST[log_db];
if($chk != false) {

echo "<font size =3 color = red><br><br>This User exist in our database you can click  on existing User</font>";


} 
else {

echo "<script> document.write('<font size =3 color = red><br><br>REGISTER NOW</font>');
</script>";

}

?>

			</div>
			<div class="input1" style="left: 449px; top: 161px; right: 43px; height: 29px; bottom: 396px; width: 167px;">
	
	
	
        

		&nbsp;<br />
		</div>
		<div class ="auto-style22" style="height: 30px; left: 172px; top: -2px; width: 197px; position:absolute">

			<h4 style="height: 26px; width: 206px; position:absolute; left: -2px; top: 3px;">
			

			</h4></div>
	<div class="input1" style="left: 44px; top: 263px; right: 225px; height: 30px; width: 390px;">
		HQ/<span class="auto-style33">PHONE :</span>
		<input class="auto-style32" style="height: 22px; width: 276px; left: 88px; top: 2px;" name="phn0" value="<?php echo htmlentities($disp_phn) ?>"/></div>
	<div class="input1" style="left: 45px; top: 306px; right: 224px; height: 30px; width: 390px;">
		HQ/<span class="auto-style33">PHONE :</span>
		<input class="auto-style32" style="height: 22px; width: 276px; left: 88px; top: 2px;" name="phn1" value="<?php echo htmlentities($disp_phn) ?>"/></div>
		<div class="input1" style="left: 44px; top: 352px; right: 225px; height: 30px; width: 390px;">
			<span class="auto-style35">HQ/EMAIL:</span> 
			<input class="auto-style34" style="height: 22px; width: 281px; left: 92px; top: 3px;" name="email" value="<?php echo htmlentities($disp_em ) ?>"/></div>
	
	<div class="input1" style="left: 475px; top: 13px; right: 40px; height: 143px; bottom: 430px; width: 144px;">
	
<?php
if(isset($_POST['reg'])){
//echo "<img src =im/$wolex width =144 height = 143 >  ";

}

?>




	

		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<img src="images/pics.gif" style="position:absolute; left: 20px; top: 18px;" height="107" width="105"/><br class="auto-style24" />
		<span class="auto-style24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
</div>
	<div class="input1" style="left: 35px; top: 45px; right: 234px; height: 31px; bottom: 719px; width: 390px;">
	
	
	

		<input class="input2" style="height: 22px; width: 277px; left: 88px; top: 2px;" name="name" value="<?php echo htmlentities($disp_name ); ?>"/><span class="auto-style29">NAME :</span> </div>
	<div class="input1" style="left: 41px; top: 219px; height: 27px; right: 228px; width: 390px;">
		<span class="auto-style31">HQ/ADDRESS:</span><br />
		<input class="auto-style30" style="height: 21px; width: 257px; left: 107px; top: 4px; right: 26px;" name="address0" value="<?php echo htmlentities($disp_add) ?>"/></div>
	
	<div class="input1" style="left: 39px; top: 138px; height: 27px; right: 230px; width: 390px;">
		<span class="auto-style31">ADDRESS:</span><br />
		<input class="auto-style30" style="height: 20px; width: 278px; left: 88px; top: 2px;" name="address" value="<?php echo htmlentities($disp_add) ?>"/></div>
	
	<div class="input1" style="top: 458px; right: 218px; height: 37px; width: 394px;">
		<span class="auto-style38">COUNTRY
	
	
	

		</span>
	
	
	

		<select name="country" style="border: 1px dotted #333333; left: 93px; top: 7px; height: 21px; width: 275px;" size="1" class="auto-style37">
<option name="Nigeria" selected>Nigeria</option>
<option value="United States" >United States</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="Australia" >Australia</option>
<option value="Canada" >Canada</option>
<option value="France" >France</option>
<option value="New Zealand" >New Zealand</option>
<option value="India" >India</option>
<option value="Brazil" >Brazil</option>
<option value="----" >----</option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Ã…land Islands" >Ã…land Islands</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="American Samoa" >American Samoa</option>
<option value="Andorra" >Andorra</option>
<option value="Angola" >Angola</option>
<option value="Anguilla" >Anguilla</option>
<option value="Antarctica" >Antarctica</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Aruba" >Aruba</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bermuda" >Bermuda</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
<option value="Brunei Darussalam" >Brunei Darussalam</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Cayman Islands" >Cayman Islands</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Democratic Republic of the Congo" >Democratic Republic of the 
Congo</option>
<option value="Republic of the Congo" >Republic of the Congo</option>
<option value="Cook Islands" >Cook Islands</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="C&ocirc;te d'Ivoire" >C�te d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Faroe Islands" >Faroe Islands</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Gibraltar" >Gibraltar</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="Netherlands Antilles" >Netherlands Antilles</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Palestine" >Palestine</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the 
Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia" >Serbia</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United States Minor Outlying Islands" >United States Minor 
Outlying Islands</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Virgin Islands, British" >Virgin Islands, British</option>
<option value="Virgin Islands, U.S." >Virgin Islands, U.S.</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option></select></div>
	
	<div class="input1" style="top: 401px; right: 223px; height: 37px; width: 390px;">
		<span class="auto-style36">SKYPE 
		<br />
		<span> ADDRESS: </span> 
		</span> 
		<input class="input2" style="height: 20px; width: 276px; left: 89px; top: 7px;" name="skypeid" value="<?php echo htmlentities($disp_coun ) ?>"/> </div>
	
	
	
&nbsp;<br />
		<br />
	
	
&nbsp;<input  type="file"  class="input2" style="height: 29px; width: 192px; left: 451px; top: 162px; right: 18px;" name="pics" /><div class="input1" style="top: 97px; right: 232px; height: 21px; width: 390px;">
		<span class="auto-style31">TITLE:</span><br />
			<select name="tit" style="border: 1px dotted #333333; left: 91px; top: 2px; height: 25px; width: 270px;" size="1" class="auto-style37">
<option name="Nigeria" selected="selected">National Overseer</option>
<option value="State Overseer" >State Overseer</option>
<option value="Regional Overseer" >Regional Overseer</option>
<option value="Group Coordinator" >Group Coordinator</option>
<option value="Local Government" >Local Government</option>
		</select></div>
	
	
	
		<input type="submit" class="input2" style="left: 159px; top: 805px" value="Register" name="reg" /><div class="input1" style="top: 731px; right: 217px; height: 38px; width: 394px;">
			<span class="auto-style38">
	
	
	

			Location:<br />
&nbsp;</span><input class="input2" style="height: 22px; width: 276px; left: 88px; top: 5px;" name="state3" value="<?php echo htmlentities($disp_coun ) ?>"/></div>
	
		<div class="input1" style="top: 677px; right: 216px; height: 38px; width: 394px;">
			<span class="auto-style38">
	
	
	

			District:<br />
&nbsp;</span><input class="input2" style="height: 22px; width: 276px; left: 88px; top: 5px;" name="state4" value="<?php echo htmlentities($disp_coun ) ?>"/></div>
	
		<div class="input1" style="top: 626px; right: 216px; height: 38px; width: 394px;">
			<span class="auto-style38">
	
	
	

			Local <br />
			Government:<br />
&nbsp;</span><input class="input2" style="height: 22px; width: 276px; left: 88px; top: 5px;" name="state1" value="<?php echo htmlentities($disp_coun ) ?>"/></div>
	
	<div class="input1" style="top: 520px; right: 218px; height: 38px; width: 394px;">STATE<div class="input1" style="top: 61px; right: -2px; height: 38px; width: 394px;">
		REGION/<br />
		GROUP.<br />
		<input class="input2" style="height: 22px; width: 276px; left: 88px; top: 5px;" name="state2" value="<?php echo htmlentities($disp_coun ) ?>"/></div>
	
		<span class="auto-style38">
	
	
	

		&nbsp;</span><input class="input2" style="height: 22px; width: 276px; left: 88px; top: 5px;" name="state0" value="<?php echo htmlentities($disp_coun ) ?>"/></div>
	
	<div class="input1" style="left: 39px; top: 180px; right: 230px; height: 30px; width: 390px;">
		<span class="auto-style33">PHONE :</span>
		<input class="auto-style32" style="height: 22px; width: 276px; left: 88px; top: 2px;" name="phn" value="<?php echo htmlentities($disp_phn) ?>"/></div>
	
		</form>

	</div>
</div>
	<div class="foot" style="left: -132px; top: 976px; width: 1581px; height: 25px"> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style21"> 
		Copyright: ©2013 DCLM ICT&nbsp; </span></div>
	

	
<img src="images/profimg1.png" height="28" width="299" class="aworan" style="left: 401px; top: 70px; right: 185px"/></div>

</body>

</html>
