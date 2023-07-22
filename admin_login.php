<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login </title>

</head>
<body>

<center>
    <h3>Admin Login Page</h3><br>
    <form action="" method="post">
        Email:<input type="email" name="email" required><br>
    Password:<input type="password" name="password" required><br>
    <input type="submit" name="submit" >

</form><br>
<?php
session_start();
if(isset($_POST['submit'])){


    $connection =  mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"pro");
    $query ="select * from login where email ='$_POST[email]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        if($row['email']==$_POST['email']){
            if($row['password']==$_POST['password']){
                $_SESSION['name'] =  $row['name'];
				$_SESSION['email'] =  $row['email'];
            header("Location: admin_dashboard.php");
            }
            else{
                echo "wrong password";
            }
        }
        else{
            echo "wrong email";
        }
    }    

}


?>
</center>
    
</body>
</html>