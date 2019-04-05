<?php

class content 
{
	var $vars = array();
	var $content = '';

	function set($name,$val)
	{
		$this->vars[$name] = $val;
	}

	//Обработка и вывод контента
	function out_content($tpl) 
	{
		$this->content = file_get_contents($tpl);

		//Из массива нужно взять ключ
		foreach($this->vars as $key => $val) 
		{
			$this->content = str_replace($key, $val, $this->content); //ключ меняем на знач переменной контент		
		}
		echo $this->content;
	}
}

$content = new content();
?>