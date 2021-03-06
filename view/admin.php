<?php
if (!$_SESSION['loggedin']) {
  header('Location: /phpmotors/');
}
if (isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
 }
$firstName =  $_SESSION['clientData']['clientFirstname'] ;
$lastName =   $_SESSION['clientData']['clientLastname'];
$userName =  $firstName . ' ' . $lastName;
$email =  $_SESSION['clientData']['clientEmail'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Admin | PHP Motors </title>
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
    <h1> <?php echo $userName ?> </h1>
    <p> You are logged in: </p>
    <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
    <ul>
    <li>First name: <?php echo $firstName ?> </li>
    <li>Last name: <?php echo $lastName ?> </li>
    <li>Email: <?php echo $email ?></li>

    </ul>
    <?php echo $accountManagement ?>
    <?php echo $adminMenu ?>


  </main>
  <footer id="page_footer">
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
  </footer>


</body>

</html>