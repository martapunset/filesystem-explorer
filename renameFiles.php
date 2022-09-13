<?php
session_start();
$url=$_SESSION["newsession"];
$urlSon=$_SESSION["urlSon"];
    //$file_pointer=$_GET["name"];
   
    
    
    if(isset($_GET['newName']) ){ 
        $newName=$_GET['newName'];
            
     
     }
    echo $urlSon;
    echo $url . DIRECTORY_SEPARATOR .$newName;
    renamej($urlSon,$url . DIRECTORY_SEPARATOR .$newName);

function renamej($thisEntry2,$newUrl){  //renames 
    
    rename($thisEntry2,$newUrl);
   
 }
 header("Location:index.php?name=$url");
 

?>