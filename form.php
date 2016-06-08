<html>
	<head>
	
	</head>
	
	<body>
		<?php
			$name = "";
      
      function test_data($data)
      {
        
      }
      
      if($_SERVER[REQUEST_METHOD] == "POST")
      {
        test_data($_POST["name"]);
      }
		?>	
    
    <form action="welcome.php" method="post">
			Name: <input type= "text" name="name">
			<input type="submit">
		</form>
    
    <?php
    
    ?>
	</body>
</html>
