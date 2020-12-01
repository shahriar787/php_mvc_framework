<?php 
/*
* Search Class
*/ 
class SearchController extends Controller{
	public function __construct($controller, $method){
		parent::__construct($controller, $method);
	}

	public function indexAction(){
		$this->view->render('search/search');
	}
}
