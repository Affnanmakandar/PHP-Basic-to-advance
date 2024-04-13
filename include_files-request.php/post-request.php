<!-- Make php file
Make input field in html
Recieve data in php file -->
<!-- login.html file  -->
<!-- using post request -->
<?php
// print_r($_POST); // array  ki tarah se print hoga
// ye address bar mei data show nhi hoga
// ie why it is mostly used because it is a secured data
// http://localhost/files-functions-sql%20part/post-request.php
if($_POST){
    echo "username is :".$_POST['user_name'];
    echo "<br/>";
    echo "user password is :".$_POST['user_password'];
    echo "<br/>";
    echo "user email id is :".$_POST['user_email'];

}

?>