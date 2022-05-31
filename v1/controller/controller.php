<?php

function shortenText($content){
 $body = $content;
 $string = strip_tags($body);
 if (strlen($string) > 100){
   $stringCut = substr($string, 0, 100);
   $endPoint = strrpos($stringCut, ' ');
   $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
   $string .= '...';
 }
 return $string;
}

 ?>
