<?php
//Connecting To Database
//i am connecting to localhost
@$Connection = mysql_pconnect('localhost','root','dclmict4Christ'); /// The mercyware123 is my own mysql password. 
                                                                    //Please Remove if you do not have a password or change to your own password
If (!$Connection){
 Echo "Unable To Connect To Database. Please Check  Database Connection";
 exit;
}
  
  
  //Creating the database for to be used . The database would be automatically created. you dont have to create it
 $Query = "CREATE DATABASE IF NOT EXISTS locprofile";
 $result = mysql_query($Query);
 if (!$result){
 echo "Unable To Connect To The Required Database For Operation";
 exit;
 }
 
 //Selecting The Database;
 mysql_select_db('locprofile');
     $Query = "CREATE TABLE IF NOT EXISTS national_overseer( id int primary key auto_increment, name text(500),tit text(200), add text(10000), phn text(10000), email text(10000), skid text(10000), country text(10000))";
       $result = mysql_query($Query); 
   $Query = "CREATE TABLE IF NOT EXISTS state_overseer( id int primary key auto_increment, name text(500), tit text(200), add text(10000), phn text(10000), email text(10000), skid text(10000), country text(10000))";
       $result = mysql_query($Query); 
   
  $Query = "CREATE TABLE IF NOT EXISTS regional_overseer( id int primary key auto_increment, name text(500),tit text(200), add text(10000), phn text(10000), email text(10000), skid text(10000), country text(10000))";
       $result = mysql_query($Query); 



$Query = "CREATE TABLE IF NOT EXISTS localgov( id int primary key auto_increment, name text(500),tit text(200), add text(10000), phn text(10000), email text(10000), skid text(10000), country text(10000))";
       $result = mysql_query($Query); 


$Query = "CREATE TABLE IF NOT EXISTS oldgrppastor( id int primary key auto_increment, name text(500),tit text(200), add text(10000), phn text(10000), email text(10000), skid text(10000), country text(10000))";
       $result = mysql_query($Query); 

$Query = "CREATE TABLE IF NOT EXISTS grppastor( id int primary key auto_increment, name text(500),tit text(200), add text(10000), phn text(10000), email text(10000), skid text(10000), country text(10000))";
       $result = mysql_query($Query); 

$Query = "CREATE TABLE IF NOT EXISTS districtpastor( id int primary key auto_increment, name text(500),tit text(200), add text(10000), phn text(10000), email text(10000), skid text(10000), country text(10000))";
       $result = mysql_query($Query); 


$Query = "CREATE TABLE IF NOT EXISTS locationpastor( id int primary key auto_increment, name text(500),tit text(200), add text(10000), phn text(10000), email text(10000), skid text(10000), country text(10000))";
       $result = mysql_query($Query); 





$Query = "CREATE TABLE IF NOT EXISTS countrynatover( id int primary key auto_increment, country text(500),stat text(200), add text(10000), pob text(10000), pstnme text(10000), skid text(10000), email text(10000))";
       $result = mysql_query($Query); 

$Query = "CREATE TABLE IF NOT EXISTS countrystatover( id int primary key auto_increment, country text(500),stat text(200), add text(10000), pob text(10000), pstnme text(10000), skid text(10000), email text(10000))";
       $result = mysql_query($Query); 
       
 
$Query = "CREATE TABLE IF NOT EXISTS countryregover( id int primary key auto_increment, country text(500),stat text(200), add text(10000), pob text(10000), pstnme text(10000), skid text(10000), email text(10000))";
       $result = mysql_query($Query); 
      

$Query = "CREATE TABLE IF NOT EXISTS countrylocover( id int primary key auto_increment, country text(500),stat text(200), add text(10000), pob text(10000), pstnme text(10000), skid text(10000), email text(10000))";
       $result = mysql_query($Query); 

$Query = "CREATE TABLE IF NOT EXISTS countroldgrp( id int primary key auto_increment, country text(500),stat text(200), add text(10000), pob text(10000), pstnme text(10000), skid text(10000), email text(10000))";
       $result = mysql_query($Query);  

$Query = "CREATE TABLE IF NOT EXISTS countrgrp( id int primary key auto_increment, country text(500),stat text(200), add text(10000), pob text(10000), pstnme text(10000), skid text(10000), email text(10000))";
       $result = mysql_query($Query);  


$Query = "CREATE TABLE IF NOT EXISTS countrdist( id int primary key auto_increment, country text(500),stat text(200), add text(10000), pob text(10000), pstnme text(10000), skid text(10000), email text(10000))";
       $result = mysql_query($Query);  

$Query = "CREATE TABLE IF NOT EXISTS countryloc( id int primary key auto_increment, country text(500),stat text(200), add text(10000), pob text(10000), pstnme text(10000), skid text(10000), email text(10000))";
       $result = mysql_query($Query); 









   
 //Creating The Necessary Tables for Saving, Manipulating and retrival of information
  //*************** Creating The Sign _Up Table
  
   $Query= "CREATE TABLE IF NOT EXISTS Admin (id int primary key auto_increment, Username varchar(100), Password varchar(100))";
     $result = mysql_query($Query); 
   $Query = "SELECT * FROM Admin";
   $result = mysql_query($Query);
   $counter = mysql_num_rows($result);
   if ($Counter == 0){
    $Query = "INSERT INTO Admin (Username,Password) VALUES ('grop','admin')";
    mysql_query($Query);
   
   }
?>
