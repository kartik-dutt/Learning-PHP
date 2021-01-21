<html>
  <head>
    <title>Intro to Form</title>
  </head>
  <body>
    <form action="post_forms.php?friend=kartik" method="post">
      Name : <input type="text" name="name">
      Age : <input type="text" name="age">
      <input type="submit">
    </form>
    </br>
    <?php
      if ($_POST["name"] != "" && $_POST["age"] != "") {
        echo $_POST["name"], " is ", $_POST["age"], " years old!</br>";
      }
      else if ($_POST["name"] != "" || $_POST["age"] != "") {
        echo "Enter all fields.</br>";
      }
      # Add this to url.
      if ($_GET["friend"] != "") {
        echo "</br> friends are : ", $_GET["friend"];
      }
    ?>
  </body>
</html>