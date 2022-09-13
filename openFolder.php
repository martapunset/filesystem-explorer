<?php

require_once("index.php");
require_once("updatesession.php");
require_once("logos.php");
$entry2=null;

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
       <div> <?php extenFiles($thisEntry2) ?></div>
          <div class=" container  mb-0  border-bottom w-100">
            <div class="row">
            
              <a class="text-gray-dark col" name="getname" href="index.php?name=<?php echo $thisEntry2?>" ><strong> <?php echo $entry2 ?></strong></a>
              <p class="col text-center"><?php echo filesize($thisEntry2)/1000 . "KB" ?></p>
              <p class="col text-end"><?php echo date("F d Y H:i:s", 
                              filemtime($thisEntry2)); $_SESSION["urlSon"]=$thisEntry2;
                              
                              ?>                       

     <a href='deleteFiles.php?name=<?php echo $thisEntry2 ?>' class="me-3 mx-4 fs-6 "><i class="fa-solid fa-trash text-secondary"></i></a>
    <!-- <a href='renameFiles.php?name= echo $thisEntry2 'class="me-4 mx-1 fs-6 "><i class="fa-regular fa-file"></i></a>
               --><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  rename
    </button></p></div>
          </div>
        </div> 

               <?php             
              
            } 
            
        }

    }

  
    }else{

//read files


$file = fopen($url, "r")

?>
<!-- Full screen modal -->
<div class="modal-fullscreen">
    
<?php echo $file;

fclose($file);
?>
</div>
<?php

     }

}





?>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New folder Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="renameFiles.php" method="get">
            <div class="modal-body">
      
             <div class="input-group input-group-sm mb-3">
             <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
             <input type="text" name="newName"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
             </div>
           </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>



<?php 


?>




