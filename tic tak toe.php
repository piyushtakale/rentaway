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
                echo '<button id="r'.$i.'c'. $j.'" class="btns" onclick="mark(this)">xx</button>';
            }
            echo "</br>";
        }
        ?>
        
       <script>
        var user=0;
        function mark(source) {
            if(user%2==0){
                source.innerHTML = "X";
            } else {
                source.innerHTML = "O";
            }
            user++;
            source.disabled=true;
            alert(check());
        }
        function check(){
            <?php
                for($i=0; $i<3; $i++){
                    for($j=0; $j<3; $j++){
                        echo 'var v'.$i.''.$j.' = document.getElementById("r'.$i.'c'.$j.'").innerHTML; ';
                    }
                }
            ?>
            if(v00 == v01 && v01 == v02 && (v00 == "X" || v00 == 'O')){
                return true;
            }
            if(v10 == v11 && v11 == v12 && (v10 == "X" || v10 == 'O')){
                return true;
            }
            if(v20 == v21 && v21 == v22 && (v20 == "X" || v20 == 'O')){
                return true;
            }
            if(v00 == v10 && v10 == 20 && (v00 == "X" || v00 == 'O')){
                return true;
            }
            if(v01 == v11 && v11 == v21 && (v01 == "X" || v01 == 'O')){
                return true;
            }
            if(v02 == v12 && v12 == 22 && (v02 == "X" || v02 == 'O')){
                return true;
            }
            if(v00 == v11 && v11 == 22 && (v00 == "X" || v00 == 'O')){
                return true;
            }
            if(v02 == v11 && v11 == v20 && (v02 == "X" || v02 == 'O')){
                return true;
            }
            return false;
        }
</script>
    </body>
</html>
