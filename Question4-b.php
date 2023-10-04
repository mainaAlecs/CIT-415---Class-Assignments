<?php
class Validator {
//email validation
    public static function validateEmail($email){
//write a filter to validate email address
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;  //email is valid
        }  else{
            return false;  //email is not valid
        }
    }

//password validation
    public static function validatePassword($password){
        //let's get a password that is atleast 8 chars long
        if (strlen($password) < 8){
            return false;
        } 
        //let's make sure the password conttains at least one uppercase letter, one lowercase letter and a digit
        if(!preg_match('/[A-Z]/', $password) ||
           !preg_match('/[a-z]/', $password) ||
           !preg_match('/[0-9]/', $password)){
            return false;
          }else{

          return true;
          }

    }
// validate names
        public static function validateName($name){
//ensure name only contains alphabetic chars and spaces
            if(preg_match('/^[a-zA-Z ]+$/', $name)){
                return true;
            } else{
                return false;
            }
        }

//phone number validation
        public static function validatePhoneNumber($phonenumber){
//Ensure phone number is in a specific format (e.g, (+254) 7109-85315)
            if(preg_match('/^\(\d{3}\) \d{4}-\d{5}$/', $phonenumber)){
                return true;
            } else {
                return false;
            }
        }
    }

$email = "amlonwolf@gmail.com";
$password = "paSsw0rd123";
$name = "Maina Alex";
$phonenumber = "(254) 7109-85315";

if(Validator::validateEmail($email)){
    echo "Email: '{$email}' is valid .\n";
}else{
    echo "Email: '{$email}' is not valid .\n";
}

if(Validator::validatePassword($password)){
    echo "Password: '{$password}' is valid.\n";

} else {
 echo "Password: '{$password}' is not valid.\n";

}
if(Validator::validateName($name)){
    echo "Name: '{$name}' is valid .\n";

}else {
    echo "Name: '{$name}' is not valid .\n";
}
if(Validator::validatePhoneNumber($phonenumber)){
    echo "Phone Number: '{$phonenumber}' is valid.\n";

}else{
    echo "Phone Number: '{$phonenumber}' is not valid.\n";

}
?>
          