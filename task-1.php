<?php 
class Shape{
    protected $color;
    public function __construct($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
    public function getArea(){
        throw new Exception("You must implement the getArea method");
    }
}

class Circle extends Shape{
    private $radius;

    public function __construct($color, $radius){
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getRadius(){
        return $this->radius;
    }
    public function getArea(){
        return pi() * $this->radius * $this->radius;
    }
}
    class Rectangle extends Shape{
        private $length;
        private $width;
        public function __construct($color, $length, $width){
            parent::__construct($color);
            $this->length = $length;
            $this->width = $width;
        }

        public function getLength(){
            return $this->length;
        }

        public function getWidth(){
            return $this->width;
        }
        public function getArea(){
            return $this->length * $this->width;
        }
}

echo "=========Circle==========" . "\n";
//Create a Circle object
$circle = new Circle("red", 5);
echo "Circle Color: " . $circle->getColor() . "\n";
echo "Circle Radius: " . $circle->getRadius() . "\n";
echo "Circle Area: " . $circle->getArea() . "\n";

echo "\n";
echo "=========Rectangle==========" . "\n";
//Create a Rectangle object
$rectangle = new Rectangle("blue", 5, 10);
echo "Rectangle Color: " . $rectangle->getColor() . "\n";
echo "Rectangle Length: " . $rectangle->getLength() . "\n";
echo "Rectangle Width: " . $rectangle->getWidth() . "\n";
echo "Rectangle Area: " . $rectangle->getArea() . "\n";
?>