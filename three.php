<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment</title>
</head>
<body>
    <?php
    $marks=110;
    if($marks>=90 && $marks<=100){
        echo "your grade is A";
    }
    else if($marks>=80 && $marks<=89){
        echo "your grade is B";
    }
    else if($marks>=70 && $marks<=79){
        echo "your grade is C";
        
    }
    else if($marks>=60 && $marks<=69){
        echo "your grade is D";
    }
    else if($marks<=60 &&$marks>=0){
        echo "your grade is D";
    }
    else
    echo "error detected";
    ?>
</body>
</html>