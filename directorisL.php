<?php




$path = "ROOT";
if ($fh = opendir($path)){
    while(($entry = readdir($fh)) !== false) {
        $thisEntry=$path . DIRECTORY_SEPARATOR . $entry;
        if ($entry != "." && $entry != ".." && is_dir($thisEntry)==true){
          
            ?>
          
                <li><a href='openFiles.php?name=<?php echo $thisEntry?>' class="link-dark d-inline-flex text-decoration-none rounded"><?php echo $entry ?></a></li>
                
           <?php
        }
    }
}
?>