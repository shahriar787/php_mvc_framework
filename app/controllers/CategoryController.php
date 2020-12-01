<?php 

class CategoryController extends Controller{
	public function __construct($controller, $method){
		parent::__construct($controller, $method);
//		$this->view->setLayout('default');
	}

	public function indexAction(){
//		$this->view->render('register/register');
	}

	public function catListAction(){
	    $data = array();
        $categoriesModel = $this->load_model('Categories');
        $data['cat'] = $categoriesModel->foodAction();
        $this->view->render('category/category', $data);
    }
}