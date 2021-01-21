<html>
  <head>
    <title>Variables in PHP</title>
  </head>
  <body>
    <?php
      $person = "Kartik";
      $age = 18;
      echo "<h1>Hello $person!</h1>";
      $person = "ABC.";
      echo "<p>You are $age old. Your name is not $person</p>";
      # Data types supported are int, double, boolean.
      $var1 = 12;
      $isOdd = $var1 & 1;
      echo "</br>$var1 is odd : $isOdd";
      $var1++;
      $isOdd = $var1 & 1;
      echo "</br>$var1 is odd : $isOdd";
      echo "</br>Sqrt of $var1 :", sqrt($var1), " square of $var1 :", pow($var1, 2);
      // Math functions.

      // Let's work with strings.
      $str = "This is the string we are playing with!";
      echo "</br> Original String : $str";
      echo "</br> Lower case : ", strtolower($str);
      echo "</br> Upper case : ", strtoupper($str);
      echo "</br> Length : ", strlen($str);
      echo "</br> First char : $str[1]";
      echo "</br> Replacing we with I : ", str_replace("we are", "I am", $str);
      echo "</br> Characters between 4 and 8 in string : ", substr($str, 4, 8);
    ?>
  </body>
</html>