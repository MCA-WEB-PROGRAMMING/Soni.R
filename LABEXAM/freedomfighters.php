<html>
    <head>
        <style>
            body{
                background-color:lightblue;
            }
            </style>
</head>
<body>
    <center>
    <h1><u>freedom fighters</u></h1>
<?php
$name=array("Ghandhi","Nehru","Subhash","Rahul");
echo "<table border='2'><tr><th>SL.NO.</th><th>name</th></tr>";
foreach($name as $key=>$value)
            {
                echo"<tr><td>". $key."</td><th>$value</th></tr>";
            }
echo "</table>";
?>
</center>
</body>
</html>