<?php
function randomPassword($passLenght) {
    $charactersDatabase = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789';
    $password = '';
   
    for ($i=0; $i < $passLenght; $i++) { 
       $randomCharacter = $charactersDatabase[rand(0, strlen($charactersDatabase) - 1)];
       
       $password .=  $randomCharacter;
    }
    
    return $password;
}
?>