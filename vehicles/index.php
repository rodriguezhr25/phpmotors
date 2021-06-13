<?php
//phpmotors controller

//Get the database connection file
require_once '../library/connections.php';
//Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
//Get the vechicle model
require_once '../model/vehicle-model.php';

// Create or access a Session
session_start();
//Get the array of classifications
$classifications = getClassifications();
// Get the functions library
require_once '../library/functions.php';
/* var_dump($classifications);
exit; */



$navlist = buildNavigation($classifications);
/* //Build the select list
$selectList  = "<select id='classificationId' name='classificationId'>";
foreach($classifications as $classification){
    $selectList .= "<option value=$classification[classificationId]>$classification[classificationName]</option>";
}
$selectList .= '</select>'; */

    $action = filter_input(INPUT_POST, 'action');
    if($action == NULL){
        $action = filter_input(INPUT_GET , 'action');
    }

    switch($action){

      
        case 'register':
                // Filter and store the data

            if ($_SESSION['loggedin'] && $_SESSION['clientData']['clientLevel'] > 1) {       
                 
              $classificationId = trim(filter_input(INPUT_POST, 'classificationId' , FILTER_SANITIZE_NUMBER_INT));
              $invMake = trim(filter_input(INPUT_POST, 'invMake' ,FILTER_SANITIZE_STRING));
              $invModel = trim(filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_STRING));
              $invDescription = trim(filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_STRING));
              $invImage = trim(filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_STRING));
              $invThumbnail = trim(filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_STRING));
              $invPrice = trim(filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
              $invStock =trim(filter_input(INPUT_POST, 'invStock' , FILTER_SANITIZE_NUMBER_INT));
              $invColor = trim(filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_STRING));
          
                      // Check for missing data
              if(empty($classificationId) || empty($invMake) || empty($invModel) || empty($invDescription)|| empty($invImage)
              || empty($invThumbnail)|| empty($invPrice)|| empty($invStock)|| empty($invColor)){
                
                $message = '<p class="error-message">Please provide information for all empty form fields.</p>';
                  include '../view/add-vehicle.php';
                  exit; 
              }
      
              // Send the data to the model
              $regOutcome = regVehicle($classificationId, $invMake, $invModel, $invDescription, $invImage ,$invThumbnail,$invPrice,$invStock,$invColor );
      
              // Check and report the result
              if($regOutcome === 1){
                  $message = "<p class='success-message'>Thanks for registering vehicle Brand: $invMake , Model: $invModel . This new car is available in the inventory.</p>";
                  include '../view/add-vehicle.php';
                  exit;
              } else {
                  $message = "<p class='error-message'>Sorry, the registration of vehicle $invMake - $invModel failed . Please try again.</p>";
                  include '../view/add-vehicle.php';
                  exit;
              }
              include '../view/vehicles-management.php';  
                      
            }else{
                header('Location: /phpmotors/');
            }
            break;
            case 'register-classification':
                if ($_SESSION['loggedin'] && $_SESSION['clientData']['clientLevel'] > 1) {      
                // Filter and store the data
              $classificationName = filter_input(INPUT_POST, 'classificationName');
            
          
                      // Check for missing data
              if(empty($classificationName)){
                
                $message = '<p class="error-message">Please provide the name of the classification.</p>';
                  include '../view/add-classification.php';
                  exit; 
              }
      
              // Send the data to the model
              $regOutcome = regClassification($classificationName);
      
              // Check and report the result
              if($regOutcome === 1){
                  //$message = "<p class='success-message'>Thanks for registering car classification $classificationName . This new car is available in the inventory.</p>";
                  header('Location: /phpmotors/vehicles');
                  exit;
              } else {
                  $message = "<p class='error-message'>Sorry, the registration of classification $classificationName failed . Please try again.</p>";
                  include '../view/add-classification.php';
                  exit;
              }
            }else{
                header('Location: /phpmotors/');
            }
            break;
        case 'add-vehicle':
            if ($_SESSION['loggedin'] && $_SESSION['clientData']['clientLevel'] > 1) {     
                include '../view/add-vehicle.php';
            }else{
                header('Location: /phpmotors/');
            }

                    break;
        case 'add-classification':
            if ($_SESSION['loggedin'] && $_SESSION['clientData']['clientLevel'] > 1) {   
            include '../view/add-classification.php';
            }else{
                header('Location: /phpmotors/');
            }
        break;
        default:
        if ($_SESSION['loggedin'] && $_SESSION['clientData']['clientLevel'] > 1) {       
          include '../view/vehicles-management.php';  
            
        }else{
            header('Location: /phpmotors/');
        }
         break;
        }
    

?>