<?php

$path = "root";
if ($fh = opendir($path)){
    while(($entry = readdir($fh)) !== false) {
        if ($entry != "." && $entry != ".."){
            ?>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded"><?php echo $entry?></a></li>
           <?php
        }
    }
}
?>