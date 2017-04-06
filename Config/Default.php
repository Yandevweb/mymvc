<?php

class Config_Default
{
	// Définition des routes
	private $routes = array(
						'default' => array(
							'controller' => 'Controller_Default',
							'action'	 => 'index'
						),
						'contact' => array(
							'controller' => 'Controller_Contact',
							'action'     => 'index'
						),
						'contact/form' => array(
							'controller' => 'Controller_Contact',
							'action'     => 'form'
						)
	 	);

	public function getRoutes ()
	{
	    return $this->routes ;
	}
	 
	public function setRoutes ($routes )
	{
	    $this->routes  = $routes ;
	    return $this;
	}
}