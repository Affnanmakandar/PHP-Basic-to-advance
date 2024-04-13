<!-- Types of request -->
<!-- Get and post request -->
<!-- helps in interaction between php and html -->
<!-- how to send data with get request ? -->
<!-- make html file
Make php file
Make input field in html
Recieve data in php file -->
<!-- login.html file -->
<!-- using get request -->
<?php
if($_GET){
echo "user name is :". $_GET['user_name'];
echo "<br>";
// it is not secured
// get ki user  password aise dikhegi http://localhost/files-functions-sql%20part/Html-php-interaction.php?user_name=ffafa&user_password=321
echo  "user password is ".$_GET['user_password'];
}
?>