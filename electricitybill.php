<html>
    <head>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>Enter the meter number:
                <input type="number" name="number" value="" >
</td>
</tr>
<tr>
                <td>Enter the number of units:
                <input type="number" name="unit" value="" >
</td>
</tr>
<tr>
                <td>Enter the category:
                <select name="tariff" >
                    <option>select</option>
                    <option value="Rural">Rural</option>
                    <option value="Residential">Residential</option>
                    <option value="Commercial">Commercial</option>
</select>

</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"/></td>
</tr>
</table>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $number=$_POST['number'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff=="Rural")
    {
        if($unit>0&&$unit<=50)
        {
            $e=20;
            $price=(($unit* .25)+$e);
            echo "$price";
        }
        else if($unit>50&&$unit<=100)
        {
            $e=25;
            $price=(($unit* .55)+$e);
        }
        else if($unit>100&&$unit<=150)
        {
            $e=30;
            $price=(($unit* .5)+$e);
        }
        else if($unit>150&&$unit<=250)
        {
            $e=35;
            $price=(($unit* .2)+$e);
            
        }
        else if($unit>250&&$unit<=400)
        {
            $e=40;
            $price=(($unit* .4)+$e);
           
        }
        else if($unit>400)
        {
            $e=45;
            $price=(($unit* .3)+$e);
        }
    }
    if($tariff=="Residential")
    {
    if($unit>0&&$unit<=50)
        {
            $e=30;
            $price=(($unit* .35)+$e);
            echo "$price";
        }
        else if($unit>50&&$unit<=100)
        {
            $e=30;
            $price=(($unit* .75)+$e);
            echo "$price";
        }
        else if($unit>100&&$unit<=150)
        {
            $e=30;
            $price=(($unit* .35)+$e);
            echo "$price";
        }
        else if($unit>150&&$unit<=250)
        {
            $e=40;
            $price=(($unit* .75)+$e);
            echo "$price";
        }
        else if($unit>250&&$unit<=400)
        {
            $e=40;
            $price=(($unit* .75)+$e);
            echo "$price";
        }
        else if($unit>400)
        {
            $e=40;
            $price=(($unit* .35)+$e);
        }
    }
    if($tariff=="Commercial")
    {
    if($unit>0&&$unit<=50)
        {
            $e=30;
            $price=(($unit* .35)+$e);
        }
        else if($unit>50&&$unit<=100)
        {
            $e=35;
            $price=(($unit* .75)+$e);
        }
        else if($unit>100&&$unit<=150)
        {
            $e=40;
            $price=(($unit* .35)+$e);
        }
        else if($unit>150&&$unit<=250)
        {
            $e=45;
            $price=(($unit* .75)+$e);
        }
        else if($unit>250&&$unit<=400)
        {
            $e=50;
            $price=(($unit* .75)+$e);
        }
        else if($unit>400)
        {
            $e=55;
            $price=(($unit* .35)+$e);
        }

    }
    echo "meter number:". $number;
        echo"<br>";
        echo "units:". $unit;
        echo"<br>";
        echo "extra charge:". $e;
        echo"<br>";
        echo "Total $unit units of charges". $price;
        echo "<br>";
}
?>