<!-- Nested means kisi ek ke andar dusra -->
<!-- function ke andar functionn ko nested function bolte hai -->
<!-- to reduce unwanted functon whether to execute a statement or not 
that's why we make nested function -->
<?php
function test(){
    echo "test funtion called<br>";
    function apple(){
        echo "apple funnction called";
    }
}
test(); // parent fn pehle call hona chaiye
apple();