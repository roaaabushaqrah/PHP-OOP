<?php




      class student{
        public $ID;
        public $name;
        public $phone;
        public $email;
    
      
        function __construct($ID,$name,$email,$phone) {
          $this->name = $name;
          $this->ID = $ID;
          $this->phone = $phone;
          $this->email = $email;
        }
        function get_name() {
          return $this->name;
        }
        function get_ID() {
            return $this->ID;
          }

          function get_email() {
            return $this->email;
          }
          function get_phone() {
            return $this->phone;
          }
      }
      
      



$students=new student ("1236","sara","sara@orange.com name",'077 777777777777');

echo "id: " .  $students->get_ID() ;  
echo "<br>";
echo "email: " .  $students->get_email()  ;
echo "<br>";
echo"name:". $students->get_name() ; 
echo "<br>";
echo "mobile_number: " . $students->get_phone(); 
echo "<br>";
 class Teacher extends student{


    public $salary;
 
    function __construct($ID,$name,$email,$phone,$salary) {
        $this->name = $name;
        $this->ID = $ID;
        $this->phone = $phone;
        $this->email = $email;
        $this->salary = $salary;
         


    }
    function get_salary() {
        return $this->salary;
      }
      
    
      }


      
$techers=new Teacher ("96432","Sadi","Sadi@orange.com" ,'0777788888',"300JD");

echo "id: " .  $techers->get_ID() ;  
echo "<br>";
echo "email: " .  $techers->get_email()  ;
echo "<br>";
echo"name:". $techers->get_name() ; 
echo "<br>";
echo "mobile_number: " . $techers->get_phone(); 
echo "<br>";
echo "salary: " . $techers->get_salary(); 

