<?php

class Controller_Contact
{
	public $result = array();

	public function index(){

		$view = new Controller_View(array('Contact/Contact'));
		$view->display();
	}

	public function form(){

		if (isset($_POST['happy']) && !empty($_POST['happy'])){
			if ($_POST['happy'] == 'oui'){
				$this->result['happy'] = 'Hey tu es content ! :D';
			} else if ($_POST['happy'] == "non"){
				$this->result['happy'] = 'Pas cool.. :(';
			}
		} else {
			$this->result['happy'] = "Tu pourrais répondre !";
		}

		$view = new Controller_View(array('Contact/Form'));
		$view->setContent($this->result);
		$view->display();
	}
}