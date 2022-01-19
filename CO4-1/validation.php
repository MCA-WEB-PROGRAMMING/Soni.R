<html>
    <head>
        <style>
            table{
  
        background-color:skyblue;
        width: 500px;
        padding: 50px;
        margin: 100px;
            }
            </style>
        <title>validation form</title>
    </head>
    <body>
                <form method="POST">
            <table>
                <h1><u>Registration FORM</u></h1>
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
    </body>
    </html>
    <?php
    if(isset($_POST["submit"]))
    {
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
        }
        elseif(!$c4 || !$c5)
        {
            echo("only letters are allowed")."<br>";
        }
        if($age=="")
        {
            echo ("enter your age")."<br>";
        }
        if($phone=="")
        {
            echo ("enter your phone no")."<br>";
        }
        elseif(!$c6)
        {
            echo("phone number must contain 10 digits and start with 6/7/8/9 digits")."<br>";
        }
        if($email=="")
        {
            echo ("enter a email can't be blank")."<br>";
        }
        
        if($password==""&& strlen($password<6))
        {
            echo (" enter a valid password")."<br>";
        }
        elseif(!$c1 || !$c2 || !$c3)
        {
            echo("enter a valid password");
        }
    }
    ?>