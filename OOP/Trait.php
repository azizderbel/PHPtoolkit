<?php

// trait promotes code reuseability as inheritance does
// However, inheritance makes the code very tightly coupled. 
// Therefore, overuse of inheritance may cause the code very hard to maintain.
// raits composition is supported (  a trait use another trait)
trait Logger
{
	public function log($msg)
	{
		echo '<pre>';
		echo date('Y-m-d h:i:s') . ':' . '(' . __CLASS__ . ') ' . $msg . '<br/>';
		echo '</pre>';
	}
}

class BankAccount
{
	use Logger;

	private $accountNumber;

	public function __construct($accountNumber)
	{
		$this->accountNumber = $accountNumber;
		$this->log("A new $accountNumber bank account created");
	}
}