<html>
    <body>
        <h1>Integer type</h1>
        <?php
        $x = 5;
        var_dump($x);
        ?>
        <hr>
        <h1>String type</h1>
        <?php
        $x = "Hello world!";
        $y = 'Hello world!';
        
        var_dump($x);
        echo "<br>"; 
        var_dump($y);
        ?>
        <hr>
        <h1>Float type</h1>
        <?php
        $x = 10.365;
        var_dump($x);
        ?>
        <hr>
        <h1>Boolen type</h1>
        <?php
        $x = true;
        var_dump($x);
        ?>
        <hr>
        <h1>Array</h1>
        <?php
        $car = array("BMW","BYD","Volvo");
        var_dump($car);
        ?>
        <hr>
        <h1>Object type</h1>
        <?php
        class Shop {
            public $color;
            public $size;

            public function __construct($color, $size) {
                $this->color = $color;
                $this->size = $size;
            }

            public function message() {
                return "My shop is " . $this->color . "and" . $this->size . "!";
            }
        }

        $myShop = new Shop("White, Big");
        var_dump($myShop);
        ?>
        <hr>
        <h1>Null value</h1>
        <?php
        $x = "Hello World!";
        $x = null;
        var_dump($x)
        ?>
        <hr>
        <h2>Changing data type</h2>
        <?php
        $x = 5;
        var_dump($x);
        // Here ($x = 5) the variable is $x but the next step it erases the content in it as we add the $x as "Hello World"
        $x = "Hello World";
        var_dump($x);
        $z = 5;
        $z = (string) $z;
        var_dump($z);
        ?>
    </body>
</html>
