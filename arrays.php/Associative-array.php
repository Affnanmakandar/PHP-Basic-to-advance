<!-- what is element
array ke andar jo multiple values hoti hai usko bolte hai element
-->
<?php
// index array
// $users =  ["sahil","Affnan","Muskan","Mushtaq","Mahek"];
// associative array
$user_details=[
"name"=> "affnan",  // ye '=>' key ke andar value store hogi ex: "name" => "affnan"
"age"=>20,
"city"=>"Mumbai",
"email"=> "abc22@gmail.com",
"state"=>"Maharashtra"
];
// echo $user_details["name"]; // ye key ke naam se print karate hai
// echo "<br/>";
// echo $user_details ["age"];
// echo "<br>";
// ispe loop chalaenge kyunki aise print nhi kar sakte hai
// foreach ($user_details as $key=> $data) {
//     # code...
//     echo $key. "is" . $data;
//     echo "<br/>";
// }
// 2nd way 
// foreach($user_details as $key=>$data):
//     echo $key."is" .$data;
//     echo "<br/>";
// endforeach;
?>