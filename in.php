<?php
session_start();
if($_REQUEST['usr']=='dclm' && $_REQUEST['pswd']=='Deeperlife2013!'){
$_SESSION['usr'] = "dclm";
$_SESSION['pswd'] = "Deeperlife2013!";
header('location:welcome.php');
}
else{
header('location:index.php');
}
?>