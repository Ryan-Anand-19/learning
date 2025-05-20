<html>
    <body>
        <h1>Local host</h1>
        <?php
        $x = 5;//globle scope
        function myTest() {
            //using the x element inside this fuction will generate an error
            echo "<p>Variable x inside fuction is: $x</p>";
        }
        myTest();

        echo "<p>Variable x outside fuction is: $x</p>"
        ?>
        <hr>
        <h1>Local scope</h1>
        <?php
        function myText() {
            $x = 5;//local scope
            #Using variable inside this local host will generate propely
            echo "<p>Variable X inside fuction is: $x</p>";
        }
        myText();

        echo "<p>Variable x outside function is: $x</p>";
        ?>
        <hr>
        <h1>Globel Keyword</h1>
        <?php
        $x = 5;
        $y = 10;

        function myTset() {
         global $x, $y;
         $y = $x + $y;
        } 

        myTset();  // run function
        echo $y; // output the new value for variable $y
        ?>
        <hr>
        <?php
        $x = 5;
        $y = 10;

        function myExam() {
          $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        } 

        myExam();
        echo $y;
        ?>
        <hr>
        <h1>Static Keywords</h1>
        <?php
        fuction myMark() {
            static $x = 0;
            echo $x;
            $x++;
        }

        myMark();
        echo "<br>";
        myMark();
        echo "<br>";
        myMark();
        ?> 

    <body>
<html>
