<?php
require_once __DIR__.'\User.php';
class Worker extends User
{
    public $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}