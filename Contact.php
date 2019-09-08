<!DOCTYPE html>
<body>

<?php
if (isset($_POST['submitted'])) {
	$myfile = fopen("data.txt", "a+");
	$name = $_POST['name']. "\n";
	fwrite($myfile, $name);
	
	
		$title = $_POST['title']. "\n";
		fwrite($myfile, $title);
		
		
		$message = $_POST['message']. "\n";
		fwrite($myfile, $message);
		
		
		$email = $_POST['email']. "\n";
		fwrite($myfile, $email);
		fclose($myfile);
		
	}
	?>
		</body>
	</html>
