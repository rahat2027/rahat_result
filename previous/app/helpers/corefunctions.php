<?php
 function to($path){
 return header("location:{$path}");
 }
 function e($string){
 return htmlentities($string,ENT_QUOTES,'UTF-8');
 }
 