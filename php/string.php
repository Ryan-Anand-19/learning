<html>
    <head>
        <h1>Strings</h1>
        <?php
        echo "Hello World!";
        echo "<br>";
        print ("Hello World!");
        ?>
        <hr>
        <h1>Double or Single Quotes ?</h1>
        <?php
        $x = Ryan;
        echo "Hello $x";
        $y = Ryan;
        echo "Hello $y";
        // Here both ("") and ('') donot gives the same output here 
        // Here the ('') single quotes give the output as Hello $y
        ?> 
        <hr>
        <h1>String Length</h1>
        <?php
        echo strlen("Hello World!")
        ?>
        <hr>
        <h1>Word Count </h1>
        <?php
        echo str_word_count("Hello World!");
        ?>
        <hr>
        <h1>Search For Text Within a String</h1>
        <?php
        echo strpos("Hello World!", "World")
        ?>

    </body>
</html>