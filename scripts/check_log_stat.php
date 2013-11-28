


<?php $con = mysql_connect("localhost","root","dclmict4Christ");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("locprofile", $con);
require_once "formvalidator.php";


$show_form=true;
 ?>

 <?php
 
 ?>





<?php
if(isset($_POST['reg']))
{// The form is submitted







function findexts ($filename) 
 { 
 $filename = strtolower($filename) ; 
 $exts = explode("[/\\.]", $filename) ; 
 $n = count($exts)-3; 
 $exts = $exts[$n]; 
 return $exts; 
 } 
 
 //This applies the function to our file  
 $ext = findexts ($_FILES['pics']['name']) ; 




 $ran = rand () ;

 //This takes the random number (or timestamp) you generated and adds a . on the end, 

//so it is ready of the file extension to be appended.
 $ran2 = $ran.".";

 //This assigns the subdirectory you want to save into... make sure it exists!
 $target = "im/";
 //This combines the directory, the random file name, and the extension
 $target = $target . $ran2.$ext; 


//if(isset($_POST['upload'])){

//$file  =  $_POST["pics"];
//$wolex = "" ;

if ((($_FILES["pics"]["type"] == "images/gif")

|| ($_FILES["pics"]["type"] == "images/jpeg")

||($_FILES["pics"]["type"] == "images/png")

||($_FILES["pics"]["type"] == "images/pjpeg"))
	|| ($_FILES["pics"]["type"] == "images/JPEG")

||($_FILES["pics"]["type"] == "images/PNG")

||($_FILES["pics"]["type"] == "images/PJPEG")






&& ($_FILES["pics"]["size"] < 1000000)){
 


if ($_FILES["pics"]["error"] > 0)
  {
  echo "Error: " . $_FILES["pics"]["error"] . "<br />";

  }
  

}
else
  {
 // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  //echo "Type: " . $_FILES["file"]["type"] . "<br />";
 // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
   //['tmp_name']
   //move_uploaded_file($_FILES ['pics']['tmp_name'], 'file_ok/' . $_FILES["pics"]["name"] )."<br>" ;
    if(move_uploaded_file($_FILES['pics']['tmp_name'], $target)) 
 {
 //echo "The file has been uploaded as ".$ran2.$ext;
 //echo "The file has been uploaded as ".$target;
//header('location:index.php?aworan=false');
//echo "<img src='im/$wolex' width = 50 height = 100>";


 	

 

 // $wolex = $_FILES["pics"]["name"];
 $wolex = $ran2.$ext;
  $state = "Congratulation" ;

  $pic_state = "" ;
  
  
 

 




}



 

 


  //$fp = fopen("file_up/$wolex.", 'a'); 
  //fwrite($fp, "<div class='wolex'><i>User has left the chat 


  //echo "<img src = 'file_upl/$wolex' height = 20 width = 30><br>";
  }
  }
  else {
  //$wolex = "picture.jpg" ; 
  $state = " Try again" ;
  
  
  $file = "" ;

} //'<script type="text/javascript"> window.alert("Please make sure you are on the Lord side");</SCRIPT>';
  

$disp_name  = isset($_POST['name'])?$_POST['name']:''; 
$disp_tit  = isset($_POST['tit'])?$_POST['tit']:'';  
$disp_add = isset($_POST['address'])?$_POST['address']:''; 
$disp_phn = isset($_POST['phn'])?$_POST['phn']:''; 
$disp_em = isset($_POST['email'])?$_POST['email']:''; 
$$disp_skype = isset($_POST['skypeid'])?$_POST['skypeid']:''; 
$disp_coun = isset($_POST['country'])?$_POST['country']:''; 
$disp_stat = isset($_POST['stat'])?$_POST['stat']:''; 
$disp_regi = isset($_POST['regi'])?$_POST['regi']:''; 
$$disp_grp = isset($_POST['dist'])?$_POST['dist']:''; 



 














$validator = new FormValidator();

    $validator->addValidation("pics","file","Please fill in Surname");
   $validator->addValidation("name_p","req","Please fill in Surname");
    $validator->addValidation("tit_p","req","Please fill in other name");
    $validator->addValidation("address_p","req","the light of the world");
    $validator->addValidation("phn_p","req","the light of the world");
   //$validator->addValidation("Email","email","the light of the world");
    $validator->addValidation("skid_p","req","the light of the world");
    $validator->addValidation("country","req","the light of the world");

   
//Now, validate the form
    if($validator->ValidateForm())
    {





        //Validation success. 
        //Here we can proceed with processing the form 
        //(like sending email, saving to Database etc)
        // In this example, we just display a message



//Personal Information
$name_stat_p  = addslashes($_POST[name_p]);
$address_stat_p  = addslashes($_POST[address_p]);
$phn_stat_p  = addslashes($_POST[phn_p]);
$email_stat_p  = addslashes($_POST[email_p]);
$skypeid_stat_p =addslashes($_POST[skid_p]);
$title = addslashes($_POST[tit_p]);
//$count_stat_p = addslashes($_POST[count_pass]);


$pob =addslashes($_POST[pob_ch]);
$skype =addslashes($_POST[skid_ch]);
$country = addslashes($_POST[country]);
$stat = addslashes($_POST[st_ch]);
$file   = addslashes($_POST[pics]); 
$name = addslashes($_POST[name_ch]);

$add = addslashes($_POST[address_ch]);
$phone = addslashes($_POST[phn_ch]);
$email=addslashes($_POST[email_ch]);








mysql_select_db("locprofile", $con);
 $sql = " SELECT * FROM statepastorpersonalinfo WHERE email = '$email'  " ;
$result = mysql_query($sql);
$counter = mysql_num_rows($result);
 

 if ($counter ==0){ 

 //church info first ............

 $sql = "INSERT INTO statepastorpersonalinfo(name,tit,address,phn,email,skid,country,stat,picture,hq_stat,address_stat,pob_stat,phn_stat,email_stat,skypeid_stat) VALUES
  ('$name','$title','$add','$phone','$email','$skype','$country','$stat','$wolex','$name_stat_p','$address_stat_p','$pob_stat_p','$phn_stat_p','$email_stat_p','$skypeid_stat_p') ";

 //header('location:churchreg.php?acc_key=true');
// header('location:check_log.php');




//echo "<img src =im/$wolex width =144 height = 143 >     



}

else {
//header('location:index.php?log_db=false');

}

  
 
 

 
  
 






 if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  
  $show_form=false;

 



}

else
    {
    //  if(isset($_POST['Submit'])){
   

      header('location:churchreg.php');
        echo "<center><p><font color = 'red'>It eigther Exist B<br></font></p></center>\n";
   $error_hash = $validator->GetErrors();
        foreach($error_hash as $inpname => $inp_err)
        {
           //echo "<center><p>$inpname : $inp_err</p></center>\n"; 
              
        }        
    }//else



?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 2</title>




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



.auto-style24 {
	color: #DA4A4A;
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
	background-color: white;
	width: 175px;
	border: 1px solid #999;
	left: 65;
	position: absolute;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	color: #040F23;
}

</style>

</head>

<body style="height: 30px; width: 783px; margin-left: 56px" bgcolor ="white">





<div class="auto-style20" style="left: 48px; top: 15px; width: 1298px; height: 874px">

	<div class="nav" style="left: 472px; top: 44px; width: 108px; height: 22px;"><a href="#" style="text-decoration:none">Home</a>&nbsp;&nbsp;<a href="#" style="text-decoration:none"> Admin</a></div>

<div class="home" style="height: 30px; width: 1615px; left: -160px; top: 6px;">
&nbsp;<br />
	<div class ="logo" style="left: 187px; top: 34px; width: 100px; height: 131px; right: 1328px;">
		<img src="logo.png" height="101"/></div>
	<div class="marq" style="height: 32px; width: 663px; left: 179px; top: 108px; bottom: -110px;">
	<marquee scrollammount ="2" style="height: 27px; position : absolute; left: 5px; top: 6px; width: 653px;" scrollamount="2"><font color="white">You are welcome  <?php echo $name ; ?> click on proceed to continue your registration&nbsp; </font></marquee></div>

	
	<div class="help" style="width: 222px; height: 224px; left: 421px; top: 299px;"> 
		<br />
		<span class="auto-style16">&nbsp;<br />
&nbsp;&nbsp;&nbsp;</span></div>




	</div>
<div class="carpet" style="width: 810px; height: 594px; left: 6px; top: 145px;">
	<div class="auto-style8" style="height: 547px; width: 145px; left: -202px; top: 203px;">
		
	</div>
	<div class="midcont" style="width: 661px; left: -151px; top: 0px; height: 588px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br />
		<br />
		
		
	<form action="churchregstat.php" method="post" enctype="multipart/form-data"  style="position:absolute; left: 14px; top: 85px; width: 454px; height: 38px;">
		<div class ="auto-style22" style="height: 13px; left: 190px; top: -70px; width: 197px;">
					<?php
$chk = $_REQUEST[log_tr];
if($chk != false) {

echo "<script> document.write('<font size =3 color = red>Please Complete the registration!</font>');
</script>";

} 

?>

				<?php
$chk = $_REQUEST[log_db];
if($chk != false) {

echo "<script> document.write('<font size =3 color = red>The email   is our database</font>');
</script>";

} 
else {

echo "<script> document.write('<font size =3 color = red><br><b>Welcome $name !</b><hr><br><br></font>');
</script>";

}

?>

			</div>
	
	
	
	<div class="input1" style="left: 475px; top: -59px; right: -165px; height: 143px; bottom: -46px; width: 144px;">

<input type="hidden" style="border: 1px dotted #333333; left: 311px; top: 177px; height: 21px; width: 145px;" size="1" class="auto-style37" name="hq_stat_p" value="<?php echo $name_stat_p  ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 483px; top: 179px; height: 21px; width: 164px;" size="1" class="auto-style37" name="adress_stat_p" value="<?php echo $address_stat_p  ?>"/>
				<input type="hidden" style="border: 0px dotted #333333; left: 483px; top: 179px; height: 21px; width: 164px;" size="1" class="auto-style37" name="state_stat_p" value="<?php echo $stat ?>"/>
        <input type="hidden" style="border: 0px dotted #333333; left: 2px; top: 176px; height: 23px; width: 145px;" size="1" class="auto-style38" name="phn_stat_p" value="<?php echo $phn_stat_p ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 154px; top: 176px; height: 24px; width: 145px;" size="1" class="auto-style38" name="email_stat_p" value="<?php echo $email_stat_p  ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 154px; top: 176px; height: 24px; width: 145px;" size="1" class="auto-style38" name="skypeid_stat_p" value="<?php echo $skypeid_stat_p ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 154px; top: 176px; height: 24px; width: 145px;" size="1" class="auto-style38" name="count_pass" value="<?php echo $country  ?>"/>
        
        <input type="hidden" style="border: 0px dotted #333333; left: 154px; top: 176px; height: 24px; width: 145px;" size="1" class="auto-style38" name="stat" value="<?php echo $stat  ?>"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 26px; top: 175px; height: 24px; width: 145px;" size="1" class="auto-style38" name  ="name_password" value = "Admin"/>
		<input type="hidden" style="border: 0px dotted #333333; left: 26px; top: 175px; height: 24px; width: 145px;" size="1" class="auto-style38" name ="email_password" value = "Admin"/>









	
<?php
if(isset($_POST['reg'])){
echo "<img src =im/$wolex width =144 height = 143 >  ";

}

?>




	

		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<br class="auto-style24" />
		<span class="auto-style24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
</div>
	
	
	


	
		
		<!--THe HQ INFORMATION-->
		
		
		

		<input type="submit" class="input2" style="left: 142px; top: 75px; width: 244px;" value="Proceed to Fill the Church Locations" name="proc" /><div></div>

		</form></div>
	<div class="foot" style="left: -132px; top: 976px; width: 1581px; height: 25px"> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style21"> 
		Courtesy : DCLM ICT&nbsp; DESIGN</span></div>
	

	
<img src="profimg1.png" height="28" width="299" class="aworan" style="left: 401px; top: 70px; right: 185px"/></div></div>

</body>

</html>
