<html>
    <body>
        <h1>My First php</h1>
        <?php
        echo "Hello World!<br>";
        ?>
        <hr>
        <h2>Not_Case-seneitive</h2>
        <?php
        echo "Keywords like Echo,If,While and Else are not case sensitive<br>";
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
        ?>
        <hr>
        <h2>Case-sensitive</h2>
        <?php
        $color = "red";
        echo "But other terms are case-sensitive";
        echo "my car is " . $color . "<br>";
        echo "my house is " . $coLOR . "<br>";
        echo "my boat is " . $COLOR . "<br>";
        ?>
    </body>
</html>