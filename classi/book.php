<?php 

class Book {
    // ATTRIBUTI
    private $id;
    public $title;
    public $author;
    public $year;
    public $publishingHouse;
    public $description;
    // constructor
    public function __construct($bookTitle, $bookAuthor) {
        $this->title = $bookTitle;
        $this->author = $bookAuthor;
    }

    //METODI
    public function setId($_id) {
        if(!empty($_id)){
            $this->id = $_id;
        }
    }
    public function getId(){
      return $this->id;
    }
    public function abstract($max = 40) {
        $abstract = substr($this->description, 0, $max)."...";
        return $abstract;
    }
}

?>