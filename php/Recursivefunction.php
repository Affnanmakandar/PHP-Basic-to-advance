<!-- jo function ko khudko hie  call karta hai  usse kehte hai recursive function -->
<!-- ye for loop aur while loop ki tarah run karta hai -->
<!-- example -->
<!-- syntax -->
<!-- 
    function test(){
        statement
        test();
    }
    test();
 -->
<?php
// it works as a loop
function display($number){
    if($number<=5){
        echo "$number <br>";
        //recursive increase number by 1 i.e increment
        display($number +1);
    }
}
display(1);// call the function to run
//factorial number using recursive function
function factorial ($n){
    if($n==0){
        return 1;
    }else{
        return($n * factorial($n-1));
    }
}
echo factorial(5);

?>