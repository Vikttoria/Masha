<?php
require_once __DIR__.'\Worker.php';
class Driver extends Worker
{
    private $experience;
    private $category;

public function setExperience($experience)
   {
       $this->experience = $experience;
   }

public function getExperience()
   {
       return $this->experience;
   }

public function setCategory($category)
   {
       $this->category = $category;
   }

public function getCategory()
   {
       return $this->category;
   }
}