<?php

require_once("index.php");
require_once("updatesession.php");
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
       <div><img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img></div>
          <div class=" container  mb-0  border-bottom w-100">
            <div class="row">
            
              <a class="text-gray-dark col" href="index.php?name=<?php echo $thisEntry2?>"><strong> <?php echo $entry2 ?></strong></a>
              <p class="col text-center"><?php echo filesize($thisEntry2)/1000 . "KB" ?></p>
              <p class="col text-end"><?php echo date("F d Y H:i:s", 
                              filemtime($thisEntry2)); 
                              
                              ?>                       

     <a href='deleteFiles.php?name=<?php echo $thisEntry2 ?>' class="me-3 mx-4 fs-6 "><i class="fa-solid fa-trash text-secondary"></i></a>
    <!-- <a href='renameFiles.php?name= echo $thisEntry2 'class="me-4 mx-1 fs-6 "><i class="fa-regular fa-file"></i></a>
               --><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  modal
    </button></p></div>
          </div>
        </div> 

               <?php             
              
            } 
            
        }

    }

  
    }else{

//read files

      echo "alosfdlkansf";


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
      <form action="openFolder.php" method="get">
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




