<?php

$path = __DIR__;
if ($fh = opendir($path)){
    while(($entry = readdir($fh)) !== false) {
        if ($entry != "." && $entry != ".."){
            ?>
            <div>
                <button class='btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed' data-bs-toggle='collapse' data-bs-target='#home-collapse' aria-expanded='false'><?php echo $entry?></button></div>
           <?php
        }
    }
}
?>