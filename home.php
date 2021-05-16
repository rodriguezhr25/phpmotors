<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Motors </title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header class="top-header">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
    </header>
    <nav id="page_nav" class="navigation">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php'; ?>
    </nav>

    <main>
        <h2>Welcome to PHP Motors! </h2>
        <div class="delorean">
            <h3>DMC Delorean</h3>
            <p>3 cups holders
                <br> Superman Doors
                <br> Fuzzi dice!
            </p>
            <div id="div-button">
          <img src="images/site/own_today.png" alt="button-own-today" id = "own">
        </div>
        </div>
     
        <div class="details">
            <div class="upgrades">
                <h4>Delorean Upgrades</h4>
                <div class="delorean-upgrades">
                    <div>
                        <div class="catalog">
                            <div class="logo-wrapper">
                                <img src="images/upgrades/flux-cap.png" alt="bumper-sticker">
                            </div>
                        </div>
                        <div>
                            <a href="#" title="Flux Capacitator">Flux Capacitator</a>
                        </div>
                    </div>
                    <div>
                        <div class="catalog">
                            <div class="logo-wrapper">
                                <img src="images/upgrades/flame.jpg" alt="fflame">
                            </div>
                        </div>
                        <div>
                            <a href="#" title="Flame Decals">Flame Decals</a>
                        </div>
                    </div>
                    <div>
                        <div class="catalog">
                            <div class="logo-wrapper">
                                <img src="images/upgrades/bumper_sticker.jpg" alt="bumper-sticker">
                            </div>
                        </div>
                        <div>
                            <a href="#" title="Bumper Stickers">Bumper Stickers</a>
                        </div>
                    </div>
                    <div>
                        <div class="catalog">
                            <div class="logo-wrapper">
                                <img src="images/upgrades/hub-cap.jpg" alt="hub-caps">
                            </div>
                        </div>
                        <div>
                            <a href="#" title=">Hub-Caps">Hub-Caps</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delorean-reviews">
                <h4>DMC Delorean Reviews</h4>
                <ul>
                    <li>"So fast its almost like traveling in time (4/5)"</li>
                    <li>"Cooles ride on the road" (4/5)</li>
                    <li>"I'm feeling Marty MacFly!" (5/5) </li>
                    <li>"The most futuristic ride of our day" (4.5/5)</li>
                    <li>80's livin and I love it! (5/5) </li>
                </ul>
            </div>
        </div>
    </main>
    <footer id="page_footer">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>


</html>