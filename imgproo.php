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
	if(isset($_POST["insert"])){
		include 'connectDB.php';
		$image= $_POST["imgupload"];
		$sql = $conn->query("INSERT INTO testimg (images) VALUES('$image')");
			if($sql == true){
				echo "acc opened successfully & direct me for new page";
			}
			else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
?>
	</body>
</html>