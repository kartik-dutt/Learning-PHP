<html>
  <head>
    <title>Intro to Includes</title>
  </head>
  <body>
    <?php include "./includes/header.html" ?>
    <?php 
      $author = "Someone";
      include "./includes/fun.php";
    ?>
    <?php include "./includes/footer.html" ?>
  </body>
</html>