<?php

class User {
    
public $username = 'ryu';
public $email = 'ryu@thenetninja.co.uk';

public function __construct($username, $email) {
    $this->username = $username;
    $this->email = $email;
}

public function addFriend() {
    return "$this->username added a friend";
}

}

$userOne = new User("mario", "mario@thenetninja.co.uk");
$userTwo = new User("luigi", "luigi@thenetninja.co.uk");

echo $userOne->username . "<br>";
echo $userOne->addFriend() . "<br>";

echo $userTwo->username . "<br>";
echo $userTwo->addFriend() . "<br>";

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