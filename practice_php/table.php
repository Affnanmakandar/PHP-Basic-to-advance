<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table border = "1">
        
            <td>
                <tr>
                    <td>Sr No</td>
                    <td>Name</td>
                    <td>E-mail</td>
                </tr>
            </td>
            <td>
                <tr>
                    <td>1</td>
                    <td>Affnan</td>
                    <td>affnan232@gmail.com</td>
                </tr>
            </td>
            <td>
                <tr>
                    <td>2</td>
                    <td>Sahil</td>
                    <td>sahil234@gmail.com</td>
                
            </td>
        </tr>
    </table>
    <br>
    <?php
    $info=[
        [1,"affnan","affnan232@gmail.com"],
        [2,"sahil","sahil256@gmail.com"],
        [3,"mushtaq","mush234@gmail.com"]
    ];
    echo "<table border = 1>";
    for($i=0;$i<count($info);$i++){
       echo "<tr>";
        for($j=0;$j<count($info[$i]);$j++){
            echo "<td>";
            echo $info[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>