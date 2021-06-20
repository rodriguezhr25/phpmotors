<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('location: /phpmotors/');
    exit;
   }
   if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
   }
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vehicles | PHP Motors </title>
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
        <div>
            <a href="/phpmotors/vehicles/index.php?action=add-classification">Add Classification</a>
        </div>
        <div>
            <a href="/phpmotors/vehicles/index.php?action=add-vehicle">Add Vehicle</a>
        </div>
        
        <?php
            if (isset($message)) { 
            echo $message; 
            } 
            if (isset($classificationList)) { 
            echo '<h2>Vehicles By Classification</h2>'; 
            echo '<p>Choose a classification to see those vehicles</p>'; 
            echo $classificationList; 
            }
        ?>
        <noscript>
        <p><strong>JavaScript Must Be Enabled to Use this Page.</strong></p>
        </noscript>
        <table id="inventoryDisplay"></table>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>
<script src="../js/inventory.js"></script>

</html>
<?php unset($_SESSION['message']); ?>