<!DOCTYPE html>
<html>
  <head>
    Heading <?php require_once('header.php');?>
    
    
  </head>
  
<body>
Welcome to GET Response <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
</body>
  <html>
    <body>
      
<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
     
</form>
      
      
    </body>
    <html>
</html>
