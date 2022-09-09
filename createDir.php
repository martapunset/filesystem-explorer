<?php

if(isset($_POST["folder-name"])){
$pathFolder=$_POST["folder-name"];
//$optionPath=$_POST["value"];
mkdir("ROOT". DIRECTORY_SEPARATOR . $pathFolder . "/");
echo $pathFolder;
print_r($_POST);
}
//header('Location:index.php');

?>



 