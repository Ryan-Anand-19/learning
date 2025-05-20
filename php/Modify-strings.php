<html>
    <body>
        <h1>Upper Case</h1>
        <?php
        $x = "Hello World!";
        echo strtoupper($x);
        ?>
        <hr>
        <h1>Lower Case</h1>
        <?php
        $y = "Hello World!";
        echo strtolower($y);
        ?>
        <hr>
        <h1>Replacing Sting</h1>
        <?php
        $z = "Hello World!";
        echo str_repeat("World", "Dolly", $z);
        ?>
        <hr>
        <h1>Reverse String</h1>
        <?php
        $x = "hello world!";
        echo strrev($x);
        ?>
        <hr>
        <h1>Remove Whitespace</h1>
        <?php
        $y = " Hello World! ";
        echo trim($y);
        ?>

        <?php
        echo "<input value='" . $y ."'>";
        echo "<br>";
        echo "<input value='" . trim($y) . "'>";
        ?>
        <hr>
        <h1>Convert Strings into Array</h1>
        <?php
        $x = "Hello World!";
        $y = explode(" ", $x);
        print_r($y);
        ?>

    </body>
</html>