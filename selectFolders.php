


<?php
 
function selectFolders(){
?>
<select name="carpeta" class="form-select" aria-label="Default select example" form="createItems">
  <option selected>Open this select menu</option>
  
<?php

//require_once("index.php");
if(isset($_GET['name']) ){

    $url=$_GET['name'];  
    if(is_dir($url)){
        if ($fh = opendir($url) ){
           while(($entry = readdir($fh)) !== false) {
              $thisEntry=$url . DIRECTORY_SEPARATOR . $entry;
               if ($entry != "." && $entry != ".."){
                ?>      
               <option value="<?php echo $thisEntry?>"><?php echo $entry?></option>
      
         
                  
               <?php    
            } 
        }
    }
}
}
    ?>
    </select>
   <?php
}
?>







