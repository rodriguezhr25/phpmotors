
  <img src="/phpmotors/images/site/logo.png" alt="logo-phpmotors">
  <p> 
  <?php 

  if (isset($_SESSION['loggedin'])) {
    if($_SESSION['loggedin']){
      echo "<span> <a class = 'line' href='/phpmotors/accounts/index.php'> Welcome " . $_SESSION['clientData']['clientFirstname'] . "</a></span>";
      echo "<a class = 'btn' href='/phpmotors/accounts/index.php?action=Logout'> Logout</a></p>";
    }else{
      echo "<a class = 'btn' href='/phpmotors/accounts/index.php?action=login'> My Account</a></p>";
    }
  }else{
    echo "<a class = 'btn' href='/phpmotors/accounts/index.php?action=login'> My Account</a></p>";
  }

   
 ?> 