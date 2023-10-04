<?php    
class Person{
    //properties
    public $name;
    public $age;
    //methods
    function __construct($name, $age){
        $this ->name = $name;
        $this ->age = $age;
    }

    function get_name(){
        return $this ->name ."\n";
    }
    function get_age(){
        return $this ->age ."\age";
    }

}
class Employee extends Person{  
    //properties
 public $contact;
 public $Id_no;
 public $position;

    //methods
    function __construct($name, $age, $contact, $Id_no, $position) {
        $this ->name = $name;
        $this ->contact = $contact;
        $this ->Id_no = $Id_no;
        $this ->position= $position;
    }    
    function get_name(){
        return $this ->name ."\n";
    }
}
class Student extends Person{
    private string $year_of_study;
    private string $reg_no;
    function __construct($name, $age, $reg_no, $year_of_study){
        $this ->name = $name;
        $this ->age = $age;
        $this ->reg_no = $reg_no;
        $this ->year_of_study = $year_of_study;
    }

    function get_name(){
        return $this ->name;
    }
    function get_reg_no(){
        return $this ->reg_no;
    }
   
     function message(){
     echo "Hi!, My Name is Maina Alex.I am a 4th Year IT Student in Maseno Univesity\n";
     }
   
    }
    $Maina = new Student("Maina", "23yrs","CI/00075/018", "Year 4");
    $Maina -> message();
    echo $Maina ->get_reg_no() ."\n";
    echo $Maina ->get_name() ."\n";
 ?>
