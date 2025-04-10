<?php
class Book {
    private $title;
    private $author;
    private $isBorrowed;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->isBorrowed = false;
    }

    public function borrow() {
        if (!$this->isBorrowed) {
            $this->isBorrowed = true;
            echo "{$this->title} has been borrowed. <br/>";
        } else {
            echo "{$this->title} is already borrowed. <br/>";
        }
    }

    public function returnBook() {
        if ($this->isBorrowed) {
            $this->isBorrowed = false;
        }
    }

    public function getStatus() {
        if ($this->isBorrowed) {
            return "Borrowed";
        } else {
            return "Available";
        }
    }

    public function getTitle() {
        return $this->title;
    }
}
class Library {
   private $books = [];

   public function addBook(Book $book) {
       $this->books[] = $book;
   }

   public function listBooks() {
       foreach ($this->books as $book) {
           echo ($book->getTitle() . "-" . $book->getStatus() . "<br/>");
         }
      }

}
  

      $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
      $book2 = new Book("1984","George Orwell");

      $library = new Library();

      $library->addBook($book1);
      $library->addBook($book2);

      $book1->borrow();

      echo("<br>Status<br/>");
      $library->listBooks();

      $book1->returnBook();
      echo("<br>After returning the book:<br/>");

      $library->listBooks();


?>