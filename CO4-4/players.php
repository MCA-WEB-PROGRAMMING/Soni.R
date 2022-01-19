<html>
<body>
<?php
$players=array("Dhoni","Kholi","Ashwin","Sachin","Sanju","Malinga","Rahul");
echo "<table border='2'><tr><th>SL.NO.</th><th>PLAYERS</th></tr>";
foreach($players as $key=>$value)
            {
                echo"<tr><td>". $key."</td><th>$value</th></tr>";
            }
echo "</table>";
?>
</body>
</html>