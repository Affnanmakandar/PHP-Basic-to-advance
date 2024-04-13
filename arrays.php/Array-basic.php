 <!-- Mostly arrays is use in many company in php -->
 <!-- What is array 
Array is a collection of data;
it is use to store multiple value in a single variable
-->
<?php
// example:

$users=["Affnan","Sahil","Mahek","tony","john"];
// echo $users[0]; //array starts with 0;
// echo "<br>";
// echo $users[1];
// echo "<br>";
// echo $users[2];
// echo count($users); // ye count batata hai arrays ka dynamically 
// zyadatar arrays mei foreach loop use hota hai par mei for-loop use karunga
for($user=0;$user<count($users);$user++){
    echo "<h2 style= 'color:blue'>".$users[$user]."</h2>";
    echo"<br>";
}
?>