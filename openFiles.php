<?php

   $url=$_SESSION["newsession"];
$openFile = fopen($url, "r");

while(!feof($openFile)){
    
  $line = fgets($openFile);
  echo $line;

  if(str_ends_with($url,'.png')|| str_ends_with($url,'.jpg')){
    
    // (A) GET IMAGE INFO
    
    $fileData = exif_read_data($url);
     
    // (B) OUTPUT HTTP HEADERS
    header("Content-Type: " . $fileData["MimeType"]);
    header("Content-Length: " . $fileData["FileSize"]);
     
    // (C) READ FILE
    readfile($openFile);
  }
  else {};
}
fclose($openFile);
?>