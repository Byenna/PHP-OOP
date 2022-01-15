<?php

class User {
    
public $username;
private $email;

public function __construct($username, $email) {
    $this->username = $username;
    $this->email = $email;
}

public function addFriend() {
    return "$this->username added a friend";
}

//get email
public function getEmail() {
    return $this->email;
}


//set email
public function setEmail($email) {
    if(strpos($email, "@") > -1) {
       $this->email = $email; 
    }
    
}
}

class AdminUser extends User {

    public $level;

    public function __construct($username, $email, $level) {
        $this->level = $level;
        parent::__construct($username, $email);
    }


}

$userOne = new User("mario", "mario@thenetninja.co.uk");
$userTwo = new User("luigi", "luigi@thenetninja.co.uk");
$userThree = new AdminUser("yoshi", "yoshi@thenetninja.co.uk", 5);

echo $userThree->level . "<br>";
echo $userThree->getEmail() . "<br>";
echo $userThree->username . "<br>";


// $userOne->setEmail("byenna21@gmail.com");

// echo $userOne->getEmail() . "<br>";
// echo $userTwo->getEmail() . "<br>";


// print_r(get_class_methods('User'));
// print_r(get_class_vars('User'));




?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>PHP OOP</title>
</head>
<body>
    
</body>
</html>