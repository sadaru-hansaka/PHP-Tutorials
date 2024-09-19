<?php
class Fruit {
  final public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
    
  }
}
?>

<!-- The final keyword can be used to prevent class inheritance or to prevent method overriding. -->