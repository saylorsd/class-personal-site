<?php

$fp = fopen('tech.csv', 'r');
$langs = array();
while (!feof($fp)) {
    $line = explode(',', fgets($fp));
    $langs[$line[0]] = $line[1];
}
fclose($fp);

function show_items($items)
{
    foreach ($items as $key => $val) {
        ?>
        <div class="small-4 medium-2 columns">
            <img src="img/<?php echo $val; ?>" height="128" width="128">
        </div>
        <?php
    }
}

include('header.php'); ?>

<div class="content-container">
    <div class="row">
        <div class="small-12 columns">
            <div class="content-wrapper">
                <h1>Skills Technology</h1>
                <div class="row" id="languages">
                    <?php show_items($langs); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>
