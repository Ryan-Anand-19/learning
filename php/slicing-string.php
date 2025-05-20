<html>
    <body>
        <h1>Slicing</h1>
        <?php
        $r = "Hello World!";
        echo substr($r, 0, 5);
        ?>
        <hr>
        <h1>Slicing to the end </h1>
        <?php
        $x = "Hello World!";
        echo substr($x, 6);
        //Because we did not give a length, php will take everything from position 6 to the end.
        ?>
        <hr>
        <h1>Slicing from the end</h1>
        <?php
        $p = "Hello World!";
        echo substr($p, -6, 3);
        ?>
        <hr>
        <h1>Negative length</h1>
        <?php
        $d = "Hi howw are you?";
        echo substr($d, 4, -3);
        ?>
    </body>
</html>