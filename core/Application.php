<?php 

	class Application{
		public function __construct(){
			$this->_set_reporting();
			$this->_unregister_globals();
		}

		public function _set_reporting(){
            if(DEBUG){
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
            }else{
                error_reporting(0);
                ini_set('display_errors', 0);
                ini_set('log_errors', 1);
                ini_set('error_log' . ROOT . DS  . 'tmp' . DS . 'logs' . DS . 'errors.log');
            }
        }

        public function _unregister_globals(){
            if(ini_get('register_globals')){
                $globalAry = ['_SERVER', '_GET', '_POST', '_COOKIE', '_SESSION', '_REQUEST', '_ENV', '_FILES'];
                foreach ($globalAry as $g){
                    foreach ($GLOBALS[$g] as $k => $v){
                        if($GLOBALS[$g] === $v){
                            unset($GLOBALS[$k]);
                        }
                    }
                }
            }
        }
	}