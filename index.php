<?php
//phpmotors controller

//Get the database connection file
require_once 'library/connections.php';
//Get the PHP Motors model for use as needed
require_once 'model/main-model.php';

// Create or access a Session
session_start();
//Get the array of classifications
$classifications = getClassifications();

/* var_dump($classifications);
exit; */

//Build a navigation bar usin the $classifications array

$navlist = '<ul>';
$navlist .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach($classifications as $classification){
    $navlist .= "<li><a href= '/phpmotors/index.php?action=" .urlencode($classification['classificationName']) . "' title = 'View our $classification[classificationName] product line'> $classification[classificationName]</a></li>";
}
$navlist .= '</ul>';

// Check if the firstname cookie exists, get its value
if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
   }

$action = filter_input(INPUT_POST, 'action');
    if($action == NULL){
        $action = filter_input(INPUT_GET , 'action');
    }

    switch($action){

        case 'something':

            break;

        default:
         include 'view/home.php';
         break;
        }
    

?>