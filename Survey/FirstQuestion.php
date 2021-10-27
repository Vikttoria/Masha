<?php
class FirstQuestion{
    public $namevan;
    public $arrayvan;

public function __construct($namevan,$arrayvan)
{
    $this->namevan=$namevan;
    $this->arrayvan=$arrayvan;
}

public function getNamevan(){
    return $this->namevan;
}


public function getArrayvan(){
    return $this->arrayvan;
}
}