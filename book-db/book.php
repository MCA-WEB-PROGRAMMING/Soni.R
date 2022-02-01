<?php
$con=mysqli_connect("localhost","root","","book");
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
        <title>book</title>
    </head>
    <body>
                <form method="POST">
                    <center>
            <table>
                <h2><u>BOOK INFO:</u></h2>
                <tr>
                    <th>accessionenumber:</th>
                    <td><input type="number" name="number" id="n" placeholder="enter your book id"></td>
                </tr>
                <th>title:</th>
                <td><input type="text" name="title" id="t" placeholder="enter book title"></td>
                </tr>
                <tr>
                    <th>author:</th>
                    <td><input type="text" name="authors" id="n" placeholder="enter author's name"></td>
                </tr>
                <tr>
                    <th>edition:</th>
                    <td><input type="number" name="edition" id="n" placeholder="enter edition"></td>
                </tr>
                <tr>
                    <th>publisher:</th>
                    <td><input type="text" name="publisher" id="n" placeholder="enter name of publisher"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </center>
                </form>
                <form action="" method="POST">
                    <center>
                <h3><u>SEARCH THE BOOK</u></h3>

                    <table>
                        <tr>
                            <td>Enter the title
                            <input type="name" name="title" id="t" placeholder="search the book"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="search"  value="search"></td>
                        </tr>
        </table>
        </center>
        </form>

    
    <?php
     
    if(isset($_POST["submit"]))
    {
        $number=$_POST['number'];
        $title=$_POST['title'];
        $authors=$_POST['authors'];
        $edition=$_POST['edition'];
        $publisher=$_POST['publisher'];
       
        $query="INSERT INTO book_table(accessionnumber,title,authors,edition,publisher)VALUES('{$number}','{$title}','{$authors}','{$edition}','{$publisher}')";
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
        
    }
    if(isset($_POST["search"]))
    {
        $title=$_POST['title'];
        $search="SELECT * FROM book_table WHERE title Like '%$title%'";
        $data=mysqli_query($con,$search);
        echo'<table border=1 align="left"padding="25%"> <tr><th>accessionnumber</th><th>title</th><th>author</th><th>edition</th><th>publisher</th></tr>';
        while($res=mysqli_fetch_assoc($data))
        {
            
            echo'<tr>';
            echo'<td>';
                 echo $res['accessionnumber'];
            echo'</td>';
            echo'<td>';
                echo $res['title'];
           echo'</td>';
           echo'<td>';
                echo $res['authors'];
          echo'</td>';
          echo'<td>';
                echo $res['edition'];
         echo'</td>';
         echo'<td>';
                echo $res['publisher'];
        echo'</td></tr>';

        }

        echo'</table>';
    }
    ?>
    </body>
    </html>