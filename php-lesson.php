<html>

<head>
    <title>html Lessons</title>
    <style>
        h1 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            overflow: auto;
            background-color: #333333;
        }

        li {
            /* float: left; */
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111111;
        }
    </style>
</head>
<body>
    <div id="left_side">
        <ul>

            <li><a href="php/home.php" target="iframe-html">Introduction</a></li></ul>
            <li><a href="php/syntax.php" target="iframe-html">Introduction</a></li></ul>
        </ul>
    </div>
    <div id="right_side">
        <iframe src="php/home.php" name="iframe-html"></iframe>
    </div>

</body>

</html>