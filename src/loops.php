<html>
  <head>
    <title>Loops in PHP</title>
  </head>
  <body>
    <?php
      $index = 1;
      while ($index <= 5) {
        echo "$index <br>";
        $index++;
      }

      do {
        echo "$index <br>";
        $index--;
      } while ($index >= 1);

      for ($i = 1; $i <= 5; $i++) {
        echo $i;
      }
    ?>
  </body>
</html>