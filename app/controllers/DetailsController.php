<?php

/*
* Job Details Template
*/ 
class DetailsController extends Controller{
	public function __construct($controller, $method){
		parent::__construct($controller, $method);
	}
	public function indexAction(){
		$this->view->render('jobdetails/index');
	}
}