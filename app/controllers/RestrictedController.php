<?php

class RestrictedController extends Controller {

  public function __construct($controller, $method){
    parent::__construct($controller, $method);
  }

  public function indexAction(){
    $this->view->render('restricted/index');
  }
}
