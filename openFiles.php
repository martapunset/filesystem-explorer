<?php
include("index.php");

$url=$_GET['name'];

echo $url;
#$path = "ROOT";
if ($fh = opendir($url)){
    while(($entry = readdir($fh)) !== false) {
        $thisEntry=$url . DIRECTORY_SEPARATOR . $entry;
        if ($entry != "." && $entry != ".."){
          
            ?>
            <div>
                <li><a href='' class="link-dark d-inline-flex text-decoration-none rounded"><?php echo $entry ?></a></li>
              
           <?php
            
            
        }
    }
}
?>