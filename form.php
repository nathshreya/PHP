<html>
	<head>
		<style>
			.error
			{
				color = "pink";
			}
		</style>
	</head>
	
	<body>
		<?php
			$name = $mail = $num = $comment = $gen = "";
			$name_err = $mail_err = $num_err = "";
	
			function test_data($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(empty($_POST["name"]))
				{
					$name_err = "Name is required";
				}
				else
				{
					$name = test_data($_POST["name"]);	
					if(!preg_match("/^[A-Za-z]*$/",$name))
					{
						$name_err = "Only letters and white spaces are allowed.";
					}
				}

				if(empty($_POST["mail"]))
				{
					$mail_err = "Email ID is required";
				}
				else
				{
					$mail = test_data($_POST["mail"]);
					if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
					{
						$mail_err = "Invalid email address!";	
					}
				}
				
				if(empty($_POST["num"]))
				{
					$num_err = "Contact number is required";
				}
				else
				{
					$num = test_data($_POST["num"]);					
				}
			}

			if (isset($_POST['action']))
			{
				$comment = no_data($_POST["comment"]);
				$gen = no_data($_POST["gender"]);		
			}
			
			function no_data($data)
			{
				$data = test_data($_POST[$data]);
			}
		?>	
			
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			Name: <input type="text" name="name" value="<?php echo $name;?>"><span class="error"> * <?php echo $name_err;?></span><br /><br />
			Email ID: <input type="text" name="mail" value="<?php echo $mail;?>"><span class="error"> * <?php echo $mail_err;?></span><br /><br />
			Contact Number: <input type="number" name="num" value="<?php echo $num;?>"><span class="error"> * <?php echo $num_err;?></span><br /><br />
			Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><br /><br />
			Gender: 
			Female <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
			Male <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
			<br /><br /><br /><br />
			
			<input type="submit">
		</form>
		
		<h3>Your Input</h3><br />
			
		<?php
			echo $name;
			echo "<br/>";
			echo $mail;
			echo "<br/>";
			echo $num;
			echo "<br/>";
			echo $comment;
			echo "<br/>";
			echo $gen;
		?>
	</body>
</html>
