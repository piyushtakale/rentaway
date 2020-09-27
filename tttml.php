<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>tick tack toe</title>
        <style>
            .btns{
                height : 100px;
                width : 100px;
                cursor : pointer;
            }
        </style>
    </head>
    <body>
	        <?php
        for($i=0; $i<3; $i++){
            for($j=0; $j<3; $j++){
                echo '<button id="r'.$i.'c'. $j.'" class="btns" onclick="mark(this)">1 </button>';
            }
            echo "</br>";
        }
        ?>
		 <?php
                for($i=0; $i<3; $i++){
                    for($j=0; $j<3; $j++){
                        echo 'var v['.$i.']['.$j.'] = document.getElementById("r'.$i.'c'.$j.'").innerHTML; ';
                    }
                }
            ?>