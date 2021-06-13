<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Registration | PHP Motors </title>
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

    <h1>Register Here</h1>
    <?php
    if (isset($message)) {
      echo $message;
    }
    ?>
    <form action="/phpmotors/accounts/index.php" method="post">
      <!-- FIRSNAME INPUT -->
      <label for="clientFirstname">First Name <span class="required-symbol">(*)</span> </label>
      <input type="text" name="clientFirstname" id="clientFirstname" placeholder="Enter Name" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?> required>
      
      <!-- LASTNAME INPUT -->
      <label for="clientLastname">Last Name <span class="required-symbol">(*)</span></label>
      <input type="text" name="clientLastname" id="clientLastname" placeholder="Enter Name" <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?> required>
      <!-- EMAIL INPUT -->
      <label for="clientEmail">Email <span class="required-symbol">(*)</span> </label>
      <input type="email" name="clientEmail" id="clientEmail" placeholder="Enter Email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> required>
      <!-- PASSWORD INPUT -->
      <label for="clientPassword">Password <span class="required-symbol">(*)</span></label>
      <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
      <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> 
      <input type="submit" name="submit" value="Register" id="regbtn">
      <input type="hidden" name="action" value="register">
    </form>
  </div>
</main>
<footer id="page_footer">
  <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
</footer>


</body>

</html>