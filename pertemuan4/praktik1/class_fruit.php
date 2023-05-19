<?php

    class Fruit {
        //property
        public $name;
        public $color;

        //method
        function getName() {
            return $this->name;
        }

        function getColor() {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $apple->name = "Apple";
    $apple->color = "Red";
    echo $apple->getName() . " " . $apple->getColor();

    echo "<br><br>";

    $banana = new Fruit();
    $banana->name = "Banana";
    $banana->color = "Yellow";
    echo $banana->getName();
    echo $banana->getColor();

?>