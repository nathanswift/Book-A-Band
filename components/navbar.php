<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Book A Band</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="browse.php">Bands</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="browse.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Genres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            include_once('etc/genres.php');
            foreach($genres as $key=>$value):
          ?>
          <a class="dropdown-item" href="browse.php?genre=<?php echo $value; ?>"><?php echo $value; ?></a>
          <?php endforeach; ?>
        </div>
      </li>
    </ul>
  </div>
</nav>