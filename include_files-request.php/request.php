<!-- request is a super global variable it can be accessible anywhere in php file -->
<!-- Make html and php file -->
<!-- make input field in html -->
<!-- recieve data in php -->
<!-- Apply loop on request data -->
<!-- isme get request aur post request dono chalega -->
<?php
// print_r($_REQUEST);
// to work easier 
if($_REQUEST){
    foreach($_REQUEST as $key => $data){
        echo  $key. " is " .$data;
        echo "<br/>";
    }
    
}

?>