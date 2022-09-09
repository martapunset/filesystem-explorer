<?php
require_once("index.php");
if(isset($_GET['name']) ){

    $url=$_GET['name'];  
    if(is_dir($url)){
        if ($fh = opendir($url) ){
           while(($entry = readdir($fh)) !== false) {
              $thisEntry=$url . DIRECTORY_SEPARATOR . $entry;
               if ($entry != "." && $entry != ".."){
                ?>      
    <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
          <div class=" container  mb-0  border-bottom w-100">
            <div class="row">
            
              <a class="text-gray-dark col" href="index.php?name=<?php echo $thisEntry?>"><strong> <?php echo $entry ?></strong></a>
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
}else{

//read files

echo "contenido archivo";


}
}






   

