<?php

require_once("index.php");
require_once("updatesession.php");


if(isset($_GET['name']) ){ 
   $url=$_GET['name'];  
       
}else{

  $url="ROOT";
}
//configurate actual url  in session
$_SESSION["newsession"]=$url;
//call actual session function 
//check if it doesnt need the atualsession function and works only with session calll
actualSession($_SESSION["newsession"]);


    //function to open the folders
function openFolder (){
   $url=$_SESSION["newsession"];

    if(is_dir($url)){
        if ($fh = opendir($url) ){
           while(($entry2 = readdir($fh)) !== false) {
              $thisEntry2=$url . DIRECTORY_SEPARATOR . $entry2;
               if ($entry2 != "." && $entry2 != ".."){
              
                
                ?>      
       <div class="d-flex text-muted pt-3">
        <div><?php include("logoFiles.php"); ?></div>
          <div class=" container  mb-0  border-bottom w-100">
            <div class="row">
            
              <a class="text-gray-dark col" href="index.php?name=<?php echo $thisEntry2?>"><strong> <?php echo $entry2 ?></strong></a>
              <p class="col text-center"><?php echo filesize($thisEntry2)/1000 . "KB" ?></p>
              <p class="col text-end"><?php echo date("F d Y H:i:s", 
                              filemtime($thisEntry2));
                              
     ?></p>
            </div>
          </div>
        </div>           
               <?php    
              
            } 
            
        }

        //store session in external function
     //   updateSession($_SESSION["newsession"]); 

    }

  
          
   
}else{

//read files
include("openFiles.php");

}
}








