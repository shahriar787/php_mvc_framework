<?php
class RegisterController extends Controller{
  private $_validation;
  public function __construct($controller, $action){
    parent::__construct($controller, $action);
    $this->load_model('Users');
    $this->_validation = new Validate();
    $this->view->setLayout('default');
  }

  public function loginAction(){
    if($_POST){
      $this->_validation->check($_POST, [
        'username' => [
          'display'  => 'Username',
          'required' => true
        ],
        'password' => [
          'display'  => 'Password',
          'required' => true
        ]
      ]);
      if($this->_validation->passed()){
        $user = $this->UsersModel->findByUsername($_POST['username']);
        if($user && password_verify(Input::get('password'), $user->password)){
          $remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true : false;
          $user->login($remember);
          Router::redirect('');
        }else{
          $this->_validation->addError("There is an error with your username or password");
        }
      }
    }
    $this->view->displayErrors = $this->_validation->displayErrors();
    $this->view->render('register/login');
  }

  public function logoutAction(){
    if(currentUser()){
      currentUser()->logout();
    }
    Router::redirect('register/login');
  }


  public function registerAction(){
    $posted_values = ['fname' => '','lname' => '','username' => '','email' => '','password' => '', 'confirm_password' => ''];

    if($_POST){
      $posted_values = posted_values($_POST);
      $this->_validation->check($_POST, [
        'fname' => [
          'display' => 'First Name',
          'required' => true
        ],
        'lname' => [
          'display' => 'Last Name',
          'required' => true
        ],
        'username' => [
          'display' => 'Username',
          'required' => true,
          'unique' => 'users',
          'min' => 6,
          'max' => 150
        ],
        'email' => [
          'display' => 'Email',
          'required' => true,
          'unique' => 'users',
          'max' => 150,
          'valid_email' => true
        ],
        'password' => [
          'display' => 'Password',
          'required' => true,
          'min' => 6
        ],
        'confirm_password' => [
          'display' => 'Confirm Password',
          'required' => true,
          'matches' => 'password'
        ]
      ]);

      if($this->_validation->passed()){
        $newUser = new Users();

        // Register New User Into Database
        $newUser->registerNewUser($_POST);

        // Redirect
        Router::redirect('register/login');
      }
    }

    $this->view->post = $posted_values;
    $this->view->displayErrors = $this->_validation->displayErrors();
    $this->view->render('register/register');
  }

}
