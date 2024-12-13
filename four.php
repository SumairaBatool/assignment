<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment 04</title>
</head>
<body>
<h3>question no 2</h3>
    <?php
    $capitals=array(
        "italy"=>"rome",
        "luxemobourg"=>"luxembourg",
        "belgium"=>"brussels",
        "denmark" =>"copenhagen",
        "finland"=>"helsinki",
        "france"=>"paris"
    );
    foreach($capitals as $country=>$capital ){
        echo "the capital of ".$country." is ".$capital."<br>";
    }
    ?>
    <h2>question no 1</h2>
   <?php
    $capital=array("karachi","islamabad", "lahore","peshawer","skardu","gilgit");
    echo "<table border='2px'>
    <tr>
    <th>cities</th>
    </tr>";
    foreach ($capital as $city){
        echo " <tr><td>".$city."</td></tr>";
    }
   " </table>"
    ?>
</body>
</html>
