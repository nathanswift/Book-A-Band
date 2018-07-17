<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('components/head.html') ?>
    <link rel="stylesheet" href="styles/homepage.css">
</head>

<body>
    <?php include_once('components/navbar.html') ?>
    <div class="container" id="main-wrapper"> 
        <?php 
            include_once('components/home-slide.html');
            include_once('components/featured-bands.html');
            include_once('components/about-bab.html');
            include_once('components/featured-images.html');
            include_once('components/footer.html');
        ?>
    </div>
</body>

    <?php include_once('components/js.html') ?>
    
</html>