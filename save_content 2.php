<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST["submit"])){
    $check= getimagesize($_FILES["photos"]["tmp_name"]);
    if($check!==false){
        echo "file is image";
    }
}
$image=$_FILES["photos"]["tmp_name"];
$imgcontent= addslashes(file_get_contents($image));
$content= str_split($imgcontent, 1000000);


$server="localhost";
$username="root";
$password="";
$dbname="test";

$conn=new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
for($i=0; $i<sizeof($content); $i++){
    $sql="INSERT INTO imgset(image) VALUES('$content[$i]')";
    $conn->query($sql);
}
echo $conn->error;

