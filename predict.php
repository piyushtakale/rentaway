<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$result=$_GET["result"];                  //getting result
if($result == "pending" ){
    $pos = $_GET["pos"]; //getting position
    session_start();
    $rem_pos=$_GET["user"];
    if($rem_pos == 0){
        $_SESSION["arr_no"]=0;
    } else {
        $_SESSION["arr_no"]++;
    }
        $_SESSION["arr"][$_SESSION["arr_no"]]=$pos;

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tttml";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die("connection error".$conn->connect_error);
        }
        $sql = "SELECT * FROM probo WHERE ";
        $i = 0;
        while($i <= $rem_pos){
            if($i != 0){
                $sql .= " AND ";
            }
            $values = $_SESSION["arr"][$i];
            $i++;
            $sql .= 'v' . $i .' = '.$values;
        }
        echo $sql.';';
    }
