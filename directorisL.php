<?php

function isFolder($entry){



}

$path = "ROOT";
if ($fh = opendir($path)){
    while(($entry = readdir($fh)) !== false) {
        $thisEntry=$path . DIRECTORY_SEPARATOR . $entry;
        if ($entry != "." && $entry != ".." && is_dir($thisEntry)==true){
          
            ?>
            <div>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded"><?php echo $entry ?></a></li>
                
           <?php
        }
    }
}
?>