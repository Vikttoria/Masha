<?php
class Worker 
{
    private $name;
    private $age;
    private $salary;

public function __construct($name,$age,$salary)
{
    $this->name = $name;
    //$this->age = $age;
    $this->setAge($age);
    $this->salary = $salary;
}
private function checkAge($age){
 return $age>=1 && $age <=100;
}
public function getName()
{
return $this->name ;
}

public function setAge($age){
    if($this->checkAge($age)){
        $this->age = $age;
    }
}

public function getAge(){
   // if(!$this->checkAge($age)) return false;
   return $this->age;// = $age;
   // return true;
}
public function getSalary(){
return $this->salary;
}
}

$a = new Worker('1) Name-Ivan,',50,1000);
echo $a->getName();
echo $a->getAge();
echo $a->getSalary();

$b = new Worker ('2) Name-Vasia,',130,2000);
echo $b->getName();
echo $b->getAge();
echo $b->getSalary();
echo "<br>";
echo($a->getSalary() + $b->getSalary());

?>