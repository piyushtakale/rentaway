<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$server="localhost";
$username="root";
$password="";
$dbname="test";

$image=null;

$conn=new mysqli($server, $username, $password, $dbname);
$result=$conn->query("SELECT * FROM imgset");
if($result->num_rows>0){
    while($data=$result->fetch_assoc()){
        
        $image .= $data['image'];
    }
}
//header("content-type: image/png");
$image = imagecreatefromstring($image); 

ob_start(); //You could also just output the $image via header() and bypass this buffer capture.
imagejpeg($image, null, 80);
$data = ob_get_contents();
ob_end_clean();
echo '<img src="data:image/jpg;base64,' .  base64_encode($data)  . '" />';
?>