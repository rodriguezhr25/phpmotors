<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Vehicle | PHP Motors </title>
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

            <h1>Add Vehicle</h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/phpmotors/vehicles/index.php" method="post">
                <label for="classificationId">Classification <span class="required-symbol">(*)</span> </label>
                <?php echo $selectList ?>

                <label for="invMake">Brand <span class="required-symbol">(*)</span> </label>
                <input name="invMake" id="invMake" type="text">
            
                <label for="invModel">Model <span class="required-symbol">(*)</span></label>
                <input name="invModel" id="invModel" type="text">
         
                <label for="invDescription">Description <span class="required-symbol">(*)</span> </label>
                <input name="invDescription" id="invDescription" type="text">
  
                <label for="invImage">Image <span class="required-symbol">(*)</span> </label>
                <input name="invImage" id="invImage" type="text" value="/phpmotors/images/no-image.png">

                <label for="invThumbnail">Thumbnail <span class="required-symbol">(*)</span> </label>
                <input name="invThumbnail" id="invThumbnail" type="text" value="/phpmotors/images/no-image.png">

                <label for="invPrice">Price <span class="required-symbol">(*)</span> </label>
                <input name="invPrice" id="invPrice" type="text">

                <label for="invStock">Stock <span class="required-symbol">(*)</span> </label>
                <input name="invStock" id="invStock" type="number" min="0">

                <label for="invColor">Color <span class="required-symbol">(*)</span> </label>
                <input name="invColor" id="invColor" type="text">
              
                <input type="submit" name="submit" value="Add Vehicle" id="regbtn">
                <input type="hidden" name="action" value="register">
            </form>
        </div>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>


</html>