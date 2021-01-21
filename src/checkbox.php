<html>
  <head>
    <title> Checkboxes in PHP </title>
  </head>
  <body>
    <form action="checkbox.php" method="post">
        Apples : <input type="checkbox" name="fruits[]" value="apples">
        Oranges : <input type="checkbox" name="fruits[]" value="oranges">
        <input type="submit">
    </form>
    <?php 
      echo $_POST["fruits"][0];
    ?>
  </body>
</html>