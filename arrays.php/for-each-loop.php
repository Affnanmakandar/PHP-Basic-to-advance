<!-- Loops -->
<!-- 
    1. for
    2. while
    3. do while
    4. for each ->>>>
 -->
 <!-- To display array elements is used by for each loop -->
 <!-- we use for each loop as it is easy to use in array  -->
 <!-- syntax -->
 <?php
 // example 
 $users = ["Affnan","sahil","Mushtaq","Mahek"];
 foreach ($users as $x) {
    if($x=="Mushtaq"){ // ye jo naam hai wo nhi aayega continue stmt se baaki sab aayega
        continue;
    }
    # code...
    echo "<h3>.$x </h3>";
    echo "<br/>";
    // if($x=='Mushtaq'){
    //     break;
    // }
 }
//  we can use like this also
//  foreach($users as $x):
//     echo $x;
//     echo "<br>";
//  endforeach;

// Interview question..
// what is difference of index and associative
// jaha per ek jaise values ho ex name color car toh index array use hoga
// jaha per variety of information ho ex name city dob age etc toh usme 
// associative array use hoga
