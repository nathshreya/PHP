<html>
  <body>
    <?php
      $hostname;
      $username = "abc";
      $password = "falling";
      
      $db = new PDO($hostname, $username, $password,
        array("PDO::ATTR_EMULATE_PREPARES" => false,
        "PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION"));
      //$db -> setAttribute("PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION");
      
    ?>
  </body>
</html>
