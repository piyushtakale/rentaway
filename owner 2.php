<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .takeimg{
                width:400px;
                height:400px;
                text-align: center;
                border:1px solid grey;
            }
            #file{
                display:none;
            }
            #photo{
                height:100%;
                width:100%;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form method="post" action="save_content 2.php" enctype="multipart/form-data">
            <input type="file" id="file" accept="image" name="photos" onchange="loadimg(event)">
            <label for="file">
                <div class="takeimg">
                    <img src="plusimge.jpeg" id="photo" alt="+ chi image">
                </div>
            </label>
            <input type="submit" name="submit">
        </form>
        <script>
            function loadimg(event){
                //var photo=document.getElementById('file').value;
                var reader=new FileReader();
                reader.onload=function(){
                    document.getElementById('photo').src=reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
    </body>
</html>
