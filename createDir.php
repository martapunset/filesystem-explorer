<?php
  session_start();
 $pathFolder=$_SESSION["newsession"]; //actual path
 $folderName=$_GET['folder-name']; //name introduced by user in form



    //set actual directory 
   // if((isset($_GET['name'])) AND (isset($_GET['folder-name'])) ){
       
       
        
        mkdir( $pathFolder . DIRECTORY_SEPARATOR. $folderName);
        echo $pathFolder."<br>";
        echo $folderName."<br>";
        echo $pathFolder . DIRECTORY_SEPARATOR. $folderName;
       // print_r($_POST);
      
          //  echo 'error';
       
    header("Location:index.php?name=$pathFolder");


   


?>



 