<?php
//syntax for parameter is used when we need to change the data and avoid to cause for repititve ones
function sum ($a,$b){
    echo $a+$b;
    echo "<br>";
}
sum(10,20);
sum(20,20);
sum(30,30);
// 2nd example
function userdata($name,$color){
    echo"<h1 style='color:$color'> $name </h1>";

}
userdata("Affnan makandar","green");
userdata("sahil makandar","red");

$data = [
    "Affnan" => 20,
    "Sahil" => 25,
    "Mahek" => 20
];
foreach($data as $name => $info){
    echo "<h3> The data of.$name</h3>". "<br>";
}


?>