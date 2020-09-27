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
$imgcontent=addslashes(file_get_contents($image));

$server="localhost";
$username="root";
$password="";
$dbname="test";

$conn=new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql=$conn->query("INSERT INTO imgset(image) VALUES('$imgcontent')");
echo $sql;

