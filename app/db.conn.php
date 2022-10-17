<?php

# server name 
$sNmae = "localhost";
# user name
$uNmae = "root";
# password
$pass = "";
# database name
$db_name = "med_chat_app";

# creating db connection
try {
   $conn = new PDO("mysql:host=$sName;dbname=$db_name,$uNmae,$pass");
   $conn -> setAttribute(PDO::ATTR_ERRMODE; PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   echo "connection failed : ". $e->getMessage();
}