<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<head>
    <title>Quizer-Myexams</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href = "img/logo.png">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style type="text/css">
      a {
        text-decoration: none;
      }
      
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');

    </style>
</head>
<body> 

  <ul  class="nav bg-white py-3 px-lg-5">
  <div  class='navbar-brand h2 d-flex align-items-center header text-dark'>Quizer</div>
  <li   class="nav-item">
    <a class="nav-link text-dark" href="http://localhost/Bsg Site/option.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  text-dark" href="http://localhost/Bsg Site/myexams.php?q=0"><b>My exams</b></a>
  </li>
  <li  class="nav-item">
    <a class="nav-link  text-dark" href="create.html">Create quiz</a>
  </li>
 <li  class="nav-item">
    <a class="nav-link  text-dark" href="http://localhost/Bsg Site/message.php">Messages</a>
  </li>
</ul>

<?php
session_start();
include_once "redirect.php";
$user=$_SESSION['username'];
$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
if($_GET['q']==0)
{
  echo "<div class='container  text-center pt-5'>
   <div class='row pt-5'>
      <div class='col-lg-6 mx-auto'>
        <h1  data-aos='fade-up' data-aos-delay='500' class='fw-light'>My Exams</h1>
        <div data-aos='fade-up' data-aos-delay='600' class='lead text-muted'>
          The exams created by you will appear here. You can invite participants, see rank list and delete an exam.
        </div>
      </div> 
    </div>
</div>";
$sql="select * from exam where username='".$user."' order by sino desc";;
$result_set=mysqli_query($db_handle,$sql);
$count = mysqli_num_rows($result_set);
$sql2="select profile from users where username='".$user."' LIMIT 1";
$result_set2=mysqli_query($db_handle,$sql2);
$profile = mysqli_fetch_assoc($result_set2);
if(is_null($profile['profile'])  || strlen($profile['profile'])==0)
    $img='icon.PNG';
else
     $img=$profile['profile'];
if($count==0){
 echo "<p data-aos='fade-up' data-aos-delay='700' class='col-lg-4 text-dark col-sm-10 text-center mx-auto lead  py-3'><img class='img-responsive img-fluid py-4' src='img/welcome.svg' ><br>Look like you are new..you have nothing to display</p>";
}
else{
echo "<div class='container mt-4'>
  <div class='row mx-2'>";
$i=1;
while($record=mysqli_fetch_array($result_set))
{
    if(is_null($record['thumb']) || strlen($record['thumb'])==0)
        $thumb='cover.jpg';
    else
        $thumb=$record['thumb'];

  echo"<div data-aos='fade-up' data-aos-delay='700' class='col-lg-4  col-md-6 p-lg-3 p-md-4 cards mx-auto'>
          <li>
          <div class='card'>
        <img src='img/".$thumb."' class='card__image'>
        <div class='card__overlay'>
          <div class='card__header'>
            <svg class='card__arc' xmlns='http://www.w3.org/2000/svg'>
              <path />
            </svg>
            <img src='img/".$img."' class='card__thumb'>
            <div class='card__header-text'>
              <h3 class='card__title'>".$record['tablename']."</h3>
              <span class='card__status'>1 hour ago</span>
            </div>
          </div>
          <p class='card__description text-secondary'>Number of questions : ".$record['noq']."<br><br>
          <a class='mx-2' href='http://localhost/Bsg Site/myexams.php?q=1 && title=".$record['sino']."'><i class='fas fa-users mx-2 ' title='Leaderboard'></i></a>
          <a class='mx-4' href='http://localhost/Bsg Site/invite.php?title=".$record['sino']."'><i class='fas fa-bullhorn mx-2 ' title='Invite'></i></a>
          <a onclick='confirm()' href='http://localhost/Bsg Site/myexams.php?q=2 && title=".$record['sino']."'><i class='fas fa-trash-alt mx-2 ' title='Delete'></i></a>
          </p>
        </div>
      </div>
    </li>
    <li>
    </div>";
	$i++;
}
echo "</div></div>";
}
}
else if($_GET['q']==1)
{

  $title=$_GET['title'];
  $sql="select * from exam where sino='".$title."'";;
  $result_set=mysqli_query($db_handle,$sql);
  $record=mysqli_fetch_array($result_set);
  $tablename=$record['tablename'];
   echo "<div class='container  text-center pt-5'>
   <div class='row pt-5'>
      <div class='col-lg-6 mx-auto'>
        <h1 class='fw-light'>Leaderboard - ".$tablename."</h1>
        <div class='lead text-muted'>
          Here is the result for your quiz ".$tablename." .
        </div>
      </div> 
    </div>
</div>
 <div class='container p-lg-5 p-sm-2'>";
  $db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
  $sql="select * from leaderboard where title='".$title."' order by point desc";;
   $result_set=mysqli_query($db_handle,$sql);
   $count = mysqli_num_rows($result_set);
if($count==0){
 echo "<p class='col-lg-4 text-dark col-sm-10 text-center mx-auto lead p-lg-0 p-sm-3'><img class='img-responsive img-fluid py-4' src='img/no data.svg' ><br>Nobody has attempted your quiz '".$tablename."' . You can invite participants. <br> <a class='mt-4 w-20  mx-auto btn  btn-primary' href='http://localhost/Bsg Site/invite.php?title=".$title."'>Invite participants</a></p>";
 exit;
}
$i=1;
	echo "<table class='table table-striped table-dark col-8 p-5' id='tblCustomers'>";
echo"<tr>";
  echo"<th><center>Rank</center></th>";
  echo"<th><center>Name</center></th>";
  echo"<th><center>Points</center></th></tr>";
while($record=mysqli_fetch_array($result_set))
{
  echo"<tr>";
  echo"<td><center>".$i."</center></td>";
  echo"<td><center>".$record['username']."</center></td>";
  echo"<td><center>".$record['point']."</center></td></tr>";
  $i++;
  
}
echo "</table>";
echo "<a class='mt-4 w-20  mx-auto btn  btn-primary' href='http://localhost/Bsg Site/invite.php?title=".$title."'>Invite participants</a>
<input class='mt-4 w-20  mx-auto btn  btn-secondary ' type='button' id='btnExport' value='Export to Excel sheet' />
  </div>";
}
else if($_GET['q']==2)
{
	$title=$_GET['title'];
	$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
    $sql="delete from exam where sino='".$title."'";
   $result_set=mysqli_query($db_handle,$sql);
   $sql="delete from questions where tablename='".$title."'";
   $result_set=mysqli_query($db_handle,$sql);
   $sql="delete from answers where tablename='".$title."'";
   $result_set=mysqli_query($db_handle,$sql);
   $sql="delete from leaderboard where title='".$title."'";
   $result_set=mysqli_query($db_handle,$sql);
   $sql="delete from invitation where title='".$title."'";
   $result_set=mysqli_query($db_handle,$sql);
   $sql="drop view ".$title."";
   $result_set=mysqli_query($db_handle,$sql);
   $sql="drop view ans".$title."";
   $result_set=mysqli_query($db_handle,$sql);
   header("location:http://localhost/Bsg Site/myexams.php?q=0");
}
?>
<script>
  AOS.init();
</script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="assets/table2excel.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#btnExport").click(function () {
                $("#tblCustomers").table2excel({
                    filename: "Table.xls"
                });
            });
        });
        function confirm()
        {
          alert('are you sure');
          return false;
        }
    </script>
