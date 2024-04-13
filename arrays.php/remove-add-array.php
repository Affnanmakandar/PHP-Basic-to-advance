<!-- remove and add element in array  -->
<?php
$users = ["affnan","sam","bhaskar","ravi"];
// array_push($users,"peter","bruce"); // this array push helps use to add element in array it is functon of php
array_pop($users);//helps to remove last elements
array_splice($users,-2);//use to remove multiple elements used with the help of - how many elements you want to remove use -then no of element
// you want to remove
print_r($users);