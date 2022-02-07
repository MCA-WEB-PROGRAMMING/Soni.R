<?php
$con=mysqli_connect("localhost","root","","employee1");
if(mysqli_connect_errno())
{
    printf("connection failed",mysqli_connect_error());
    echo"<br>";
}
else
{
    echo("connection successfull");
    echo"<br>";
}
?>
<html>
    <head>
        <style>
            body{
                background-color:lavender;
            }
            h2{
                color:red;
            }
            table{
                background-color:pink;
                padding: 30px;
                width: 1px;
                border:black;
            }
            </style>
        <title>EMPLOYEE INFO</title>
    </head>
    <body>
                <form method="POST">
                    <center>
            <table>
                <h2><u>EMPLOYEE INFO:</u></h2>
                <tr>
                    <th>Emp ID:</th>
                    <td><input type="number" name="employeeid" id="e"></td>
                </tr>
                <th>Name:</th>
                <td><input type="text" name="employee" id="ep"></td>
                </tr>
                <tr>
                    <th>Job Name:</th>
                    <td><input type="text" name="jobname" id="j"></td>
                </tr>
                <tr>
                    <th>Manager Id:</th>
                    <td><input type="number" name="managerid" id="m"></td>
                </tr>
                <tr>
                    <th>Salary:</th>
                    <td><input type="nmuber" name="salary" id="s"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>

    
    <?php
     
    if(isset($_POST["submit"]))
    {
        $employeeid=$_POST['employeeid'];
        $employeename=$_POST['employee'];
        $jobname=$_POST['jobname'];
        $managerid=$_POST['managerid'];
        $salary=$_POST['salary'];
       
        $query="INSERT INTO employee_tbl(id,name,jobname,managerid,salary)VALUES('{$employeeid}','{$employeename}','{$jobname}','{$managerid}','{$salary}')";
        if(mysqli_query($con,$query))
        {
            echo("successfully connected");
            echo"<br>";
        }
        else
        {
            echo(mysqli_error($con));
            echo("connection failed");
            echo"<br>";
        }
        ?>
        <h2>Employees with salary greater than 35000</h2>
    '<table border="1">
    <tr>
    <th>Employee Name</th>
    <th>Salary</th>
    </tr>
    <?php
        $select="SELECT name,salary FROM employee_tbl WHERE salary>35000";
        $data=mysqli_query($con,$select);
        while($res=mysqli_fetch_assoc($data))
    {
    echo '<tr>';
    echo '<td>';
        echo $res['name'];
     echo'</td>';
    echo '<td>';
        echo $res['salary'];
     echo'</td>';
    echo'</tr>';
    
}
 echo'</table>';
}
?>

</body>
</html>