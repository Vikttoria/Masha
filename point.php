
<?php
class Point {
   public  $x;
    public  $y;

    public function __construct( $x,  $y  ) {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
{
return $this->x ;
}
public function getY()
{
return $this->y ;
}
}
$point = new Point(5,2);
echo 'X = ';
echo $point->getX();
echo ', Y = ';
echo $point->getY();
/*
class User
	{
		private $name;
		private $age;
		
		
		public function __set($all, $value)
		{
			if ($name != '') { // проверяем имя на непустоту
				$this->name = $name;
			}
		}
		public function getAge()
		{
			return $this->age;
		}

		public function setAge($age)
		{
			if ($age >= 0 and $age <= 70) { // проверяем возраст
				$this->age = $age;
			}
		}
	}
  
    /*class City
    {
        public $name;
        public $pop;

        public function __construct($name, $pop)
        {
            $this->name = $name;
            $this->pop = $pop;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getPop()
        {
            return $this->pop;
        }
    }
    $all[] = new City ('dnepr', 10000);
    $all[] = new City ('Kiev', 50000);
    $all[] = new City ('Harov', 30000);
    $all[] = new City ('Mariupol', 40000);
    $all[] = new City ('Odessa', 70000);
    
    foreach($all as $key=>$value)
    {
        echo $value->getName().'-'.$value->getPop().'<br>';
        
    }
    */
    /*class User
    {
        public $name;
        public $surname;
        public $age;

        public function __construct($name,$surname,$age)
        {
            $this->name=$name;
            $this->surname=$surname;
            $this->age=$age;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getSurname()
        {
            return $this->surname;
        }
        public function getAge()
        {
            return $this->age;
        }
    }
    $a = new User('Lika','Uralova',25);
    echo $a->getName().'  '.$a->getSurname().'  '.$a->getAge();
*/
