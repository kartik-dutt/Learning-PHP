<html>
  <head>
    <title>Intro to Form</title>
  </head>
  <body>
    <form action="get_forms.php" method="get">
      Name : <input type="text" name="name">
      Age : <input type="text" name="age">
      <input type="submit">
    </form>
    </br>
    <?php
      if ($_GET["name"] != "" && $_GET["age"] != "") {
        echo $_GET["name"], " is ", $_GET["age"], " years old!</br>";
      }
      else if ($_GET["name"] != "" || $_GET["age"] != "") {
        echo "Enter all fields.</br>";
      }
      # Add this to url.
      if ($_GET["friend"] != "") {
        echo "</br> friends are : ", $_GET["friend"];
      }
    ?>
  </body>
</html>