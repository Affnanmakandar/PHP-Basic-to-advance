<!-- let me take an example -->
<?php
// $colors = [
//     "red",
//     "green",
//     "blue"
// ];
       //defining the already defined variable            // giving other name as value
// foreach($colors as $value){  // colors ki jitni bhi value hogi wo value mei store hogi
//     echo $value."<br>";
    // Associative arrays
    //for example
    //as it is easier to work as it identifies length already we assigned in an example
    $age = [
        "bill" => 25,
        "Mark" => 26,
        "john" =>  28
    ];
    
    foreach($age as $name => $value){
        echo  $name."=". $value ."<br>"; 
    }
    

?>