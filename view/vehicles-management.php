<!DOCTYPE html>
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
       
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>


</html>