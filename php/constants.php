<html>
<body>

<center>
<h1>Create a PHP constant</h1>
</center>

<?php
define("GREETINGS", "Welcome to W3Schools.com!");
echo GREETINGS;
?>

<hr>

<h1>PHP contant Keyword</h1>

<?php
const MYCAR ="Rolls Royce";
echo MYCAR;
?>

<h1>PHP Constant Array</h1>

<?php
define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
echo cars[0];
?>

<h1>Constant are Global</h1>

<?php
define("GREETINGS", "Welcome to W3Schools.com!")

function mytest()   {
    echo GREETING;
}

mytest();


</body>
</html>