<html>
  <head>
    <title>Intro to PHP</title>
  </head>
  <body>
    <?php
      $arr = array("Abc", 400, "Bgrh", "D");
      echo $arr[0], $arr[1];
      $arr[10] = "</br>This is weird!</br>";
      echo $arr[10], $arr[9];
      echo count($arr);
    ?>
  </body>
</html>