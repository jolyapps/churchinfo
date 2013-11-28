<?php
header("Last-Modified: ".gmdate('D,d M Y H:i:s')." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0",false);
header("pragma: no-cache");
?>

<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
    header('location:index.php');
}
?>

<?php 
require("include/database.php");
require_once("formvalidator.php");

$show_form=true;
 ?>




<?php



 if(isset($_POST['reg'])){



$disp_tit  = isset($_POST['name'])?$_POST['name']:''; 
$disp_name  = isset($_POST['tit'])?$_POST['tit']:'';  
$disp_pfno  = isset($_POST['address'])?$_POST['address']:''; 
$disp_pfno  = isset($_POST['phn'])?$_POST['phn']:''; 
$disp_pfno  = isset($_POST['email'])?$_POST['email']:''; 
$disp_pfno  = isset($_POST['skypeid'])?$_POST['skypeid']:''; 
$disp_pfno  = isset($_POST['country'])?$_POST['country']:''; 


 














$validator = new FormValidator();

    $validator->addValidation("name","req","Please fill in Surname");
    $validator->addValidation("tit","req","Please fill in other name");
    $validator->addValidation("address","req","the light of the world");
    $validator->addValidation("phn","req","the light of the world");
   //$validator->addValidation("Email","email","the light of the world");
    $validator->addValidation("skypeid","req","the light of the world");
    $validator->addValidation("country","req","the light of the world");
   
//Now, validate the form
    if($validator->ValidateForm())
    {





        //Validation success. 
        //Here we can proceed with processing the form 
        //(like sending email, saving to Database etc)
        // In this example, we just display a message

//$file   = addslashes($_POST[pics]); 
$name = addslashes($_POST[name]);
$title = addslashes($_POST[tit]);
$add = addslashes($_POST[address]);
$phone = addslashes($_POST[phn]);
$email=addslashes($_POST[email]);
$skype =addslashes($_POST[skypeid]);
$country = addslashes($_POST[country]);
 







mysql_select_db("locprofile", $con);
 $sql = "SELECT * FROM nationaloverseer WHERE sesid = '$ses_id'  ";
$result = mysql_query($sql);
$counter = mysql_num_rows($result);
 

 if ($counter ==1){ 

 $sql = "INSERT INTO nationaloverseer (name,tit,address,phn,email,skid,country,picture) VALUES
 //('$name','$title','$add','$phone','$email','$skype','$country' ,'$wolex') ";
  $sql = "UPDATE nationaloverseer SET name = '$name',  tit = '$title', 
  address = '{$add}', phn = '{$phone}', email = '{$email}',skid  = '{$skype}' , country  = '{$country}'

   WHERE sesid = '$ses_id'  ";

     
     

//$sql ="UPDATE nationaloverseer SET tit = '{$title}' WHERE sesid = '{$ses_id}' ";

   //  $sql ="UPDATE nationaloverseer SET address = '{$add}' WHERE sesid = '{$ses_id}' ";

    // $sql ="UPDATE nationaloverseer SET phn = '{$phone}' WHERE sesid = '{$ses_id}' ";

     //$sql ="UPDATE nationaloverseer SET email = '{$email}' WHERE sesid = '{$ses_id}' ";
    // $sql ="UPDATE nationaloverseer SET skid  = '{$skype}' WHERE sesid = '{$ses_id}' ";
     //$sql ="UPDATE nationaloverseer SET country  = '{$country}' WHERE sesid = '{$ses_id}' ";
 }
 

 
  
 






 if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  
  $show_form=false;

 
 header('location:churchreg.php?acc_key=true');


}

else
    {
    //  if(isset($_POST['Submit'])){
   

      header('location:index.php?log_tr=true');
        echo "<center><p><font color = 'red'>It eigther Exist B<br></font></p></center>\n";
   $error_hash = $validator->GetErrors();
        foreach($error_hash as $inpname => $inp_err)
        {
           //echo "<center><p>$inpname : $inp_err</p></center>\n"; 
              
        }        
    }//else
}

?>
