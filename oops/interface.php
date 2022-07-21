

<?php
interface Animal {
  public function makeSound();
}

class Dog implements Animal {
  public function makeSound() {
    echo "Bow Bow ";
  }
}

$animal = new Dog();
$animal->makeSound();
?>
