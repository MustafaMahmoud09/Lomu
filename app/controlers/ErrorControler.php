<?php
namespace LOMU\controlers;
use LOMU\core\Controler;

//example
class ErrorControler extends Controler{

    function notFound(){
 
        $this->view('error'.DS.'notFound.php',[]);
 
    }//end notFound
}//end ErrorControler
?>