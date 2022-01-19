<html>
    <head>
</head>
<body>
    <?php
    $name=array("anu","tessy","jefri","jeri","catherine","kevin");
    echo"Array:";
    print_r($name);
    echo"<br>"."Array in ascending order:";
    asort($name);
    print_r($name);
    echo"<br>"."Array in descending order:";
    arsort($name);
    print_r($name);
    ?>
    </body>
    </html>