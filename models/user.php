<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of person
 *
 * @author Administrator
 */
class User {
    
    public $ID;
    public $name;
    public $aka;
    public $email;
    public $img;
    
    public $template = "user.inc.tpl.php";
    
    public static function getPerson($id){
        

        $params = array(':id' => $id);

        $query = DB::getDB()->prepare(' SELECT id, name, aka, email, img FROM user
                                        WHERE id = :id');
        $query->execute($params);
       
        $result = $query->fetchAll(PDO::FETCH_CLASS, "person");
        
        foreach($result as $user)
        {
            echo $user->name . "<br />";
            var_dump($user);

        }

    }
    
    
    public static function getAllPerson(){
        
        $query = DB::getDB()->prepare(' SELECT id, name, aka, email, img FROM user');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS, "User");
        
        return $result;
    }

    
}
