<div class="row" id="browse-form">
    <div class="col-5">
        <select class="form-control">
            <option value="all">All</option>
            <?php
                include_once('etc/genres.php');
                foreach($genres as $key=>$value):
            ?>
            <option value="<?php echo $value; ?>">
                <?php echo $value; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-5">
        <select class="form-control">
            <option value="100-250">$100-$250</option>
            <option value="250-500">$250-$500</option>
            <option value="500-1000">$500-$1,000</option>
            <option value="1000">$1,000+</option>
        </select>
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary">Search</button>
    </div>
</div>