<html>
<head>
    <title>Intro to PHP</title>
  </head>
  <body>
    <?php
      # Simple function.
      function sayHi() {
        echo "Hello <br/>";
      }

      sayHi();

      function cube($num) {
        return $num * $num * $num;
      }

      // Ternary operator.
      echo "Cube of 178 :", cube(178);
      echo cube(178)&1 ? " Odd" : " Even"; 

      // switch case :
      switch (cube(178)&1) {
        case 0 : echo " Even</br>";
                 break;
        case 1 : echo " Odd </br>";
                  break;
      }
    ?>
  </body>
</html>