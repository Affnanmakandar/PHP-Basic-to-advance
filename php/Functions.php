<!-- functions in php -->
<!-- A function is a block of code used to reduce repititve  work   -->
<?php
function details(){
    //calling dummy function 
    //function ke andar function ko call kar sakte hai example
    dummy();
    $username = 'affnan';
    $age = 20;
    $email = 'affnan731@gmail.com';
    echo $username ."<br>".$age."<br>".$email;
    echo "<hr/>"; //used for line

}
details();
details();
echo "<br>";

details();
// Syntax of function
// function function ka naam(){
//code inside  a function
//}
//function_name(); isko bolte hai function ki declaration karna yaani isko call karna

function dummy(){
    echo "<h1> User Details </h1>";
}

?>