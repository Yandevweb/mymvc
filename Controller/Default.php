<?php

/*
 * Controller par défaut
 */

class Controller_Default
{
	public function index(){
		$dbh = new Model_Dbh();
		$view = new Controller_View(array('default'));
		$view->display();
	}

	public function error(){
		$view = new Controller_View(array('error'));
		$view->display();
	}
}