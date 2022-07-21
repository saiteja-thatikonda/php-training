<?php
class A {
    public function printItem($string) {
        echo ' Hi : ' . $string;
    }
    public function printPHP() {
        echo 'I am from valuebound' . PHP_EOL;
    }
}
class B extends A {
    public function printItem($string) {
        echo 'Hi: ' . $string . PHP_EOL;
    }
 public function printPHP() {
        echo "I am from I95dev";
    }
}
$a = new A();
$b = new B();
$a->printItem('Saiteja');
$a->printPHP();
echo "<br>";
$b->printItem('sriram');
$b->printPHP();
?>
