<?php
//Build the select list
$selectList  = "<select id='classificationId' name='classificationId'>";
foreach($classifications as $classification){
    $selectList .= "<option value='$classification[classificationId]'";
    if(isset($classificationId)){
        if($classification['classificationId'] === $classificationId){
            $selectList .= ' selected ';
        }
    }
    
    $selectList .= ">$classification[classificationName]</option>";
}
$selectList .= '</select>'; 
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php if(isset($invInfo['invMake']) && isset($invInfo['invModel'])){ 
		echo "Modify $invInfo[invMake] $invInfo[invModel]";} 
	elseif(isset($invMake) && isset($invModel)) { 
		echo "Modify $invMake $invModel"; }?> | PHP Motors </title>
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
        <h1><?php if(isset($invInfo['invMake']) && isset($invInfo['invModel'])){ 
	        echo "Modify $invInfo[invMake] $invInfo[invModel]";} 
            elseif(isset($invMake) && isset($invModel)) { 
	        echo "Modify$invMake $invModel"; }?></h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/phpmotors/vehicles/index.php" method="post">
                <label for="classificationId">Classification <span class="required-symbol">(*)</span> </label>
                <?php echo $selectList ?>

                <label for="invMake">Brand <span class="required-symbol">(*)</span> </label>
                <input type="text" name="invMake" id="invMake" required <?php if(isset($invMake)){ echo "value='$invMake'"; } elseif(isset($invInfo['invMake'])) {echo "value='$invInfo[invMake]'"; }?>>
            
                <label for="invModel">Model <span class="required-symbol">(*)</span></label>
                <input type="text" name="invModel" id="invModel" required <?php if(isset($invModel)){ echo "value='$invModel'"; } elseif(isset($invInfo['invModel'])) {echo "value='$invInfo[invModel]'"; }?>>
         
                <label for="invDescription">Description <span class="required-symbol">(*)</span> </label>
                <input name="invDescription" id="invDescription" type="text" required <?php if(isset($invDescription)){echo "value='$invInfo'";}  elseif(isset($invInfo['invDescription'])) {echo "value='$invInfo[invDescription]'"; }?>>
  
                <label for="invImage">Image <span class="required-symbol">(*)</span> </label>
                <input name="invImage" id="invImage" type="text" required <?php if(isset($invImage)){echo "value='$invImage'";}  elseif(isset($invInfo['invImage'])) {echo "value='$invInfo[invImage]'"; }?>>

                <label for="invThumbnail">Thumbnail <span class="required-symbol">(*)</span> </label>
                <input name="invThumbnail" id="invThumbnail" type="text" required <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";}  elseif(isset($invInfo['invThumbnail'])) {echo "value='$invInfo[invThumbnail]'"; }?>>

                <label for="invPrice">Price <span class="required-symbol">(*)</span> </label>
                <input name="invPrice" id="invPrice" type="number" min="0" step="any" required <?php if(isset($invPrice)){echo "value='$invPrice'";}  elseif(isset($invInfo['invPrice'])) {echo "value='$invInfo[invPrice]'"; }?>>

                <label for="invStock">Stock <span class="required-symbol">(*)</span> </label>
                <input name="invStock" id="invStock" type="number" min="0" required <?php if(isset($invStock)){echo "value='$invStock'";}   elseif(isset($invInfo['invStock'])) {echo "value='$invInfo[invStock]'"; }?>>

                <label for="invColor">Color <span class="required-symbol">(*)</span> </label>
                <input name="invColor" id="invColor" type="text" required <?php if(isset($invColor)){echo "value='$invColor'";}  elseif(isset($invInfo['invColor'])) {echo "value='$invInfo[invColor]'"; }?>>
              
                <input type="submit" name="submit" value="Update Vehicle" id="regbtn">
                <input type="hidden" name="action" value="updateVehicle">
                <input type="hidden" name="invId" value="
                <?php if(isset($invInfo['invId'])){ echo $invInfo['invId'];} 
                elseif(isset($invId)){ echo $invId; } ?>
                ">
            </form>
        </div>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>


</html>