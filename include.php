<!DOCTYPE html>
<html>
  <head>
    <title>Include Example</title>
  </head>
  <body>
    <h1>Welcome to Sam's Used Cars.</h1>
    <!-- Uses include statement to get code from variable.php and prints out statement -->
    <?php include "variable.php";
      echo "I have a $color $pet";
    ?>
  </body>
</html>
