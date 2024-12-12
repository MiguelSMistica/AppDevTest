<?php

class User 
{
    //properties
    public $name;
    public $email;

    //constructor
    public function __construct($name, $email)
    {

        $this->name = $name;
        $this->email = $email;

    }

    //methods
    public function login()
    {

        echo $this->name .' The user login';

    }
    public function logemail()
    {

        echo $this->email .' The user email login';

    }

}

$user1 = new User('Monkey D. Luffy', 'monkey@gmail.com');  
$user1->login(); 
echo '<br>';
$user1->logemail(); 

echo '<br>';
echo '<br>';

$user2 = new User('Roronoa Zoro', 'roronoa@gmail.com');  
$user2->login(); 
echo '<br>';
$user2->logemail(); 


//$user2 = new User();


/*
//instantiate a new object
$user1 = new User();
$user1 -> name = 'Monkey D. Luffy';
$user1 -> email = 'monkey@gmail.com';

var_dump($user1);

echo '<br>';
echo '<br>';

$user1 -> login();

echo '<br>';
echo '<br>';

$user2 = new User();
$user2 -> name = 'Roronoa Zoro';
$user2 -> email = 'roronoa@gmail.com';

var_dump($user2);

echo '<br>';
echo '<br>';

echo $user2 -> name;
echo '<br>';
echo $user1 -> name;
*/
?>