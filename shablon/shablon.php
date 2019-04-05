<?php

class Content 
{
	private $vars;
	private $template;

	public function __construct($file)
	{
		$this->file = $file;
		$this->vars = [];
		$this->template = '';

	}

	public function set($name,$val)
	{
		$this->vars[$name] = $val;
	}

	public function outContent($file) 
	{
		$this->template = file_get_contents($file);

		foreach($this->vars as $key => $val) 
		{
			$this->template = str_replace($key, $val, $this->template); 	
		}
		echo $this->template;
	}
}
