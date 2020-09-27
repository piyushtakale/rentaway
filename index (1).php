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
        
       <script>
        var user=0;
		
		
        function mark(source) {
            if(user%2==0){
                source.innerHTML = 'X';
            } else {
                source.innerHTML = "O";
            }
            user++;
            source.disabled=true;
            check();
        }
        function check(){
            <?php
                for($i=0; $i<3; $i++){
                    for($j=0; $j<3; $j++){
                        echo 'v['.$i.']['.$j.'] = document.getElementById("r'.$i.'c'.$j.'").innerHTML; '; 
                    }
                }
            ?>
            if(v[0][0] == v[0][1] && v[0][1] == v[0][2] && (v[0][0] == 'X' || v[0][0] == 'O')){
                alert(true);
            }
			if(v[1][0] == v[1][1] && v[1][1] == v[1][2] && (v[1][0] == 'X' || v[1][0] == 'O')){
                alert(true);
            }
			if(v[2][0] == v[2][1] && v[2][1] == v[2][2] && (v[2][0] == 'X' || v[2][0] == 'O')){
                alert(true);
            }
			if(v[0][0] == v[1][0] && v[1][0] == v[2][0] && (v[0][0] == 'X' || v[0][0] == 'O')){
                alert(true);
            }
			if(v[0][1] == v[1][1] && v[1][1] == v[2][1] && (v[0][1] == 'X' || v[0][1] == 'O')){
                alert(true);
            }
			if(v[0][2] == v[1][2] && v[1][2] == v[2][2] && (v[0][2] == 'X' || v[0][2] == 'O')){
                alert(true);
            }
			if(v[0][0] == v[1][1] && v[1][1] == v[2][2] && (v[0][0] == 'X' || v[0][0] == 'O')){
                alert(true);
            }
			if(v[0][2] == v[1][1] && v[1][1] == v[2][0] && (v[0][2] == 'X' || v[0][2] == 'O')){
                alert(true);
				
            }
			
			
			
			return false;
			
			
        }
		<?php
		for($i=0; $i<3; $i++){
                    for($j=0; $j<3; $j++){
                        echo v[$i][$j]; 
                    }
					
                }?>
</script>
    </body>
</html>
