<?php
session_start();
?>
<!DOCTYPE html>
<?php 
echo $_SESSION["email"];
?>
<html>
	<head>
	 <meta charset="UTF-8"></head>
	<body>
	<form name="isample" action="fileupload.php" enctype="multipart/form-data" method="post" onsubmit="return imgtype()">
		<input type="file" name="imgupload" id="imgupload">
		<input type="button" value="show extension" onclick="validateImage()"/>
		<input type="submit" name="submit" id="insert" value="submit">
	</form>
	<script language="javascript" type="text/javascript">
		function validateImage(){
		}
		function imgtype(){
			var filename=document.getElementById("imgupload").value;
			var show =filename.substring(filename.lastIndexOf('.')+1, filename.length) || filename;
			var valarray=["jpg","png","jpeg","bmp","gif"];
			if(filename==''){
				alert("select iamge first");
			}
			else{
				var i=valarray.length;
				while(i--)
				{
					if(valarray[i]==show){
						alert("found at"+i);
						return true;
					}
				}
				alert("invalid image type");
				return false;
			}
		}
	</script>
	</body>
	
</html>