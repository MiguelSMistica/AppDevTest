<?php
//abstract class

abstract class Shape
{
    protected $name;
    abstract public function calculateArea();

    //constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    //concrete method
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    //Implement the abstract method to calculate area for a circle
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    //implement abstract method to calculate area for a rectangle

    public function calculateArea()
    {
        return $this->width * $this->height;
    }



}




//create instances of connect classes
$circle = new Circle('Circle', 5);
//call methods on object
echo $circle -> getName() . ' Area is ' . $circle->calculateArea() . '<br>';

$rectangle = new Rectangle('Rectangle', 4, 6);
echo $rectangle -> getName() . ' Area is ' . $rectangle->calculateArea() . '<br>';
?>