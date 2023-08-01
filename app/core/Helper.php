<?php
namespace LOMU\core;

class Helper{

    static function redirct($path){

     header("LOCATION: ".DOMINE.$path);

    }

}

?>