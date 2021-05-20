<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
.shade{
        -webkit-box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
 border-radius:20px;
  border-top: 1px solid #D6D6D6;
      }
      .shad{
        -webkit-box-shadow: 0px 10px 15px -10px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 15px -10px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 15px -10px rgba(0, 0, 0, 0.7);
 border-radius: 20px;
  border-top: 1px solid #D6D6D6;
      }
</style>
	
</head>
<body> 

  <ul class="nav bg-white py-2 px-lg-5">
  <div class='navbar-brand d-flex align-items-center header text-dark'>Xam</div>
  <li class="nav-item">
    <a class="nav-link text-dark" href="http://localhost/Bsg Site/option.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  text-dark" href="http://localhost/Bsg Site/myexams.php?q=0">My exams</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  text-dark" href="create.html">Create quiz</a>
  </li>
 <li class="nav-item">
    <a class="nav-link  text-dark" href="http://localhost/Bsg Site/message.php">Messages</a>
  </li>
</ul>
<div class='container  text-center p-5'>
   <div class='row pt-5'>
      <div class='col-lg-6 mx-auto'>
        <h1 class='fw-light'>Notifications</h1>
        <div class='lead text-muted'>
          If someone tries to attempt cheating by changing the tabs or switch between apps when attending your exams, then you will be notified.
        </div>
      </div> 
    </div>
</div>
  <div class="container px-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mx-2">
     
<?php
session_start();
$user=$_SESSION['username'];
$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
$sql="select message from messages where dto='".$user."' order by sino desc";
$result_set=mysqli_query($db_handle,$sql);
$count = mysqli_num_rows($result_set);
if($count==0){
 echo "<p class='col-lg-4 text-dark col-sm-10 text-center mx-auto lead  py-3'><img class='img-responsive img-fluid py-4' src='img/welcome.svg' ><br>Look like you are new..you have nothing to display</p>";
 exit;
}
$i=1;
while($record=mysqli_fetch_array($result_set))
{
	echo " <div class='col-lg-8 col-sm-8 mx-auto mt-5  shade py-2 px-5'>
        <div class='py-2 px-lg-3 px-sm-1'>
           <div class='row'>
            <div class='col-lg-2'>
                   <div class='py-2'>
                 <img src='img/ad3.jpg' class='card__thumb'>
               </div>   
           </div>
           <div class='col '>

           <p class='card-title'>".$record['message'].".<br>
             <p class='text-muted'>1 hour ago</p>
           </p>
           </div>
           </div>
        </div>
      </div>";	
}
?>
</div>
</div>
</body>
