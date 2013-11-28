<?php
header("Last-Modified: ".gmdate('D,d M Y H:i:s')." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0",false);
header("pragma: no-cache");
?>
<?php  ?>


<?php $con = mysql_connect("localhost","root","");
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

 if(isset($_POST['reg'])){



function findexts ($filename) 
 { 
 $filename = strtolower($filename) ; 
 $exts = explode("[/\\.]", $filename) ; 
 $n = count($exts)-1; 
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
 $target = "churchpics/";
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






&& ($_FILES["pics"]["size"] < 10000)){
 


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



$disp_tit  = isset($_POST['country'])?$_POST['country']:''; 
$disp_name  = isset($_POST['stat'])?$_POST['stat']:'';  
$disp_pfno  = isset($_POST['loc'])?$_POST['loc']:''; 
$disp_pfno  = isset($_POST['pobox'])?$_POST['pobox']:''; 
$disp_pfno  = isset($_POST['cug'])?$_POST['cug']:''; 
$disp_pfno  = isset($_POST['pstname'])?$_POST['pstname']:''; 
$disp_pfno  = isset($_POST['email'])?$_POST['email']:''; 

$disp_tit  = isset($_POST['country1'])?$_POST['country1']:''; 
$disp_name  = isset($_POST['stat1'])?$_POST['stat1']:'';  
$disp_pfno  = isset($_POST['loc1'])?$_POST['loc1']:''; 
$disp_pfno  = isset($_POST['pobox1'])?$_POST['pobox1']:''; 
$disp_pfno  = isset($_POST['cug1'])?$_POST['cug1']:''; 
$disp_pfno  = isset($_POST['pstname1'])?$_POST['pstname1']:''; 
$disp_pfno  = isset($_POST['email1'])?$_POST['email1']:''; 


$disp_tit  = isset($_POST['country2'])?$_POST['country2']:''; 
$disp_name  = isset($_POST['stat2'])?$_POST['stat2']:'';  
$disp_pfno  = isset($_POST['loc2'])?$_POST['loc2']:''; 
$disp_pfno  = isset($_POST['pobox2'])?$_POST['pobox2']:''; 
$disp_pfno  = isset($_POST['cug2'])?$_POST['cug2']:''; 
$disp_pfno  = isset($_POST['pstname2'])?$_POST['pstname2']:''; 
$disp_pfno  = isset($_POST['email2'])?$_POST['email2']:''; 


$disp_tit  = isset($_POST['country3'])?$_POST['country3']:''; 
$disp_name  = isset($_POST['stat3'])?$_POST['stat3']:'';  
$disp_pfno  = isset($_POST['loc3'])?$_POST['loc3']:''; 
$disp_pfno  = isset($_POST['pobox3'])?$_POST['pobox3']:''; 
$disp_pfno  = isset($_POST['cug3'])?$_POST['cug3']:''; 
$disp_pfno  = isset($_POST['pstname3'])?$_POST['pstname3']:''; 
$disp_pfno  = isset($_POST['email3'])?$_POST['email3']:'';






 














$validator = new FormValidator();

   // $validator->addValidation("country","req","Please fill in Surname");
    //$validator->addValidation("stat","req","Please fill in other name");
   // $validator->addValidation("loc","req","the light of the world");
   //$validator->addValidation("pobox","req","the light of the world");
   //$validator->addValidation("cug","email","the light of the world");
    //$validator->addValidation("pstname","req","the light of the world");
    //$validator->addValidation("email","req","the light of the world");
   
//Now, validate the form
    if($validator->ValidateForm())
    {





        //Validation success. 
        //Here we can proceed with processing the form 
        //(like sending email, saving to Database etc)
        // In this example, we just display a message

 
 $name_pass = addslashes($_POST[name_pass]);
 $email_pass = addslashes($_POST[email_pass]);

 
 
 //Region  Pastor information comming from Churchregstat.php
 
 $name_grp_p = addslashes($_POST[hq_grp_p]);
 $address_grp_p = addslashes($_POST[adress_grp_p]);
 $phn_grp_p = addslashes($_POST[phn_grp_p]);
 $email_grp_p  = addslashes($_POST[email_grp_p]);
 $skypeid_grp_p = addslashes($_POST[skypeid_grp_p]);
 $tit_pass = addslashes($_POST[tit_pass]);
 $stat_name =  addslashes($_POST[stat]);
 $reg_name =  addslashes($_POST[reg_reg_p]);
 $grp_name =  addslashes($_POST[grp_grp_p]);
 $count_pass = addslashes($_POST[count_pass]);


//State information comming from churchregstat
 $dis_name_ch = addslashes($_POST[dis_pro]);
 $dis_add_ch = addslashes($_POST[dis_address]);
 $dis_email_ch = addslashes($_POST[dis_email]);
 $dis_phn_ch = addslashes($_POST[dis_phn]);
 $dis_skid_ch= addslashes($_POST[dis_skid]);
 $dis_pob_ch = addslashes($_POST[ dis_pob]);





 

 //state Pastor information churchregstat (personal information)
  $dis_name_p= addslashes($_POST[dis_p_name]);
  $dis_add_p = addslashes($_POST[dis_add_p]);
  $dis_em_p = addslashes($_POST[dis_em_p]);
  $dis_phn_p  = addslashes($_POST[dis_phn_p]);
  $dis_skype_p = addslashes($_POST[dis_skype_p]);
  
 
 

 
 

 

  



 





 







mysql_select_db("locprofile", $con);
 



// $sql = "DELETE FROM countrynatover WHERE address = ''  " ;
 

  $sql = "INSERT INTO  groupnatoverfilldistricts(name_group_pastor,adress_group_pastor,phn_group_pastor,email_group_pastor,skypeid_group_pastor ,tittle_filler,country,stat,region,group1,dis_add_ch,dis_em_ch,dis_phn_ch,dis_pob_ch,dis_skype_ch,dis_name_p,dis_add_p,dis_em_p,dis_phn_p,dis_skype_p,churchpics) VALUES
 ('$name_grp_p','$address_grp_p','$phn_grp_p','$email_grp_p','$skypeid_grp_p','Region Pastor','$count_pass','$stat_name','$reg_name','$grp_name' ,'$dis_add_ch','$dis_email_ch','$dis_phn_ch','$dis_pob_ch','$dis_skid_ch','$dis_name_p','$dis_add_p','$dis_em_p','$dis_phn_p','$dis_skype_p','$wolex') ";






 if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  
  $show_form=false;

//header('location:http://wolex2care.com');


}

else
    {
    // if(isset($_POST['Submit'])){
   

      header('location:http://wolex2care.com');
        echo "<center><p><font color = 'red'>You must atleast fill one country location<br></font></p></center>\n";
   $error_hash = $validator->GetErrors();
        foreach($error_hash as $inpname => $inp_err)
        {
           //echo "<center><p>$inpname : $inp_err</p></center>\n"; 
              
        }        
    }//else
//}

?>
