<?php 
require "Person.php";

// static methods and pro( class constant also) are accessible from the self:: inside the class
class Employee extends Person {
    
    public ?String $job = null;
    public static int $id = 0; // usually used in the singleton design pattern
 
    public function __construct(String $name,int $age,int $cin,?String $job)
    {
        parent::__construct($name,$age,$cin);
        $this->job = $job;
    }

    public function desc(): String {
        return $this->infos();
    }

    public static function test(): int 
    {
        return 0;
    }
}

$e = new Employee('aziz',12,5874,null);
echo $e->desc();
echo Employee::test();