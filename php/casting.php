<html>
<body>

<h1>Casting</h1>
<?php
$a = 5; // Integer
$b = 5.34 // Float
$c = "hello" // String
$d = true // Boolean 
$e = NULL; // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

// To verify the type of any objecct in php, use the var_dump() function:

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

?>

<h2>Cast to Integer</h2>

<?php
$a = 5;     // Integer
$b = 5.34   // Float
$c = "25 Kilometers";   // String
$d = "Kilometers 25";   // String
$e = "hello";   //String
$f = true;  // Boolean 
$g = NULL;  // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;
?>

<hr>

<h2>Cast to Float<h2>

<?php
$a = 5;     // Integer
$b = 5.34;   // Float
$c = "25 Kilometers"    // String
$d = "Kilometer 25";   // String
$e = "hello"    // Boolean 
$f = "true"     // true
$g = NULL;      // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;
?>

<hr>

<h2>Cast to Boolean</h2>

<?php
$a = 5;         // Integer
$b = 5.34;      // Float
$c = 0;         // Integer
$d = -1;        // Integer
$e = 0.1;       // Float
$f = "hello"    // String
$g = "";        // String
$h = true;      // Boolean
$i = NULL;      // NULL
?>

<hr>

<h2>Cast to Array</h2>

<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 

<h1>Cast to Objects</h1>

<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 

<h1>Cast to NULL</h1>

<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 

</body>
</html>