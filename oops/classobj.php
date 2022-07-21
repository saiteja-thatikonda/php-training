<?php
   class Mobile {
      
      var $price;
      var $title;

      function setPrice($par){
         $this->price = $par;
      }
      function getPrice(){
         echo $this->price ."<br/>";
      }
      function setName($par){
         $this->title = $par;
      }
      function getName(){
         echo $this->title ." <br/>";
      }
   }
$Samsung = new Mobile();
$Xiaomi = new Mobile();
$Iphone = new Mobile();
$Samsung->setName( "SamsungS8" );
$Iphone->setName( "Iphone7s" );
$Xiaomi->setName( "MI4" );
$Samsung->setPrice( 90000 );
$Iphone->setPrice( 65000 );
$Xiaomi->setPrice( 15000 );

$Samsung->getName();
$Iphone->getName();
$Xiaomi->getName();
$Samsung->getPrice();
$Iphone->getPrice();
$Xiaomi->getPrice();
?>
