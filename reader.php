<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
    header('location:index.php');
}
?>


<!DOCTYPE html>
<html>
<body>

<?php
$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
?>

</body>
</html>





//<?php

//$fh = fopen('1.txt','r');
//while ($line = fgets($fh)) {
  //echo $line ;
//}
//fclose($fh)
//?>