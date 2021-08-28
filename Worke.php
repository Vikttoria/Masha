<?php
class Worke
{
    private $name;
    private $age;
    public $salary;
    
  

    private function checkAge($age){
        return $age >= 1 && $age <= 100;
    }  
    
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name) 
    {
            $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    { 
        if($this->checkAge($age)){
        $this->age=$age;
    }
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setsalary($salary)
    {
        $this->salary=$salary;
    }
    
}

$a = new Worke();
$a->setName('Ivan'.",");
echo $a -> getName();
$a->setAge( 125);
echo $a-> getAge();
$a->setSalary(2500);
echo $a-> getSalary();

$b = new Worke();
$b->setName('Vania'.",");
echo $b -> getname();
$b->setAge(28);
echo $b-> getAge();
$b->setSalary(2590);
echo $b-> getSalary();
echo "<br>";
echo ($a->getAge() + $b->getAge());
?>