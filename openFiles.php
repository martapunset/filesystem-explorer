<?php
require_once("index.php");
if(isset($_GET['name'])){
    $url=$_GET['name'];   
    if ($fh = opendir($url)){
        while(($entry = readdir($fh)) !== false) {
            $thisEntry=$url . DIRECTORY_SEPARATOR . $entry;
            if ($entry != "." && $entry != ".."){
                ?>      
    <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
          <div class=" container  mb-0  border-bottom w-100">
            <div class="row">
              <strong class="text-gray-dark col"><?php echo $entry; ?></strong>
              <p class="col text-center"><?php echo filesize($thisEntry)/1000 . "KB" ?></p>
              <p class="col text-end"><?php echo date("F d Y H:i:s", 
                              filemtime($thisEntry)); ?></p>
            </div>
          </div>
        </div>           
               <?php    
            } 
        }
    }
}




function file_size($thisEntry)
{
    if ($thisEntry < 1024) {
        echo "$thisEntry bytes";
    } elseif ($thisEntry < 1048576) {
        $size_kb = round($thisEntry->size/1024);
        echo "$size_kb KB";
    } else {
        $size_mb = round($thisEntry / 1048576, 1);
        echo "$size_mb MB";
    }
}




   

