<?php

class User {
    
public $username;
protected $email;
public $role = "member";

public function __construct($username, $email) {
    $this->username = $username;
    $this->email = $email;
}




public function addFriend() {
    return "$this->username added a friend";
}



public function message() {
    return "$this->email . send a new message";
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

public function __clone() {
    echo "This user $this->username is a clone <br>";
    
}
}

class AdminUser extends User {

    public $level;
    // public $role = "admin";

    public function __construct($username, $email, $level) {
        $this->level = $level;
        parent::__construct($username, $email);
    }

    public function message() {
        return "$this->email . an admin, send a new message";
    }


}

$userOne = new User("mario", "mario@thenetninja.co.uk");
$userTwo = new User("luigi", "luigi@thenetninja.co.uk");
$userThree = new AdminUser("yoshi", "yoshi@thenetninja.co.uk", 5);

$userFour = clone $userOne;
echo $userOne->username . "<br>";
echo $userFour->username . "<br>";
// echo $userThree->role . "<br>";

// echo $userOne->message() . "<br>";
// echo $userThree->message() . "<br>";





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