<?php
// print_r($_FILES);
if($_FILES['file_upload']){
$path = $_FILES['file_upload']['name']; // mulidimensionaal array
echo $path;
// upload se ek alag folder banaya hu
// variable banaya upload se
$upload_path = "./upload".$path;
// echo $upload_path;
if (move_uploaded_file($_FILES['file_upload']['tmp_name'] , $upload_path )){// ye file ko uploaad karega 
// ya  else deke error diya hu
echo "file uploaded";   
}else{
    echo "failed to upload";
}
}
else{
    die("No file found");
}
// End :-
// Jo bhi file upload kiya hu browser pe 
