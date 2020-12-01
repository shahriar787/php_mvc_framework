<?php

class Controller extends Application{
	protected $_controller, $_method;
	public $view;
	public function __construct($controller, $method){
		$this->_controller = $controller;
		$this->_method = $method;
		$this->view = new View();
	}

	 protected function load_model($model){
	 	if(class_exists($model)){
	 		$this->{$model.'Model'} = new $model(strtolower($model));
	 	}
	 }

}
