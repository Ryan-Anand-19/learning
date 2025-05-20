<html>
    <body>

        <?php
        $x = 5;
        $y = "John";

        echo $x;
        echo "<br>";
        echo $y;
        ?>
        <hr>
        <h2>Output Variables</h2>
        <?php
        $txt = "W3Schools.com";
        echo "I love $txt!";
        $txt = "W3Schools.com";
        echo "I love " . $txt . "!";
        $x = 5;
        $y = 4;
        echo $x + $y;# 5 + 4 = 9
        ?>
        <hr>
        <h2>Variable Type</h2>
        <?php
        $x = 5;      // $x is an integer
        $y = "John"; // $y is a string

        echo $x;
        echo $y;
        ?>
        <hr>
        <h2>Get the data</h2>
        <?php
        $x = 5;
        var_dump($x)
        ?>
        <hr>
        <h2>Hinding what is the variable</h2>
        <?php
        var_dump(5);
        var_dump("John");
        var_dump(3.14);
        var_dump(true);
        var_dump([2, 3, 56]);
        var_dump(NULL);
        ?>
        <hr>
        <h2>Assigning string to variable</h2>
        <?php
        $x = "John";
        echo $x;
        ?>
        <hr>
        <h2>Assigning Multipule values
        <?php
        echo $x;
        echo $y;
        echo $z;
        ?>
        <hr>
        
    </body>
</html>
