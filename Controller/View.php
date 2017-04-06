<?php

/*
 * Controller de vue
 */

class Controller_View
{
	private $content = array();
	private $parts   = array();
	private $path;

	public function __construct($partials){
		$this->parts = $partials;
	}

	public function getContent()
	{
	    return $this->content;
	}
	 
	public function setContent($content)
	{
		$this->content = array_merge($this->content, $content);
		return $this->content;
	}

	public function getParts()
	{
		foreach ($this->parts as $part){
			require_once $_SERVER['DOCUMENT_ROOT'] . "/View/" . ucfirst($part) . '.php';
		}
	}
	 
	public function setParts($parts)
	{
		$result = array_merge($this->parts, $parts);
		return $result;
	}

	public function display()
	{
		require_once $_SERVER['DOCUMENT_ROOT'] . "/View/Layout.php";
		return $this;
	}
}