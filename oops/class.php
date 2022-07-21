
<?php
class Books {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$marvel = new Books();
$marvel->set_name("captian america");

echo $marvel->name;
?>
