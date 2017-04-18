<?php

	if(isset($_POST["submit"])) {
		//reconocer si es un .csv
		$type = explode(".",$_FILES['file']['name']);
		if(strtolower(end($type)) == 'csv'){
			$target_file = "../csv/file.csv";
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		else
		{
			echo "no es csv";
		}
		
		die();
	}else{
		header('Location: /paygotest_usuario');
	}

?>