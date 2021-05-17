<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PHP Motors </title>
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
      <form action="">
         <!-- FIRSNAME INPUT -->
        <label for="clientFirstName">First Name <span class="required-symbol">(*)</span>  </label>
        <input type="text" name="clientFirstName" id="clientFirstName"  placeholder="Enter Name">
         <!-- LASTNAME INPUT -->
         <label for="clientLastName">Last Name <span class="required-symbol">(*)</span></label>
        <input type="text" name="clientLastName" id="clientLastName"  placeholder="Enter Name">
        <!-- EMAIL INPUT -->
        <label for="clientEmail">Email <span class="required-symbol">(*)</span> </label>
        <input type="email" name="clientEmail" id="clientEmail"  placeholder="Enter Email">
        <!-- PASSWORD INPUT -->
        <label for="clientPassword">Password <span class="required-symbol">(*)</span></label>
        <input type="password" name="clientPassword" id="clientPassword" placeholder="Enter Password">
        <input type="submit" value="Register">
      
      </form>
    </div>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
   

  </body>
</html>