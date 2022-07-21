<?php
class Animal
{
    public function __construct($animal_name)
    {
        $this->name =$animal_name;
    }
}

$animal = new Animal("Indian Tiger");
echo $animal->name;
?>
