<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body><br>
		
	</body>
</html>
<?php
	include "autogen.php";
	if(isset($_POST["submit"])){
		include "connectDB.php";
		echo $_SESSION["email"];
		$user=$_SESSION["email"];
		$file_name = $_FILES["imgupload"]["name"];
			echo "file name". $file_name ."<br>";
		$file_size =$_FILES["imgupload"]["size"];
			echo "file size". $file_size ."<br>";
		$file_tmp =$_FILES["imgupload"]["tmp_name"];
			echo "file tmp". $file_tmp ."<br>";
		$file_type=$_FILES["imgupload"]["type"];
			echo "file type". $file_type ."<br>";
		$file_explode=explode(".",$_FILES["imgupload"]["name"]);
		$file_ext=strtolower(end($file_explode));
		$i=1;
		$path="piyush/";
		while($i==1){
			$pa=getName(10);
			if(!file_exists("piyush/$pa")){
				$i=0;
			}
		}
		$imageName = "$pa." . pathinfo($_FILES['imgupload']['name'],PATHINFO_EXTENSION);
		if(move_uploaded_file($file_tmp,"$path".$imageName)==true){
			$sql = $conn->query("update owner set pathh='$path',imagename='$imageName' where email like '$user' ");
            if($sql == true){
                echo "zali bhai image upload party pahije ata";
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
		}
	}
	else{
		echo"please go back and select image";
	}
	
	echo '<img src="'.$path.$imageName.'">';
?>
