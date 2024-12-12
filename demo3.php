<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}


class Admin extends User
{

    public $level;

    public function __construct($name, $email, $level)
    {

        $this->level = $level;
        parent::__construct($name, $email);

    }

    public function login()
    {

        echo 'Admin' . $this->name . ' logged in';


    }

    public function getStatus()
    {
        echo $this->status;
    }


}

$admin1 = new Admin('Monkey D. Luffy', 'luffy@gmail.com', 5);

echo $admin1->name;
echo '<br>';
echo $admin1->email;
echo '<br>';
echo $admin1->level;
echo '<br>';
$admin1->login();
$admin1->getStatus();
echo '<br>';
$admin1->login();


?>