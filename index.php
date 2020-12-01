<?php
/*
@ Header File
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// Load configuration and Helper functions
require(ROOT . DS . 'config' . DS . 'config.php');
require(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');


// Load Files
function autoload($className){
    if(file_exists(ROOT . DS. 'core'. DS . $className.'.php')){
        include(ROOT . DS. 'core'. DS . $className.'.php');
    }elseif(file_exists(ROOT . DS. 'app'. DS. 'controllers' .DS. $className.'.php')){
        include(ROOT . DS. 'app'. DS. 'controllers' . DS . $className.'.php');
    }elseif(file_exists(ROOT . DS. 'app'. DS. 'models' . DS . $className.'.php')){
        include(ROOT . DS. 'app'. DS. 'models' . DS . $className.'.php');
    }
}
spl_autoload_register('autoload');
session_start();
// Path Info
$url = isset($_SERVER['PATH_INFO']) ? explode('/', trim($_SERVER['PATH_INFO'], '/')) : [];


if(!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)){
  Users::loginUserFromCookie();
}

// Router
Router::route($url);
?>
