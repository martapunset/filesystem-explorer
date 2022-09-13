<?php
  session_start();
 $pathFolder=$_SESSION["newsession"];
 $folderName=$_GET['folder-name'];



    //set actual directory 
   // if((isset($_GET['name'])) AND (isset($_GET['folder-name'])) ){
       
       
        
        mkdir( $pathFolder . DIRECTORY_SEPARATOR. $folderName);
        echo $pathFolder."<br>";
        echo $folderName."<br>";
        echo $pathFolder . DIRECTORY_SEPARATOR. $folderName;
       // print_r($_POST);
      
          //  echo 'error';
       
    header('Location:index.php');


   


?>



 