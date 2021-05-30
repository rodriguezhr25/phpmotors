<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Classification | PHP Motors </title>
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
    <div class="login-box" id="vehicle-register">

<h1>Add Classification</h1>
<?php
if (isset($message)) {
    echo $message;
}
?>
<form action="/phpmotors/vehicles/index.php" method="post">
   

    <label for="classificationName">Classification Name <span class="required-symbol">(*)</span> </label>
    <input name="classificationName" id="classificationName" type="text">    
  
    <input type="submit" name="submit" value="Add Classification" id="regbtn">
    <input type="hidden" name="action" value="register-classification">
</form>
</div>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>


</html>