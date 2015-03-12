<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author Administrator
 */

class DB  {
   
    static private $db; 
    
    static function getDB(){
           
        if ( ! self::$db instanceof PDO){
            
            $mysql = new PDO("mysql:host=localhost;dbname=mydb", 'root', '123123');
            /* check connection */
            
            return self::$db = $mysql;
        }else{
            return self::$db;
        }
    }
    
}