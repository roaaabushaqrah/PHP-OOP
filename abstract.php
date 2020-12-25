 <?php

abstract class Car {
    public $name;
    public $phone;


    
    public function __construct($name,$phone) {
      $this->name = $name;
      $this->phone = $phone;
    }
    abstract public function intro() : string; 
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name . $this->phone!"; 
  
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name . $this->phone!"; 
      return $this->phone;
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name . $this->phone!"; 
      return $this->phone;
    }
  }
  
  //Create objects from the child classes
 

  $audi = new audi("Audi","999");
  echo $audi->intro();
 

  echo "<br>";
  
  $volvo = new volvo("Volvo","999");
  echo $volvo->intro();
 
  echo "<br>";
  
  $citroen = new citroen("Citroen","999");
  echo $citroen->intro();

  ?>
   

