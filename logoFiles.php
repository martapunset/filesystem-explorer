<?php

$imgFILE= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";





function exFile($entry){

    session_start();
    
    
   


    $imgFILE= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgDOC= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/docx.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgJPG= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgPNG= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgTXT= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/txt.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgPPT= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/ppt.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgODT= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgPDF= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgZIP= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgRAR= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgEXE= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/exe.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgSVG= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgMP3= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgMP4= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/file.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    $imgCSV= "<img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='logos/cvs.png' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#007bff'/><text x='50%' y='50%' fill='#007bff' dy='.3em'></text></img>";
    
    
    
    
            switch(){
                case "csv":echo $imgCSV;break;
                case "doc":echo $imgDOC;break;
                case "exe":echo $imgEXE;break;
                case "jpg":echo $imgJPG;break;
                case "mp3":echo $imgMP3;break;
                case "mp4":echo $imgMP4;break;
                case "odt":echo $imgODT;break;
                case "pdf":echo $imgPDF;break;
                case "png":echo $imgPNG;break;
                case "ppt":echo $imgPPT;break;
                case "rar":echo $imgRAR;break;
                case "svg":echo $imgSVG;break;
                case "txt":echo $imgTXT;break;
                case "zip":echo $imgZIP;break;            
                default: echo $imgFILE;break;     
            }
    }
    
    exFile();