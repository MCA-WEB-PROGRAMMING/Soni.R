<?php
    $conn=mysqli_connect("localhost","root","","valiadation");
    if($conn)
    {
        echo("connect successfully");
        echo "<br>";
    }
    else{
        echo("error");
        echo"<br>";
    }
    if(isset($_POST["submit"]))
    {
        $flag=0;
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $c1=preg_match('@[a-z]@',$password);
        $c2=preg_match('@[A-Z]@',$password);
        $c3=preg_match('@[0-9]@',$password);
        $c4=preg_match('@[a-z]@',$name);
        $c5=preg_match('@[A-Z]@',$name);
        $c6= preg_match('@[6-9]\d{9}@', $phone);
        
        if($name=="")
        {
            echo ("enter your name")."<br>";
            $flag=1;
        }
        elseif(!$c4 || !$c5)
        {
            echo("only letters are allowed")."<br>";
            $flag=1;
        }
        if($age=="")
        {
            echo ("enter your age")."<br>";
            $flag=1;
        }
        if($phone=="")
        {
            echo ("enter your phone no")."<br>";
            $flag=1;
        }
        elseif(!$c6)
        {
            echo("phone number must contain 10 digits and start with 6/7/8/9 digits")."<br>";
            $flag=1;
        }
        if($email=="")
        {
            echo ("enter a email can't be blank")."<br>";
            $flag=1;
        }
        
        if($password==""&& strlen($password<6))
        {
            echo (" enter a valid password")."<br>";
            $flag=1;
        }
        elseif(!$c1 || !$c2 || !$c3)
        {
            echo("enter a valid password");
            $flag=1;
        }
        if($flag==0)
        {
        $query="INSERT INTO val_table(name,age,email,phone,password) VALUES('$name','$age','$email','$phone','$password')";
if(mysqli_query($conn,$query))
{
    echo("Sucessfully connected");
    echo"<br>";
}
else
{
 echo("inserton failed");
 echo"<br>";
}}}
?>
<html>
    <head>
        <style>
            table{
  
  background-color:skyblue;
  width: 500px;
  padding: 50px;
  margin: 100px;
            }
            div{
                float:left;
                align-items:center;
                display:flex;
                justify-content:center;
            }
            </style>
        <title>validation form</title>
    </head>
    <body>
                <form method="POST">
                <h1><u>Registration FORM</u></h1>
                    <div>
            <table>
                <tr>
                    <th>name:</th>
                    <td><input type="text" name="name" id="n" placeholder="enter your name"></td>
                </tr>
                <th>Age:</th>
                <td><input type="number" name="age" value="a" placeholder="enter your name"></td>
                </tr>
                <tr>
                    <th>email:</th>
                    <td><input type="text" name="email" id="e" placeholder="enter your mail"></td>
                </tr>
                <tr>
                    <th>phone:</th>
                    <td><input type="phone no" name="phone" id="p" placeholder="enter your phone no:"></td>
                </tr>
                <tr>
                    <th>password</th>
                    <td><input type="password" name="password" id="p" placeholder="enter password:"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
                </form>
                <table border="1">
<tr>
<th>Username</th>
<th>Address</th>
<th>Age</th>
<th>Phone</th>
<th>Email</th>
</tr>
    <?php
$s="SELECT * FROM val_table";
$data=mysqli_query($conn,$s);
while($res=mysqli_fetch_array($data))
{
    ?>
   <tr>
    <td><?php echo $res['name'];?></td>
    <td><?php echo $res['age'];?></td>
    <td><?php echo $res['email'];?></td>
    <td><?php echo $res['phone'];?></td>
    <td><?php echo $res['password'];?></td>
</tr>
<?php
}
?>
</table>
</div>
</body>
</html>