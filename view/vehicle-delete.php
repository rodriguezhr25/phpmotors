<?php
if($_SESSION['clientData']['clientLevel'] < 2){
 header('location: /phpmotors/');
 exit;
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($invInfo['invMake'])){ 
	echo "Delete $invInfo[invMake] $invInfo[invModel]";} ?> | PHP Motors</title>
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
        <h1><?php if(isset($invInfo['invMake'])){ 
	echo "Delete $invInfo[invMake] $invInfo[invModel]";} ?></h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/phpmotors/vehicles/index.php" method="post">
         
                <label for="invMake">Brand <span class="required-symbol">(*)</span> </label>
                <input type="text" readonly name="invMake" id="invMake" <?php if(isset($invInfo['invMake'])) {echo "value='$invInfo[invMake]'"; }?>>
            
                <label for="invModel">Model <span class="required-symbol">(*)</span></label>
                <input type="text" readonly name="invModel" id="invModel" <?php if(isset($invInfo['invModel'])) {echo "value='$invInfo[invModel]'"; }?>>
         
                <label for="invDescription">Description <span class="required-symbol">(*)</span> </label>
                <input type="text" readonly name="invDescription" id="invDescription"  <?php if(isset($invInfo['invDescription'])) {echo "value='$invInfo[invDescription]'"; }?>>
  

              
                <input type="submit" name="submit" value="Delete  Vehicle" id="regbtn">
                <input type="hidden" name="action" value="deleteVehicle">
                <input type="hidden" name="invId" value="<?php if(isset($invInfo['invId'])){echo $invInfo['invId'];} ?>">
            </form>
        </div>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>


</html>