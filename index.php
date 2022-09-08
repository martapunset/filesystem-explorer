<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$dir="./ROOT";
//$dir = "/images/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dha = opendir($dir)){
    while (($folder = readdir($dha)) !== false){
     //  if(is_dir($folder)){ //si no es un file
        var_dump(is_dir($folder));
        echo $folder . "<br>";
     //  }
    }
    closedir($dha);
  }
}











/*
function listar_directorios_ruta($ruta){
    // abrir un directorio y listarlo recursivo
    if (is_dir($ruta)) {
       if ($dh = opendir($ruta)) {
          while (($file = readdir($dh)) !== false) {
             //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio
             //mostraría tanto archivos como directorios
             echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file);
             if (is_dir($ruta . $file) && $file!="." && $file!=".."){
                //solo si el archivo es un directorio, distinto que "." y ".."
                echo "<br>Directorio: $ruta$file";
                listar_directorios_ruta($ruta . $file . "/");
             }
          }
       closedir($dh);
       }
    }else
       echo "<br>No es ruta valida";
 }
 listar_directorios_ruta($root);
*/
?>
    
</body>
</html>