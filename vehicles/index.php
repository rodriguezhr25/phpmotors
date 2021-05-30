<?php
//phpmotors controller

//Get the database connection file
require_once '../library/connections.php';
//Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
//Get the vechicle model
require_once '../model/vehicle-model.php';
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
$selectList  = "<select id='classificationId' name='classificationId'>";
foreach($classifications as $classification){
    $selectList .= "<option value=$classification[classificationId]>$classification[classificationName]</option>";
}

$selectList .= '</select>';

    $action = filter_input(INPUT_POST, 'action');
    if($action == NULL){
        $action = filter_input(INPUT_GET , 'action');
    }

    switch($action){

      
        case 'register':
                // Filter and store the data
              $classificationId = filter_input(INPUT_POST, 'classificationId');
              $invMake = filter_input(INPUT_POST, 'invMake');
              $invModel = filter_input(INPUT_POST, 'invModel');
              $invDescription = filter_input(INPUT_POST, 'invDescription');
              $invImage = filter_input(INPUT_POST, 'invImage');
              $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
              $invPrice = filter_input(INPUT_POST, 'invPrice');
              $invStock = filter_input(INPUT_POST, 'invStock');
              $invColor = filter_input(INPUT_POST, 'invColor');
          
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
            break;
            case 'register-classification':
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
            break;
        case 'add-vehicle':
                include '../view/add-vehicle.php';
                    break;
        case 'add-classification':
            include '../view/add-classification.php';
        break;
        default:
        include '../view/vehicles-management.php';  
         break;
        }
    

?>