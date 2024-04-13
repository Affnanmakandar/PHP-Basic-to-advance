<!-- inbuild functions in php 
basic but important -->
<!-- 10 basic important function in php
-->
<?php
// 1.
// $str = "affnan makandar";
// echo strlen($str); // string ki length space ki saath bataega;
//2.
// $var = true;
// var_dump($var); // to check the datatype;
// echo date("d"); //date nikalna hai toh
// echo date ("l"); // week bataega monday hai ya wed hai 
// echo date("M"); month bhi bataega
// search on documentation for more

// to check details
// of your version you downloaded
// phpinfo();
// to check whether ki string hai ki nhii
// $var = "abc";
// echo is_string($var);
//true hai toh 1 return karega
// $var = '123';
// echo is_int($var);

//  Used to generate random value
// echo rand();
// echo "before";
// // die; // use to debug
// exit; //same as die

// echo "after";

// it is used to break strings
$str = "affnan makandar is a hero";
echo substr($str,6); // matlav jitni strng ki value chaiye uska no likh do
//read documentattion for more