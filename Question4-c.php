<?php
class LibraryItem{
//properties    
    private $title;
    private $itemID;
    private $checkedOut;
    private $checkedIn;
//Let's use a constructor to initialize the properties    
    public function __construct($title, $itemID){
        $this->title = $title;
        $this->itemID = $itemID;
        $this->checkedOut = false;  //the item is initially not checked out
        $this->checkedIn = false;   //the item is initially not checked in
    }
//this method/s marks the item as checked out/in    
    public function checkOut(){
        $this->checkedOut = true;
    }
    public function checkIn(){
        $this->checkedIn = false;
    }

//this is a method to display the item details
    public function displayDetails(){
        echo "Title: $this->title  \n";
        echo "Item ID: $this->itemID    \n";
        echo "Status: " . ($this->checkedOut ? "Checked Out   \n" : "Available   \n");
        //echo "\n"; //add a new line after displaying details
    }
}
class Book extends LibraryItem {
    private $author;
    private $genre;

// a constructor for the BOOK class
    public function __construct($title, $itemID, $author, $genre){
        parent::__construct($title, $itemID);
        $this->author = $author;
        $this->genre = $genre;
    }
//this method displays the book details, it overrides the parent method for displaying details.
    public function displayDetails(){
        parent::displayDetails(); //here, we call the parent class method
        echo "Author: $this->author   \n";
        echo "Genre: $this->genre   \n";
        echo "\n"; //add a new line after displaying details
    }
}
class DVD extends LibraryItem{
    private $director;
    private $duration;

//this is a constructor for the DVD class
    public function __construct($title, $itemID, $director, $duration){
        parent::__construct($title, $itemID); // here, we call the parent constructor
        $this->director = $director;
        $this->duration = $duration;
    }
//method to display DVD details, it overrides the parent method    
}
class Student{
    private $name;
    private $RegNo;

//constructor for student class    

    public function __construct($name, $RegNo){
        $this->name = $name;
        $this->RegNo = $RegNo;
    }

//method to display student details
    public function displayDetails(){
        echo "Student Name: $this->name     \n";
        echo "Student RegNo: $this->RegNo    \n";
    }
}  

//usage
$book = new Book("Coding in PHP", 75, "K.Maina Alex", "Programming");
//$dvd = new DVD("Final Year", 0007, "Renish", "3hrs");
$student =new Student("Alex Maina", "CI/00075/018");

$book->checkOut();
//$dvd->checkOut();

$book->displayDetails() . "<\br";
//$dvd->displayDetails() . "<\br>";
$student->displayDetails() . "<\br";

//$book->checkIn();
//$dvd->checkIn();

//$book->displayDetails();
//$dvd->displayDetails();
?>
