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
      <input type="text" name="clientFirstname" id="fname" placeholder="Enter Name">
      <!-- LASTNAME INPUT -->
      <label for="clientLastname">Last Name <span class="required-symbol">(*)</span></label>
      <input type="text" name="clientLastname" id="lname" placeholder="Enter Name">
      <!-- EMAIL INPUT -->
      <label for="clientEmail">Email <span class="required-symbol">(*)</span> </label>
      <input type="email" name="clientEmail" id="email" placeholder="Enter Email">
      <!-- PASSWORD INPUT -->
      <label for="clientPassword">Password <span class="required-symbol">(*)</span></label>
      <input type="password" name="clientPassword" id="password" placeholder="Enter Password">
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