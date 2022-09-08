<?php
$dir="./ROOT";
//$dir = "/images/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dha = opendir($dir)){
    while (($folder = readdir($dha)) !== false){
     //  if(is_dir($folder)){ //si no es un file
        if($folder!="." AND $folder !="..")
        echo "<li><a href='#' class='link-dark-inline-flex text-decoration-none rounded'>$folder </a></li>";
     //  }
    }
    closedir($dha);
  }
}






// <?php include("openFolders.php");?>
