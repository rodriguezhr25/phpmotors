<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PHP Motors </title>
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
      
      <h1>Login Here</h1>
      <form>
        <!-- USERNAME INPUT -->
        <label for="email">Email </label>
        <input type="email" name="email" id="email"  placeholder="Enter Email">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter Password">
        <input type="submit" value="Log In">
        <a href="#">Forgot Password</a><br>
        <a href="index.php?action=register">Create a New Account</a>
      </form>
    </div>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
   

  </body>
</html>