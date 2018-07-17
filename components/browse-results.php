<?php
    include_once('etc/genres.php');
    foreach(['', '', '', ''] as $key=>$value):
?>
    <div class="row browse-results">
        <div class="col-5">
        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/557791536&color=%23647c7c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
        </div>
        <div class="col-7">
            <h2>Fringilla Ornares</h2>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod.</p>
            <span>$100/hour</span>
            <button type="button" class="btn btn-secondary">Read More</button>
            <button type="button" class="btn btn-primary">Book This Band</button>
        </div>
    </div>
<?php endforeach; ?>