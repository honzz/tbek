<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//phpinfo();
//die();



require_once 'models/system/DB.php';
require_once 'models/system/render.php';
require_once 'models/einkauf.php';
require_once 'models/user.php';
require_once 'models/userTransaction.php';

define("PRJ_PATH", "./");



$allPersons = person::getAllPerson();

foreach ($allPersons as $person){
    
    echo $person->render();
    
}









//if ($stmt = $mysqli->prepare("SELECT District FROM City WHERE Name=?")) {
//
//    /* bind parameters for markers */
//    $stmt->bind_param("s", $city);
//
//    /* execute query */
//    $stmt->execute();
//
//    /* bind result variables */
//    $stmt->bind_result($district);
//
//    /* fetch value */
//    $stmt->fetch();
//
//    printf("%s is in district %s\n", $city, $district);
//
//    /* close statement */
//    $stmt->close();
//}





