<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> display table</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td>Sr No.</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
    <tr>
        <td>1.</td>
        <td>Affnan</td>
        <td>affnan232@gmail.com</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Sahil</td>
        <td>sahil234@gmail.com</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Sahil</td>
        <td>sahil234@gmail.com</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Sahil</td>
        <td>sahil234@gmail.com</td>
    </tr>

    </table>
    <br/>
    <?php
    $users=[
        [1,"affnan","affnan232@gmail.com"],
        [2,"Mahek","Gudgoan","mahek243@gmail.com"],
[3,"sahil","Banglore","sahil234@gmail.com"],
[4,"peter","US","peter45@gmail.com"],
[5,"Ankit","Delhi","Ankit45@gmail.com"]
    ];
    echo "<table border = 1>";
    for($i=0;$i<count($users);$i++){
        echo "<tr>";
       
        for($j=0;$j<count($users[$i]);$j++){
            echo "<td>";
            echo $users[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    
</body>
</html>