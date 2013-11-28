
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
<title>Church Location</title>
<link rel='SHORTCUT ICON' href='http://dclmstream.s3.amazonaws.com/img/favicon.ico' type='image/x-icon'/>



<?php
session_start();
$_session['pos']= 1;




require_once "countrynational.php";



//$counter = mysql_num_rows($result);


$show_form=true;

//include the main validation script

//$B = $result1 ;
//include('profile.php');
$A = "Admin" ;
$B = "Admin" ;
//$C = 'wolex2care';
echo "$result" ;

$wolex = "" ;

$wishiwoshierror="" ;


//include the main validation script

   $name_pass = addslashes($_POST[name_pass]);
    $email_pass = addslashes($_POST[email_pass]);
    $tit_pass = addslashes($_POST[tit_pass]);
     $count_pass = addslashes($_POST[count_pass]);
	
	


 $name = addslashes($_POST[name]);
$title = addslashes($_POST[tit]);
$add = addslashes($_POST[address]);
$phone = addslashes($_POST[phn]);
$email=addslashes($_POST[email]);
$skype =addslashes($_POST[skypeid]);
$country = addslashes($_POST[country]);
$stat = addslashes($_POST[stat]);
$regi = addslashes($_POST[regi]);
$dist = addslashes($_POST[dis]);
$locatn= addslashes($_POST[locatn]);






$chk1 =$_REQUEST[acc_key];
$chk =$_REQUEST[acc_key_add];
$er = $_REQUEST[error_code];



$Username = addslashes($_POST[name_password]);
$Password = addslashes($_POST[email_password]);




if($Username == $A && $Password == $B){

$_session['pos']= 1;

  
}


else{

header("location:index.php");

}



//$chk = $_REQUEST[acc_key_add];


 

 










//$chk = $_REQUEST[acc_key];



?>





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
	background-color:white;
	border:thin navy;
	  
	 position:absolute;
}
.marq {
	margin-left: 130px;
	background-color: beige ;
	azimuth:center;
	
	
	 position: absolute;

}
.nav{
    background-color: beige;
	margin-left: 771px;
	position: absolute;
	
}
.tag{
position:absolute; float:none;azimuth:center;
	
}

.churchadd{
position:absolute;
	
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
	width: 900px; left: -151px; top: 0px; height: 588px;
	
	
	
	

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
   
   background-color: white;
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

#click{
position:absolute;
background-image:url('clickme.gif')
	
	}



.auto-style24 {
	position: absolute;
	float: none;
	azimuth: center;
	text-align: center;
}



.auto-style25 {
	background-color: white;
	width: 175px;
	border: 1px solid #999;
	height: 25px;
	position: absolute;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}



.auto-style26 {
	background-color: white;
	width: 175px;
	border: 1px solid #999;
	left: 65;
	position: absolute;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}



.auto-style27 {
	position: absolute;
	text-align: center;
	color: #FA8B8B;
}



.auto-style29 {
	color: #203F3F;
}



</style>


</head>

<body style="height: 30px; width: 783px; margin-left: 56px" background="eom background.jpg">
<div class="auto-style20" style="left: 48px; top: 15px; width: 1298px; height: 874px">

	<div class="nav" style="left: 472px; top: 44px; width: 108px; height: 22px;">Home&nbsp;&nbsp; Admin</div>

<div class="home" style="height: 30px; width: 1615px; left: -156px; top: 9px;">
&nbsp;<br />
	<div class ="logo" style="left: 174px; top: 60px; width: 127px; height: 127px; right: 1314px;"><img src="images/logo.png"/></div>
	<div class="marq" style="height: 32px; width: 1044px; left: 177px; top: 154px; bottom: -156px;">
	<marquee scrollammount ="2" style="height: 27px; width: 1033px; azimuth:center; position:absolute; left: 9px; top: 3px;" scrollamount="2" class="auto-style29" >Please scroll sideways to fill in all the data of the Church Location<?php echo "$name"?></marquee></div>

	


</div>
<div class="carpet" style="width: 1188px; height: 523px; left: 10px; top: 193px;">
	
	<div class="churchadd" style="left: 17px; top: 44px; width: 126px; height: 336px;">
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		Please fill in the church locations. You can equally add more locations 
		as the page reloads</div>
	<div class="midcont" style="left: -151px; top: 0px; width: 986px; height: 459px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 
		<div class="auto-style24" style="left: 794px; top: 91px; width: 123px; height: 22px">
			Email</div>
		
		
		<div class="auto-style24" style="left: 653px; top: 91px; width: 123px; height: 22px">
			Pastor's Name</div>
		
		
		<div class="auto-style24" style="left: 494px; top: 90px; width: 123px; height: 22px">
			Church Phone No</div>
		
		
		<div class="auto-style24" style="left: 351px; top: 88px; width: 123px; height: 22px">
			P.O Box</div>
		
		
		<div class="auto-style24" style="left: 199px; top: 87px; width: 127px; height: 25px">
			Location/Address</div>
		
		
		<div class="auto-style24" style="left: 37px; top: 88px; width: 127px; height: 25px">
			State/Province</div>
		
		
		<br />
		 
		<div class="auto-style27" style="left: 226px; top: 23px; height: 63px; width: 306px">
							




							<?php
$chk = $_REQUEST[acc_key];
if($chk != false) {

	$Username == $A && $Password == $B ;
	$pos = 1 ;
echo "<font color = blay>Please fill in all necessary information</font>";

}
?>

							<?php
$chk1 = $_REQUEST[acc_key_add];
if($chk1 != false) {
echo "<img src ='images/sub.gif' alt = 'we'/>

 ";
}
$er = $_REQUEST[error_code];
if($er != false) {
echo "<center><font color='red' face='Georgia' size='2'>
Atleast you must fill in one church location information

 </font></center>";
}
?>







</div>
	<form action="churchreg.php" style="height: 12px" method="post">
	<div class="input1" style="left: 34px; top: 245px; right: -263px; height: 44px; width: 912px;">
		<input class="input2" style="height: 29px; width: 140px; left: 7px; top: 11px;" name="stat2"/><br />


		<input type = 'hidden' name = 'name_pass'   value = "<?php echo $name_pass; ?>"  />
	<input type = 'hidden' name = 'tit_pass'    value =  "<?php echo $tit_pass; ?>" />
	<input type = 'hidden' name = 'email_pass'   value = "<?php echo $email_pass; ?>"  />
	<input type = 'hidden' name = 'count_pass'  value = "<?php echo $count_pass; ?>" / >
	
		<input class="input2" style="height: 28px; width: 140px; left: 767px; top: 7px;" name="email2"/><input class="input2" style="height: 28px; width: 140px; left: 614px; top: 10px;" name="pstname2"/><input class="input2" style="height: 29px; width: 140px; left: 459px; top: 14px;" name="cug2"/><input class="input2" style="height: 29px; width: 132px; left: 315px; top: 13px;" name="pobox2"/><input class="input2" style="height: 29px; width: 140px; left: 160px; top: 11px; right: 816px;" name="loc2"/></div>
		<div class="input1" style="left: 35px; top: 306px; right: -266px; height: 44px; width: 914px;">
			<br />
			<input class="input2" style="height: 30px; width: 141px; left: 767px; top: 4px;" name="email3"/><input class="input2" style="height: 30px; width: 141px; left: 612px; top: 4px;" name="pstname3"/><input class="input2" style="height: 30px; width: 141px; left: 459px; top: 6px;" name="cug3"/><input class="auto-style26" style="height: 23px; width: 133px; left: 315px; top: 10px;" name="pobox3"/><input class="auto-style26" style="height: 23px; width: 141px; left: 163px; top: 11px;" name="loc3"/><input class="input2" style="height: 26px; width: 141px; left: 8px; top: 10px;" name="stat3"/></div>
	<div class="input1" style="left: 33px; top: 122px; right: -262px; height: 44px; bottom: 215px; width: 912px;">
	
	
	

		<br />
	
	
	

		<input class="auto-style25" style="height: 27px; width: 141px; top: 11px; right: 765px;" name="stat"/><input class="input2" style="height: 29px; width: 141px; left: 762px; top: 10px; right: 213px;" name="email"/><input class="input2" style="height: 29px; width: 141px; left: 614px; top: 12px; right: 361px;" name="pstname"/><input class="input2" style="height: 29px; width: 141px; left: 459px; top: 11px; right: 516px;" name="cug"/><input class="input2" style="height: 29px; width: 133px; left: 314px; top: 11px;" name="pobox"/><input class="auto-style25" style="height: 28px; width: 141px; top: 11px; right: 613px;" name="loc"/></div>
	<div class="input1" style="left: 36px; top: 183px; height: 44px; right: -259px; width: 906px;">
		<br />
		<input class="input2" style="height: 28px; width: 138px; left: 763px; top: 9px;" name="email1"/><input class="input2" style="height: 28px; width: 135px; left: 611px; top: 10px;" name="pstname1"/><input class="input2" style="height: 27px; width: 135px; left: 459px; top: 12px;" name="cug1"/><input class="input2" style="height: 28px; width: 133px; left: 310px; top: 12px;" name="pobox1"/><input class="input2" style="height: 29px; width: 135px; left: 159px; top: 11px;" name="loc1"/><input class="input2" style="height: 28px; width: 135px; left: 7px; top: 9px;" name="stat1"/></div>
	
	
	<input type="hidden" style="border: 0px dotted #333333; left: 26px; top: 175px; height: 24px; width: 145px;" size="1" class="auto-style38" name  ="name_password" value = "Admin"/>
	<input type="hidden" style="border: 0px dotted #333333; left: 26px; top: 175px; height: 24px; width: 145px;" size="1" class="auto-style38" name ="email_password" value = "Admin"/>
	
&nbsp;<br />
		<br />
	
	
&nbsp;<input type="submit" class="input2" style="left: 313px; top: 399px; width: 142px;" value="Register" name="reg" /></form>

	</div>
</div>
	<div class="foot" style="left: -132px; top: 976px; width: 1581px; height: 25px"> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style21"> 
		Copyright: ©2013 DCLM ICT&nbsp; </span></div>
	

	
	
	

<img src="images/profimg1.png" height="28" width="299" class="aworan" style="left: 440px; top: 125px; right: 146px"/></div>

</body>

</html>
