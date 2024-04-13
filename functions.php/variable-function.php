<!-- Syntax -->
<!-- function test(){

} -->
<!-- $val = 'test'; -->
<!-- $val(); -->
<?php
function test(){
    echo "Test function called<br>";
}
//callback function
 $test = 'test';
 $apple = 'apple';
 function apple(){
  
 }

// $test(); //isse call hoga  echo $test se nhi hoga call

function main($a){
    test();
    
}
main($test);
main($apple);