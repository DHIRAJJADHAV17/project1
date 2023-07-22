<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

</head>
<body>

<center>
    <h1>Management System</h1><br>
    <form action="" method="post">
        <table>
        <tr>
			<td>
            <input type="submit" name="admin_login" value= "Admin Login"><br>
            </td>
		</tr>
        <tr>
			<td>
            <input type="submit" name="teacher_login" value= "Teacher Login"><br>
            </td>
		</tr>
        <tr>
			<td>
            <input type="submit" name="student_login" value= "Student Login"><br>
            </td>
		</tr>
    
    

        </table>
       
    </form>

    <?php
    if(isset($_POST['admin_login'])){
        header("Location: admin_login.php");
    }
    if(isset($_POST['teacher_login'])){
        header("Location:teacher_login.php");
    }
    if(isset($_POST['student_login'])){
        header("Location:student_login.php");
    }
    
    
    ?>
</center>
    
</body>
</html>