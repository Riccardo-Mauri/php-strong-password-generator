<?php
function random_password($length){
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "!@#$%^&*";
  
    $all_characters = $lower_case . $upper_case . $numbers . $symbols;
    $all_characters = str_shuffle($all_characters);
  
    // Limitiamo la lunghezza della password in base al parametro passato
    $random_password = substr($all_characters, 0, $length);
    
    // Restituiamo la password generata
    return str_shuffle($random_password);
 }
?>