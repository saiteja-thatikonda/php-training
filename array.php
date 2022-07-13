<?php
$bikes = array("RE", "Jawa", "Yamaha", "honda");
echo count($bikes). "<br>";
print_r($bikes). "<br>";

$arrlength = count($bikes);

for($x = 0; $x < $arrlength; $x++) {
  echo $bikes[$x];
  echo "<br>";
}



$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");
echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";
echo "John salary: ".$salary["John"]."<br/>";
echo "Kartik salary: ".$salary["Kartik"]."<br/>";


$size=array("Big","Medium","Short");
foreach( $size as $s )
{
  echo "Size is: $s<br />";
}



$emp = array
  (
  array(1,"sonoo",400000),
  array(2,"john",500000),
  array(3,"rahul",300000)
  );

for ($row = 0; $row < 3; $row++) {
  for ($col = 0; $col < 3; $col++) {
    echo $emp[$row][$col]."  ";
  }
  echo "<br/>";
}  

?>
