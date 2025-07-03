<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// This is a single-line comment in PHP
echo "Hello, world!";
echo"<br>This is the used for print in the browser<br>";
$a= 10;
$b= 10;
echo"The value of a is: $a and the value of b is: $b";
$c= 10.43;
echo"<br>The value of c is: $c";
$d= TRUE;
echo"<br>The value of d is: $d";
$e= NULL;
echo "<br>The value of e is: $e";
//Writing Array
$a = array("apple", "banana", "cherry");
print_r($a);

//conditional statement
$age = 20;
if($age >= 18) {
    echo "<br>As your age is $age. You are an adult.";
} else {
    echo "<br>As your age is $age. You are a minor.";
}

//Constant value
define("PI", 3.14);
echo "<br>The value of PI is: " . PI;
$radius = 5;
echo"<br>The area of a circle with radius $radius is: " . (PI * $radius * $radius);

// Unary operator
echo"<br><br>Unary operator<br>";
$x = 5;
echo"Value of x is: $x<br>";
echo"Value of x is : " . $x . "<br>Value of x after incrementing using ++ operator is: " . ++$x . "<br>";
echo"Value of x is : " . $x . "<br>Value of x after decrementing using -- operator is: " . --$x . "<br>";
echo"Value of x is : " . $x . "<br>Value of x after using not ~ operator is: " . ~$x . "<br>";

// Arithmetic operator
echo"<br><br>Arithmetic operator<br>";
$x = 10;
$y = 5;
echo"Value of x is: $x<br>";
echo"Value of y is: $y<br>";
echo "Addition of x and y is: " . ($x + $y) . "<br>";
echo "Subtraction of x and y is: " . ($x - $y) ."<br>";
echo "Multiplication of x and y is: " . ($x * $y) ."<br>";
echo "Division of x and y is: " . ($x / $y) ."<br>";
echo "Modulus of x and y is: " . ($x % $y) ."<br>";
echo "Exponentiation of x and y is: " . ($x ** $y) ."<br>";

//Logical operator
echo"<br><br>Logical operator<br>";
echo "Logical and operator is True when both the operands are true<br>";
$x = 5;
$y = 5;
echo "Value of x is: $x<br>";
echo "Value of y is: $y<br>";
if($x && $y) {
    echo "Both x and y are true.<br>";
} else {
    echo "Either x or y is false.<br>";
}

echo "Logical or operator is True when either of the operands is true<br>";
$x = 5;
$y = 0;
echo "Value of x is: $x<br>";
echo "Value of y is: $y<br>";
if($x || $y) {
    echo "Either x or y is true.<br>";
} else {
    echo "Both x and y are false.<br>";
}

echo "Logical not operator is True when the operand is false<br>";
$x = 0;
echo "Value of x is: $x<br>";
echo "Value of not x is: " . !$x . "<br>";

//Function
echo"<br><br>Function<br>";
function add($a, $b) {
    return $a + $b;
}
echo "The sum of 10 and 20 is: " . add(10,20) . " Using Function<br>";

//Function with variable number of arguments
echo"<br><br>Function with variable number of arguments<br>";
function sum(...$numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}
echo "The sum of 10, 20, 30 and 40 is: " . sum(10, 20, 30, 40) . " Using Function with variable number of arguments<br>";
echo "The sum of 10, 30 and 40 is: " . sum(10, 30, 40) . " Using Function with variable number of arguments<br>";

//call by Reference
echo"<br><br>Call by Reference<br>";
function increment(&$value) {
    $value++;
}
$value = 10;
echo "Value before incrementing: $value<br>";
increment($value);
echo "Value after incrementing: $value<br>";

//String functions
echo"<br><br>String functions<br>";
$string = "Hello, World!";
echo "Original string: $string<br>";

echo "Length of the string: " . strlen($string) . "<br>";
echo "String in uppercase: " . strtoupper($string) . "<br>";
echo "String in lowercase: " . strtolower($string) . "<br>";
echo "String in title case: " . ucfirst($string) . "<br>";
echo "String in sentence case: " . ucwords($string) . "<br>";
echo "String in reverse: " . strrev($string) . "<br>";
echo "String after replacing 'World' with 'PHP': " . str_replace("World", "PHP", $string) . "<br>";
echo "String after removing 'Hello': " . str_replace("Hello", "", $string) . "<br>";
echo "string after appending ' - Welcome!': " . $string . " - Welcome!<br>";
echo "Total words in the string: " . str_word_count($string) . "<br>";

$string2 = "PHP is a popular general-purpose is scripting language that is especiallechy suited is to web development.";
echo "Original string: $string2<br>";
echo "is appear in the string: " . substr_count($string2, "is") . "<br>";


//Arrays
echo"<br><br>Arrays<br>";
$fruits = array("apple", "banana", "cherry");
echo "Original array: ";
print_r($fruits);
echo "<br> Printing only Values of the array using foreach: ";
foreach ($fruits as $fruit) {
    echo $fruit . ", ";
}

// Associative array
echo "<br><br>Associative array<br>";
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo "Original associative array: ";
print_r($person);
echo "<br> Accessing values using keys: ";
foreach ($person as $key => $value) {
    echo "$key: $value, ";
}

//unique elements in an array
echo "<br><br>Unique elements in an array<br>";
$numbers = array(1, 2, 3, 4, 5, 1, 2, 3);
echo "Original array: ";
print_r($numbers);
echo "<br> Unique elements in the array: ";
echo implode(", ", array_unique($numbers));

echo "<br> Array Map to square each element<br>";
$squaredNumbers = array_map(function($number) {
    return $number * $number;
}, $numbers);
print_r($squaredNumbers);




?>


    
</body>
</html>