<?php
// include("./include-file-function.php"); // ye warning dega ye files ko attach karne mei help karta hai

for($i=0;$i<10;$i++){
    // include_once("./include-file-function.php"); //printing only once in a loop LOADED hai toh
    //ek hei baar load karega
}
require ("./include-file-function.php"); // ye fatal error dega agar name change hua toh file kaa

for($i=0;$i<10;$i++){
    // require_once("./include-file-function.php"); //printing only once in a loop LOADED hai toh
    //ek hei baar load karega
}
?>