<?php

if(isset($_POST["folder-name"])){
$pathFolder=$_POST["folder-name"];
mkdir("ROOT". DIRECTORY_SEPARATOR . $pathFolder);
echo $pathFolder;
}
header('Location:index.php');

?>