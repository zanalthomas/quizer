<?php
session_start();
if($_GET['val']==1)
{
$user=$_POST['username'];
$pass=$_POST['password'];
$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
$sql="select * from users where username='".$user."' and password='".$pass."'";
$result_set=mysqli_query($db_handle,$sql);
$count = mysqli_num_rows($result_set);
if ($count == 1) {
    session_start();
    $_SESSION['username']     = $user;
    $_SESSION['qn']=1;
    header('location:http://localhost/Bsg Site/option.php');
} else
    header("location:index.html");
}
else
{
	session_start();
	$user=$_POST['username'];
$pass=$_POST['password'];
$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
$sql="insert into users(username,password) values ('".$user."','".$pass."')";
$result_set=mysqli_query($db_handle,$sql);
$sql="insert into answers(user) values ('".$user."')";
$result_set=mysqli_query($db_handle,$sql);

    $_SESSION['username']     = $user;
    echo $_SESSION['username'];
    header('location:http://localhost/project/option.php');
}
?>
