<?php
// can not be instantiated
// an abstract class will contain at least one abstract method though it is not required
// If a class contains one or more abstract methods, it must be an abstract class.
abstract class BankAccount {
    abstract public function getBalance($clientId);
    // abstract methods should be implemented in the chils classes
}

// is usually related with the factory design pattern
