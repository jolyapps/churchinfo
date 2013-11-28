<?php
header("Expire: Mon, 26 jul 1997 05:05:00 GMT");
header("Last-Modified: ".gmdate('D,d M Y H:i:s')." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0",false);
header("pragma: no-cache");
?>
<?php 
$out = $_GET['log_out'];
if($out) {
session_start();
$_SESSION['log'] = 0;
unset($_SESSION['log']);
session_unset();
session_destroy();
header("Location: index.php?log_out=1");
exit();
}
?>

<?php 
function Authentication($uid,$pd) {

$conn = odbc_connect("php_dsn","","");
if($conn){
$query = "SELECT * FROM login WHERE uname='$uid' AND pwd='$pd' ";
$rs = odbc_exec($conn,$query);
if(!$rs) {
exit ("Error while connecting to database.");
}
if(odbc_fetch_row($rs)) {
session_start();
$_SESSION['log'] = 1;
$_SESSION['usr'] = $uid;
header("Location: welcome.php?log_id=".md5($uid)."&auth=yes");
}
else {
header("Location: index.php?log_tr=false");
}

}
odbc_close($conn);

}
?>
<?php
$user_id = $_POST['user_id'];
$pwd = $_POST['pwd'];
Authentication($user_id,$pwd);
?>

