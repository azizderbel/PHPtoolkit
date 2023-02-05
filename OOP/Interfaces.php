<?php


// An interface allows unrelated classes to 
// implement the same set of methods, regardless of 
// their positions in the class inheritance hierarchy.
// one interface could extensdother interfaces
interface Logger
{
	public function log($message);
}

class FileLogger implements Logger
{
	private $handle;

	private $logFile;

	public function __construct($filename, $mode = 'a')
	{
		$this->logFile = $filename;
		// open log file for append
		$this->handle = fopen($filename, $mode)
				or die('Could not open the log file');
	}

	public function log($message)
	{
		$message = date('F j, Y, g:i a') . ': ' . $message . "\n";
		fwrite($this->handle, $message);
	}

	public function __destruct()
	{
		if ($this->handle) {
			fclose($this->handle);
		}
	}
}