<!-- associative arrays -->
<!-- print a user information -->
<?php
$information = [
"name" => "rohan",
"surname" => "verma",
"gender" => "male",
"age" => "23",
"mail" => "abc23@gmail.com"
];
// printing all the details at once using foreachloop
foreach ($information as $key => $info) {
    # code...
    echo $key . " is:" .$info;
    echo "<br/>";
}