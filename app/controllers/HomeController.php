<?php

class HomeController extends Controller{
	public function __construct($controller, $method){
		parent::__construct($controller, $method);
		$this->view->setLayout('default');
	}
	public function indexAction(){
		$this->view->render('home/index');
	}
}
