<?php

use LOMU\core\App;

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("VENDOR",ROOT.DS.'vendor');
define("CONTROLERS",APP.DS.'controlers');
define("CORE",APP.DS.'core');
define("MODELS",APP.DS.'models');
define("VIEWS",APP.DS.'views');

//config
//value example
define('USERNAME','root');
define('PASSWORD','');
define('HOST','localhost');
define('DBNAME','login_mvc');
define('DNS','mysql:host='.HOST.';dbname='.DBNAME);
define("DOMINE","http://localhost/MVC_SUMMARY_Login/public/");


require_once VENDOR.DS.'autoload.php';

$objApp=new App();
?>