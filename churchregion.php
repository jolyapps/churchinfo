
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
<title>DCLM Church Locations | Regions</title>
<link rel='SHORTCUT ICON' href='http://dclmstream.s3.amazonaws.com/img/favicon.ico' type='image/x-icon'/>



<?php
session_start();
//$_session['pos']= 1;




include "regionnational.php";



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


//comming from check_log_stat 

$name_reg_p = addslashes($_POST[hq_reg_p]);
$address_reg_p = addslashes($_POST[adress_reg_p]);
 $phn_reg_p = addslashes($_POST[phn_reg_p]);
 $email_reg_p  = addslashes($_POST[email_reg_p]);
 $skypeid_reg_p = addslashes($_POST[skypeid_reg_p]);
  $stat_reg_p = addslashes($_POST[state_reg_p]);
  $reg_reg_p = addslashes($_POST[reg_reg_p]);
 $tit_pass = addslashes($_POST[tit_pass]);
 $count_pass = addslashes($_POST[count_pass]);


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




//if($Username == $A && $Password == $B){

//$_session['pos']= 1;

  
//}


//else{

//header("location:index.php");

//}



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



.auto-style29 {
	color: #203F3F;
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



.auto-style31 {
	color: #1EE2EC;
	background-color: #082D2F;
}
.auto-style32 {
	color: #1EE2EC;
}
.auto-style33 {
	background-color: #082D2F;
}



</style>


</head>

<body style="height: 30px; width: 783px; margin-left: 56px" background="images/eom background.jpg">
<?php include_once("include/analyticstracking.php") ?>

<div class="auto-style20" style="left: 48px; top: 15px; width: 1298px; height: 874px">

<div class="nav" style="left: 320px; top: 44px; width: 162px; height: 22px;"><a href="welcome.php" style="text-decoration:none">Home</a>&nbsp;&nbsp;<a href="#" style="text-decoration:none"> Admin</a>&nbsp;&nbsp;<a href="out.php" style="text-decoration:none"> Logout</a></div>

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
	<div class="midcont" style="left: -151px; top: 0px; width: 986px; height: 521px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 
				
		<br />
		 
	<form action="churchregion.php" style="height: 12px" method="post" enctype="multipart/form-data">
	
	
	<input type="hidden" style="border: 0px dotted #333333; left: 26px; top: 175px; height: 24px; width: 145px;" size="1" class="auto-style38" name  ="name_password" value = "Admin"/>
	<input type="hidden" style="border: 0px dotted #333333; left: 26px; top: 175px; height: 24px; width: 145px;" size="1" class="auto-style38" name ="email_password" value = "Admin"/>
	
&nbsp;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="auto-style32">&nbsp; <span class="auto-style33">&nbsp;
		</span></span><span class="auto-style31">&nbsp;&nbsp;&nbsp; REGISTER 
		YOUR GROUP CHURCH 
		INFORMATION&nbsp;HERE &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="auto-style32"><span class="auto-style33">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
		<br />
		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GROUP CHURCH INFORMATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GROUP&nbsp; PASTOR'S INFORMATION<br />
	
	
	
		<input type="submit" class="input2" style="left: 429px; top: 461px" value="Register" name="reg" /><br />
		<br />
		<div class="auto-style20"  style="width: 142px; position:absolute; left: 448px; top: 239px; right: 396px; height: 19px;" >
			SKYPEID</div>
	
	
	

		<div class="auto-style20"  style="width: 142px; position:absolute; left: 449px; top: 201px; right: 395px;" >
			PHONE</div>
	
	
	

		<div class="auto-style20"  style="width: 142px; position:absolute; left: 448px; top: 167px; right: 396px;" >
			EMAIL</div>
	
	
	

		<div class="auto-style20"  style="width: 142px; position:absolute; left: 451px; top: 131px; right: 393px;" >
			ADDRESS</div>
	
	
	

		<div class="auto-style20"  style="width: 142px; position:absolute; top: 96px; right: 399px;" >
			NAME</div>
	
	
	

		<div class="auto-style20"  style="width: 142px; position:absolute; left: 3px; top: 93px; right: 841px;" >
			STATE/PROVINCE</div>
	
	
	

		<input class="auto-style25" style="height: 27px; width: 273px; top: 321px; right: 560px; left: 153px;" name="grp_skid" id="grp_skid"/><input class="auto-style25" style="height: 27px; width: 273px; top: 285px; right: 563px; left: 150px;" name="grp_phn" id="grp_phn"/><input class="auto-style25" style="height: 27px; width: 273px; top: 248px; right: 560px; left: 153px;" name="grp_email" id="grp_email"/><input class="auto-style25" style="height: 27px; width: 273px; top: 211px; right: 560px; " name="grp_address" id="grp_address"/><input class="auto-style25" style="height: 27px; width: 273px; top: 174px; right: 559px; " name="grp_pro" id="grp_pro"/>
		<br />
	
	
	

		<input class="auto-style25" style="height: 27px; width: 273px; top: 173px; right: 96px; " name="grp_p_name" id="grp_p_name"/>
	  <input class="auto-style25" style="height: 27px; width: 273px; top: 320px; right: 99px; left: 614px;" name="grp_skype_p" id="grp_skype_p"/>
	  <input class="auto-style25" style="height: 27px; width: 273px; top: 281px; right: 98px; " name="grp_phn_p" id="grp_phn_p"/><input class="auto-style25" style="height: 27px; width: 273px; top: 245px; right: 99px; " name="grp_em_p" id="grp_em_p"/><input class="auto-style25" style="height: 27px; width: 273px; top: 212px; right: 98px; " name="grp_add_p" id="grp_add_p"/>
  <div class="auto-style20"  style="width: 142px; position:absolute; left: 3px; top: 316px; right: 837px;" >
			Church Picture</div>
	
	
	

  <div class="auto-style20"  style="width: 142px; position:absolute; left: 3px; top: 243px; right: 841px;" >
			SKYPE ID</div>
	
	
	

		<div class="auto-style20"  style="width: 142px; position:absolute; left: 0px; top: 205px; right: 844px;" >
			PHONE</div>
	
	
	

		<div class="auto-style20"  style="width: 142px; position:absolute; left: 4px; top: 167px; " >
			EMAIL</div>
	
	
	

		<div class="auto-style20"  style="width: 142px; position:absolute; left: 4px; top: 131px; right: 840px;" >
			CHURCH ADDRESS</div>
	
	
	<input type="hidden" style="border: 1px dotted #333333; left: 311px; top: 177px; height: 21px; width: 145px;" size="1" class="auto-style37" name="hq_reg_p" value="<?php echo $name_reg_p  ; ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 483px; top: 179px; height: 21px; width: 164px;" size="1" class="auto-style37" name="adress_reg_p" value="<?php echo $address_reg_p ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 2px; top: 176px; height: 23px; width: 145px;" size="1" class="auto-style38" name="phn_reg_p" value="<?php echo $phn_reg_p  ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 154px; top: 176px; height: 24px; width: 145px;" size="1" class="auto-style38" name="email_reg_p" value="<?php echo $email_reg_p  ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 154px; top: 176px; height: 24px; width: 145px;" size="1" class="auto-style38" name="skypeid_reg_p" value="<?php echo $skypeid_reg_p ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 154px; top: 176px; height: 24px; width: 145px;" size="1" class="auto-style38" name="reg_reg_p" value="<?php echo $reg_reg_p ?>"/>

		<input type="hidden" style="border: 0px dotted #333333; left: 154px; top: 176px; height: 24px; width: 145px;" size="1" class="auto-style38" name="count_pass" value="<?php echo $count_pass  ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 26px; top: 175px; height: 24px; width: 145px;" size="1" class="auto-style38" name  ="name_password" value = "Admin"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 26px; top: 175px; height: 24px; width: 145px;" size="1" class="auto-style38" name ="email_password" value = "Admin"/>



		<br />
		<br />
		<input  type="file"  class="input2" style="height: 29px; width: 192px; left: 163px; top: 398px; right: 627px;" name="pics" /></form>

	</div>
</div>
	<div class="foot" style="left: -132px; top: 976px; width: 1581px; height: 25px"> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style21"> 
		Copyright: ©2013 DCLM ICT&nbsp; </span></div>
	

	
	
	

<img src="images/profimg1.png" height="28" width="299" class="aworan" style="left: 440px; top: 125px; right: 146px"/></div>

</body>

</html>
