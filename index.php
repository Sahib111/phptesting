<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Add text to image by using PHP</title>
	</head>
	<body>
	
		<?php
    
			//check if method is post
			if($_POST){
				
				//get username
				$user_name = $_POST['user_name'];


				//show the user text on image
				echo '<img src="img.php?user='.$user_name.'">';

			}else{
				echo '<img src="img.php">';
			}
		?>

		<form action="index.php" method="post">
			<input type="text" name="user_name">
			<button type="submit">Set Name</button>
		</form>
		
	</body>
</html>
