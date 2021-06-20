<?php


// Check the email
function checkEmail($clientEmail){
 $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
 return $valEmail;
}
// Check the password for a minimum of 8 characters,
 // at least one 1 capital letter, at least 1 number and
 // at least 1 special character
 function checkPassword($clientPassword){
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]\s])(?=.*[A-Z])(?=.*[a-z])(?:.{8,})$/';
    return preg_match($pattern, $clientPassword);
   }

   //Build a navigation bar usin the $classifications array

   //Build a navigation bar usin the $classifications array
   function buildNavigation($classifications){
      $navlist = '<ul>';
      $navlist .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
      foreach($classifications as $classification){
         $navlist .= "<li><a href= '/phpmotors/index.php?action=" .urlencode($classification['classificationName']) . "' title = 'View our $classification[classificationName] product line'> $classification[classificationName]</a></li>";
      }
      $navlist .= '</ul>';
      return $navlist;
   }

   // Build the classifications select list 
   function buildClassificationList($classifications){ 
      $classificationList = '<select name="classificationId" id="classificationList">'; 
      $classificationList .= "<option>Choose a Classification</option>"; 
      foreach ($classifications as $classification) { 
      $classificationList .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>"; 
      } 
      $classificationList .= '</select>'; 
      return $classificationList; 
   }


?>