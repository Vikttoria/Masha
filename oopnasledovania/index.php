<?php
require_once __DIR__.'\Worker.php';
require_once __DIR__.'\Student.php';
require_once __DIR__.'\Driver.php';

$a = new Worker;
$a->setName('Vika');
echo $a->getName();
echo '<br>';
$a->setAge(25);
echo $a->getAge();
echo '<br>';
$a->setSalary(2300);
echo $a->getSalary();
echo '<br>';


$b = new Worker;
$b->setName('Vasia');
echo $b->getName();
echo '<br>';
$b->setAge(30);
echo $b->getAge();
echo '<br>';
$b->setSalary(20000);
echo $b->getSalary();


echo '<br>'.'сумма возрастов = ';
echo($a->getAge() + $b->getAge());
echo '<br>'.'сумма зарплат = ';
echo ($a->getSalary() + $b->getSalary());
echo '<br>'.'Student';

$c = new Student;
$c->setName('Vika');
echo $c->getName();
echo '<br>';
$c->setAge(25);
echo $c->getAge();
echo '<br>';
$c->setGrants(700);
echo $c->getGrants();
echo '<br>';
$c->setGroup('25-C');
echo $c->getGroup();
echo '<br>';

$d = new Driver;
$d->setName('Vasia');
echo $d->getName();
echo '<br>';
$d->setAge(30);
echo $d->getAge();
echo '<br>';
$d->setSalary(20000);
echo $d->getSalary();
echo '<br>';
$d->setExperience(5);
echo $d->getExperience();
echo '<br>';
$d->setCategory('A,B,C');
echo $d->getCategory();
echo '<br>';
