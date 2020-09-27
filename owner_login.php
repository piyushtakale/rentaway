<?php
session_start();
?>
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
    </head>
    <body>
        
        <div>
            <form action="owner_login.php" method="post" name="log_form" onsubmit="return check()">
                <lable for="email"> email id </lable>
                <input name="email" type="email" />
                <lable for="password">password</lable>
                <input type="password" name="password"/>
                <span id="status_line"></span>
                <a href="forget_password">forget password</a>
                <a href="owner_registration.php">register</a>
                <input type="submit" name="submit">
            </form>
        </div>
        <script>
            function check(){
                if(document.form['log_form']['email'].value != null && document.form['log_form']['password'] != null){
                    return true;
                } else{
                    alert("plaese fill username & password");
                    return false;
                }
            }
        </script>
        <?php
            if(isset($_POST["submit"])==true){
                include 'connectDB.php';
                $email=$_POST["email"];
                $pass=md5($_POST["password"]);
                $retrive = $conn->query("SELECT * FROM owner WHERE email = '$email'");
                if($retrive->num_rows > 0){
                    while($row = $retrive->fetch_assoc()){
                        if($row["pass"]==$pass){
                            echo $row["name"]."is sucsessfully logined direct this page";
                            $_SESSION["email"]=$row["email"];
                            $_SESSION["name"]=$row["name"];
							echo $_SESSION["email"];
							header("Location: fileuploadd.php");
                        }
                        else{
                            echo "<script>"
                            .'document.getElementById("status_line").innerHTML="password is incorrect";'
                            . "</script>";
                        }
                    }
                } else{
                    echo "account not found";
                }
            }
        ?>
    </body>
</html>
