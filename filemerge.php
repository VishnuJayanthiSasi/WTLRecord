<?php
$txt1 = file_get_contents('page1.txt');
$txt1 .= "\n" . file_get_contents('page2.txt');
$txt1 .= "\n" . file_get_contents('page3.txt');
$txt1 .= "\n" . file_get_contents('page4.txt');
$fp = fopen('merged.txt', 'w');
if(!$fp)
    die('Could not create / open text file for writing.');
if(fwrite($fp, $txt1) === false)
    die('Could not write to text file.');
    $filename = "merged.txt";
    $file = fopen( $filename, "r" );
    if( $file == false ) {
       echo ( "Error in opening file" );
       exit();
    } 
    $filesize = filesize( $filename );
    $filetext = fread( $file, $filesize );
    fclose( $file );
    echo ( "File size : $filesize bytes" );
    echo ( "<pre>$filetext</pre>" );
echo 'Text files have been merged.';
?>