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
        <?php
            include 'connectDB.php';
            $name = $_POST["user_name"];
            $email = $_POST["user_email"];
            $mobile = $_POST["owner_mobile"];
            $pass=md5($_POST["password"]);
            
            $check = $conn->query("SELECT * FROM owner WHERE email= '$email'");
            if($check->num_rows == 0){
                $sql = $conn->query("INSERT INTO owner(name, email,phone, pass) VALUES ('$name', '$email', '$mobile', '$pass')");
                if($sql == true){
                    echo "acc opened successfully & direct me for new page";
                }
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else{
                echo "you already have an account punha punha kay ahe?";    
            }
            
        ?>
    </body>
</html>
