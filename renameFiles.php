<?php

$url=$_SESSION["newsession"];
    $file_pointer=$_GET["name"];
   

    function rename(){
        
    rename("/test/file1.txt","/home/docs/my_file.txt");


    }

    if(isset($_GET['newName']) ){ 
        $newName=$_GET['newName'];
            
     renamej($newName);
     }

function renamej($newUrl){  //renames 
    global $entry2;
    global $url;
    global $thisEntry2;
    echo $entry2;
    rename($thisEntry2,$newUrl);
   // header("Location:index.php?name=$url");
 
 }

?>