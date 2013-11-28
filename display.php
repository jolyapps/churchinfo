
<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
    header('location:index.php');
}
?>

<html>
<head>
<title>Church Location | Images</title>
<link rel='SHORTCUT ICON' href='http://dclmstream.s3.amazonaws.com/img/favicon.ico' type='image/x-icon'/>
</head>

<?php




 $con = mysql_connect("localhost","root","dclmict4Christ");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("locprofile", $con);


//mysql_select_db("locprofile", $con);
 $sql = " SELECT * FROM  nationaloverseer  " ;
 $result = mysql_query($sql);

while($row= mysql_fetch_array($result)){


//echo "<img src = im/$row[picture]  width = 100 height = 100/>";
//echo $row[name] ;

}


 if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  
  

 






 ?>
 <body>
 <div style="position:absolute; left: 114px; top: 49px; width: 1200px; height: 153px; margin-left:3px; text-indent: inherit">
 <?php 
 
echo "<center><h1>State Overseer<br></h1></center>";

 mysql_select_db("locprofile", $con);


//mysql_select_db("locprofile", $con);
 $sql = " SELECT * FROM    nationaloverseer " ;
 $result = mysql_query($sql);

while($row= mysql_fetch_array($result)){


echo "<img src = im/$row[picture]  width = 100 height = 100/ title ='Title : $row[tit]  Name : $row[name] of $row[stat]   '> ";

//echo  " $row[name] ";

}


 if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  

 
 ?>
 
 
 
 
 </div> 
 
  
 </body>
 
 </html>
 