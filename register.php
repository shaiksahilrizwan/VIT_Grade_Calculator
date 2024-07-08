<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now!!</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="id">RegdNo</label>
        <input type="text" name="id">
        <label for="pass">
            Password
        </label>
        <input type="password" name="pss">
        <button name="reg" type="submit">Register</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['reg'])){
        $ids=htmlspecialchars($_POST['id']);
        $passs=htmlspecialchars(sha1($_POST['pss']));
        $conn=mysqli_connect("localhost","root","","PASS") or die("Not Available at the Moment !!");
        $sql="INSERT INTO STUDENT VALUES('{$ids}','{$passs}')";
        $result=mysqli_query($conn,$sql)or die("Server Busy!!");
        header("Location: login.php");
        mysqli_close($conn);
    }
?>