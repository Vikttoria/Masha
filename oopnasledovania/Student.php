<?php
require_once __DIR__.'\User.php';
class Student extends User
{
private $grants;
private $group;


public function setGrants($grants)
{
    $this->grants = $grants;
}

public function getGrants()
{
    return $this->grants;
}
 
public function setGroup($group)
{
    $this->group = $group;
}

public function getGroup()
{
    return $this->group;
}

}