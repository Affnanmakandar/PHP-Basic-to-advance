<?php
function arr($age){
    switch ($age){
        case 1:
            echo "banana";
            break;
            case 2:
                echo "chocolate";
                break;
                case 3:
                    echo "icecream";
                    break;
                    default:
                    echo "These are only available";
    }
}
arr(5);
echo "<br>";
arr(1);

?>