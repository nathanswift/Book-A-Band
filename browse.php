<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('components/head.html') ?>
    <link rel="stylesheet" href="styles/browse.css">
</head>

<body>
    <?php include_once('components/navbar.php') ?>
    <div class="container" id="browse-wrapper"> 
        <?php 
            include_once('components/browse-form.php');
            include_once('components/browse-results.php');
            include_once('components/footer.html');
        ?>
    </div>
</body>

    <?php include_once('components/js.html') ?>
    
</html>