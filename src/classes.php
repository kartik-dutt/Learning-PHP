<html>
  <head>
    <title>Intro to PHP</title>
  </head>
  <body>
    <?php
      class Book {
        var $author;
        private $pages;
        public $title;
        function __construct($name, $_pages, $_title) {
          $this->author = $name;
          $this->pages = $_pages;
          $this->title = $_title;
        }

        function prnt() {
          echo "Title : $this->title Author : $this->author Pages : $this->pages";
        }
      };

      function prnt($book) {
        echo "Title : $book->title Author : $book->author";
      };

      $book1 = new Book("Somebook", "100", "SomeTitle");
      $book1->prnt();

      class Library extends Book {
        // inheritance and overwriting.
        function prnt() {
          echo "Welcome to the library";
        }
      };
    ?>
  </body>
</html>
