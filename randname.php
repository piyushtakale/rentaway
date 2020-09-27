<?php  
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
	function getName($n){
		global $characters;
		$randomString = "";
		for ($i = 0; $i <$n; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		} 
		echo $randomString;
		return $randomString; 
	} 
	
	
	function createFolder(){
	$file_pointer = getName(10);
        if (!file_exists("piyush/$file_pointer")) {
            mkdir("piyush/$file_pointer","0777");
        }
		else {
            echo "The file $file_pointer is already exists";
			return createFolder();
        }
	}
	createFolder();
		
?>