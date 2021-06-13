<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Login | PHP Motors </title>
    <link rel="stylesheet" href="../css/styles.css" />
</head>

<body>
   <header class="top-header">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
    </header>
    <nav id="page_nav" class="navigation">
      <?php echo $navlist ?>
    </nav>

    <main>
    <div class="login-box">
      
      <h1>PHP Motors Login</h1>
      <?php
    if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];
     }
      ?>
      <form action="/phpmotors/accounts/" method="post">
        <!-- USERNAME INPUT -->
        <label for="clientEmail">Email </label>
        <input type="email" name="clientEmail" id="clientEmail" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> required  placeholder="Enter Email">
        <!-- PASSWORD INPUT -->
        <label for="clientPassword">Password</label>      
        <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
        <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> 
        <input type="submit" value="Log In" id="logbtn">
        <input type="hidden" name="action" value="Login">
        <a href="#">Forgot Password</a><br>
        <a href="index.php?action=registration">Create a New Account</a>
      </form>
    </div>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
   

  </body>
</html>