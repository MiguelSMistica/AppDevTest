<?php
/*

Access Modifiers:

    public
    -> The property or method can be accessed from anywhere. 
    protected
    -> The property or method can be accessed from within the class OR the class the inherits the parent class
    private
    -? The property or method can be accessed ONLY within the class

*/

class User
{
  // Properties
  public $name;
  public $email;
  private $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  //getter method
  public function getStatus()
  {
    echo $this->status;
  }

  //setter method
  public function setStatus($status)
  {
    echo $this->status = $status;
  }




}

// Instantiate a new object
$user1 = new User('Monkey D. Luffy', 'monkey@gmail.com');

$user1->login();

$user2 = new User('Roronoa Zoro', 'roronoa@gmail.com');

$user2->login();



$user2->setStatus('inactive');
echo '<br>';
$user2->getStatus();




?>