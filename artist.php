<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('components/head.html') ?>
    <link rel="stylesheet" href="styles/artist.css">
</head>

<body>
    <?php include_once('components/navbar.php') ?>
    <div class="container" id="artist-wrapper"> 
        <?php 
            include_once('components/artist.html');
            include_once('components/footer.html');
        ?>
    </div>
</body>

    <?php include_once('components/js.html') ?>
    
</html>