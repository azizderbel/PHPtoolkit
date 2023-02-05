<?php

class Person {

    public $name;
    protected $age;
    private int $cin = 0000;


    public function __construct(String $name,int $age,int $cin) {

        $this->name = $name;
        $this->age = $age;
        $this->cin = $cin;

    }

    public function setCin(int $newCin): void 
    {
        $this->cin = $newCin;
    }

    public function getCin():int 
    {
        return $this->cin;
    }

    public function infos():String
    {
        return $this->name . (String)$this->age;
    }
}


//echo gettype($p); // Object