<html>
    <body>
        <h1>Two ways to write the php code</h2>
        <?php
        echo "Hello";
        // This is one of the method to write this the other is given below.
        echo ("Hello");
        // This is the other method to write it.
        ?>
        <hr>
        <h1>Display Text (Echo)</h1>
        <?php
        echo "<h2>php is Fun!</h2>";
        echo "Hello World<br>";
        echo "I'm about to learn php!";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
        ?>
        <hr>
        <h2>Display Variable(Echo)</h2>
        <?php
        $tex1 = "Learn";
        $tex2 = "W3 School.com";

        echo "<h2>$tex1</h2>";
        echo "<p>Study php at $tex2</p>";
        ?>
        <hr>
        <h1>Using Single Quotes(Echo)</h1>
        <?php
        $txt1 = "Learn";
        $txt2 = "W3Schools.com";

        echo '<h2>' . $txt1 . '</h2>';
        echo '<p>Study php at ' . $txt2 . '</p>';
        ?>
        <hr>
        <h1>php print statment(Print)</h1>
        <?php
        print "Hello";
        print("Hello");
        ?>
        <hr>
        <h1>php Display text (Print)</h1>
        <?php
        print "<h2>php is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn php!";
        ?> 
        <hr>
        <h1>php Display Variable(Print)</h1>
        <?php
        $txt1 = "Learn php";
        $txt2 = "W3Schools.com";

        print "<h2>$txt1</h2>";
        print "<p>Study php at $txt2</p>";
        ?>
        <hr>
        <h1>Using Single Quotes(Print)</h1>
        <?php
        $txt1 = "Learn php";
        $txt2 = "W3Schools.com";

        print '<h2>' . $txt1 . '</h2>';
        print '<p>Study php at ' . $txt2 . '</p>';
        ?>
        <hr>
        </body>
        </html>