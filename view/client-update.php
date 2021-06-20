<?php

   if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
   }
   if (isset($_SESSION['messagePassword'])) {
    $messagePassword = $_SESSION['messagePassword'];
   }

   $firstName =  $_SESSION['clientData']['clientFirstname'] ;
   $lastName =   $_SESSION['clientData']['clientLastname'];
   $userName =  $firstName . ' ' . $lastName;
   $email =  $_SESSION['clientData']['clientEmail'];
   $clientId =    $_SESSION['clientData']['clientId'];
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Management | PHP Motors </title>
  <link rel="stylesheet" href="../css/styles.css" />
</head>

<header class="top-header">
  <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
</header>
<nav id="page_nav" class="navigation">
  <?php echo $navlist ?>
</nav>

<main>
  <div class="login-box" id="register-box">

    <h1>Manage Account</h1>
    <?php
    if (isset($message)) {
      echo $message;
    }
    ?>
    <h2>Update Account</h2>
    <form action="/phpmotors/accounts/index.php" method="post">
      <!-- FIRSNAME INPUT -->
      <label for="clientFirstname">First Name <span class="required-symbol">(*)</span> </label>
      <input type="text" name="clientFirstname" id="clientFirstname" placeholder="Enter Name" <?php if(isset($firstName)){echo "value='$firstName'";}  ?> required>
      
      <!-- LASTNAME INPUT -->
      <label for="clientLastname">Last Name <span class="required-symbol">(*)</span></label>
      <input type="text" name="clientLastname" id="clientLastname" placeholder="Enter Name" <?php if(isset($lastName)){echo "value='$lastName'";}  ?> required>
      <!-- EMAIL INPUT -->
      <label for="clientEmail">Email <span class="required-symbol">(*)</span> </label>
      <input type="email" name="clientEmail" id="clientEmail" placeholder="Enter Email" <?php if(isset($email)){echo "value='$email'";}  ?> required>
     
      <input type="submit" name="submit" value="Update" id="regbtn">
      <input type="hidden" name="action" value="Update">
      <input type="hidden" name="clientId" value="
                <?php if(isset($clientInfo['clientId'])){ echo $clientInfo['clientId'];} 
                elseif(isset($clientId)){ echo $clientId; } ?>  ">
    </form>
    <h2>Update Password</h2>
    <?php
    if (isset($messagePassword)) {
      echo $messagePassword;
    }
    ?>
    <form action="/phpmotors/accounts/index.php" method="post">
       <!-- PASSWORD INPUT -->
       <label for="clientPassword">Password <span class="required-symbol">(*)</span></label>
      <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
      <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character.</span> 
      <span>* This will be the new password for your user</span> 
      <input type="submit" name="submitPassword" value="Update Password" id="regbtnp">
      <input type="hidden" name="action" value="UpdatePassword">
      <input type="hidden" name="clientIdP" value="
                <?php if(isset($clientInfo['clientId'])){ echo $clientInfo['clientId'];} 
                elseif(isset($clientId)){ echo $clientId; } ?>  ">
    </form>
  </div>
</main>
<footer id="page_footer">
  <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
</footer>


</body>

</html>