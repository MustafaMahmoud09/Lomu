<?php
namespace LOMU\models;
use Exception;
use LOMU\core\Model;
use PDO;

//example 
class UserModel extends Model{

    function login($email,$password){
    
       $query='SELECT * FROM `user` WHERE `email`=? AND `password`=?';
       $query= parent::connection()->prepare($query);
       $query->execute([$email,$password]);

       return $query->fetch(PDO::FETCH_ASSOC); 

    }//end login   
    function register($name,$email,$password){

         $query='INSERT INTO `user`(`name`, `email`, `password`) VALUES(?,?,?)';
        
         try{
        
         $query=parent::connection()->prepare($query);
         $query->execute([$name,$email,$password]);

         return true;
        }catch(Exception){

         return false;

        }
    }//end register
}//end UserModel
?>