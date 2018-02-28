<?php
function easterReverse ($fileB){
    $resource=fopen($fileB, 'r+');
    $fileContent = fread($resource, filesize($fileB));
    $secondTextHalf = substr($fileContent, floor(strlen($fileContent)/2));
  
    fseek($resource, floor(strlen($fileContent)/2), SEEK_SET);
    fwrite($resource, strrev($secondTextHalf),strlen($secondTextHalf));
}