<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- question no 1 -->
    <?php
    function reverse($str) {
        return strrev($str);
    }
    echo reverse("sumaira batool")."<br>";   
    ?>
<!-- question no 2 -->
    <?php
      function fact($num){
        // base case
        if($num<2){
            return 1;
        }
        // recursion
        return ($num*fact($num-1));
     }
     $factans=fact(5);
     echo $factans."<br>";
    
    ?>
    <!-- question no three -->
     
    <?php
function isPalindrome($string) {
    $reversed = strrev($string);
    return $string === $reversed;
}
// Example usage
if (isPalindrome("madam")) {
    echo "The string is a palindrome.";
} else {
    echo "The string is not a palindrome.";
}
echo "<br>";
if (isPalindrome("nurses run")) {
    echo "The string is a palindrome.";
} else {
    echo "The string is not a palindrome.";
}
?>

    
</body>
</html>