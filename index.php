<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//phpinfo();
//die();


$start_time = MICROTIME(TRUE);

//test
//test


require_once 'models/system/DB.php';
require_once 'models/system/re.php';
require_once 'models/einkauf.php';
require_once 'models/main.php';
require_once 'models/user.php';
require_once 'models/userTransaction.php';

define("PRJ_PATH",__DIR__);





$site = new Main();
echo $site->output;









$stop_time = MICROTIME(TRUE);
$time = $stop_time - $start_time;
echo "<br /><br />Runtime $time seconds.";








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





