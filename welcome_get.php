<!DOCTYPE html>
<html>
  <head>
    Heading <?php require_once('header.php');?>
    
    Welcome to GET Response <?php echo $_GET["What's your name"]; ?><br>
Your email address is: <?php echo $_GET["What's your email?"]; ?>
  </head>
  
<body>

<a class="btn btn-primary" href="ending.php" role="button">to the last page</a>
</body>
</html>
