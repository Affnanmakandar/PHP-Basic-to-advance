<!-- syntax -->
<!-- 2d and multidimensional is one and the same -->
<!-- it is also called nested array -->
<?php

// $user ["affnan","mumbai","affnan232@gmail.com"];
// $users ["sahil","bombay","sahil22@gmail.com"]; it will be compicated to store so multidimensional
// array is used

$users = [
[1,"affnan","mumbai","affnan232@gmail.com"],
[2,"Mahek","Gudgoan","mahek243@gmail.com"],
[3,"sahil","Banglore","sahil234@gmail.com"],
[4,"peter","US","peter45@gmail.com"]
];
// echo "<pre>";
// print_r ($users);// prints an array 
// echo "</pre>";
// we will use for loop because we donnt practice nested foreach
for($ini=0;$ini<count($users);$ini++){
    // print_r($users[$ini]);
    for($j=0;$j<count($users[$ini]);$j++){
        echo $users[$ini][$j];
        echo "<br/>";
    }
}