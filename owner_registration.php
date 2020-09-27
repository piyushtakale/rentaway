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
			
        ?>
		.deg{
    	height:100%;
        width:100%;
        background:blue;
    }
        <form  method="post" action="register_owner.php" onsubmit="return validate_form()" name="reg_form">
            <lable for="user_name">Name</lable>
            <input type="text" name="user_name" /></br>
            <lable for="user_email">Email Id</lable>
            <input type="email" name="user_email" /></br>
            <lable for="owner_moble">
                phone number
                <span>optional</span>
            </lable>
            <input type="text" name="owner_mobile"></br>
            <lable for="password">password</lable>        
            <input type="password" name="password" onkeyup="check_status(this)"/></br>
            <span id="password_status"></span></br>
            <span>password must contain 8letters one capital ani ajun kay asel te</span></br>
            <lable for="confrim_password">confrim password</lable>
            <input type="password" name="confrim_password" /></br>
            <input type="submit" value="submit" name="submit"/>
        </form>
        <script>
            function check_status(pwd){
                var strength = document.getElementById('password_status');
                var strongRegex = new RegExp("(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W)", "g");
                var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
                var enoughRegex = new RegExp("(?=.{8,}).*", "g");
                if (false == enoughRegex.test(pwd.value)) {
                    strength.innerHTML = "More Characters";
                } else if (strongRegex.test(pwd.value)) {
                    strength.innerHTML = "strong";
                } else if (mediumRegex.test(pwd.value)) {
                    strength.innerHTML = "medium";
                } else { 
                    strength.innerHTML = "weak";
                 }
            }
            function validate_form(){
                if(document.forms["reg_form"]["user_name"].value != null && 
                    document.forms["reg_form"]["user_email"].value != null && document.forms["reg_form"]["password"].value == document.forms["reg_form"]["confrim_password"].value){
							if(document.getElementById("password_status").innerHTML == "strong" || document.getElementById("password_status").innerHTML == "medium" || document.getElementById("password_status").innerHTML == "weak"){
                    
								return true;
							}
							else{
								alert("filled all criteria")
								return false;
							}
                } else{
                    alert("filled all criteria")
                    return false;
                }
              
             }
           </script>
    </body>
</html>
