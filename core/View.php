<?php 

  /**
   *  View Main Class
   */
  class View{

  	protected $_head, $_body, $_siteTitle = SITE_TITLE, $_outputBuffer, $_layout = DEFAULT_LAYOUT;

  	public function __construct()
  	{
  		# code...
  	}

  	public function render($viewName){
//        if($data == true){
//            extract($data);
//        }
  		$viewAry = explode('/', $viewName);
  		$viewString = implode(DS, $viewAry);
  		if(file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php')){
        include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
        include(ROOT . DS . 'app'. DS . 'views' . DS . 'layouts' . DS . $this->_layout . '.php');
  		}else{
  			die('The view \"' . $viewString . '\" does not exists');
  		}
  	}

    public function content($type){
      if($type == 'head'){
        return $this->_head;
      }else if($type == 'body'){
        return $this->_body;
      }
      return false;
    }

    public function start($type){
      $this->_outputBuffer = $type;
      ob_start();
    }

    public function end(){
      if($this->_outputBuffer == 'head'){
        $this->_head = ob_get_clean();
      }elseif($this->_outputBuffer == 'body'){
        $this->_body = ob_get_clean();
      }else{
        die('You must first run your method');
      }
    }

    public function siteTitle(){
      return $this->_siteTitle;
    }

    public function setSiteTitle($title){
      return $this->_siteTitle = $title;
    }

    public function setLayout($path){
      return $this->_layout = $path;
    }
  }