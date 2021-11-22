<?php 
session_start();
include_once "redirect.php";
?>
<html>
	<head>
    <title>Quizer-Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href = "img/logo.png">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');

    </style>
</head>
<body> 

  <ul class="nav bg-white py-3 px-lg-5 ">
  <div data-aos="fade-right" class='navbar-brand h2 d-flex align-items-center header text-dark'>Quizer</div>
  <li data-aos="fade-right" data-aos-delay="100" class="nav-item">
    <a class="nav-link text-dark" href="#"><b>Home</b></a>
  </li>
  <li data-aos="fade-right" data-aos-delay="200" class="nav-item">
    <a class="nav-link  text-dark" href="http://localhost/Bsg Site/myexams.php?q=0">My exams</a>
  </li>
  <li data-aos="fade-right" data-aos-delay="300" class="nav-item">
    <a class="nav-link  text-dark" href="create.html">Create quiz</a>
  </li>
 <li data-aos="fade-right" data-aos-delay="400" class="nav-item">
    <a class="nav-link  text-dark" href="http://localhost/Bsg Site/message.php">Messages</a>
  </li>
</ul>
<div class="container  text-center pt-5">
   <div class="row pt-5">
      <div class="col-lg-6 mx-auto">
        <h1 data-aos="fade-up" data-aos-delay="500" class="fw-light">Exam Invitations</h1>
        <div data-aos="fade-up" data-aos-delay="600" class="lead text-muted">
          <?php  
           echo "Hi, ".$_SESSION['username'].". The exam invitations will be displayed here. You can also review your previous exams.";
           ?>
        </div>
      </div> 
    </div>
</div>

<?php
$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
$sql="select * from invitation where username='".$_SESSION['username']."' order by sino desc";
$result_set=mysqli_query($db_handle,$sql);
$count = mysqli_num_rows($result_set);
if($count==0){
 echo "<p data-aos='fade-up' data-aos-delay='700' class='col-lg-4 text-dark col-sm-10 text-center mx-auto lead  py-3 '><img class='img-responsive img-fluid py-4' src='img/welcome.svg' ><br>Looks Like You are New. You Could see Your Exam Invitations Here When Someone Invites You For an Exam. You Can Also Create An Exam At &quot;Create quiz&quot; Tab</p>";
}
else{
echo "<div class='container mt-4'>
  <div class='row mx-2'>";
  $i=0;
while($records=mysqli_fetch_array($result_set))
{  
    $sql="select * from exam where sino='".$records['title']."'";
    $result_set2=mysqli_query($db_handle,$sql);
    $record=mysqli_fetch_array($result_set2);
    $sql2="select * from leaderboard where title='".$record['sino']."' and username='".$_SESSION['username']."'";
    $result_set3=mysqli_query($db_handle,$sql2);
    $count2 = mysqli_num_rows($result_set3);
    if(is_null($record['thumb']) || strlen($record['thumb'])==0)
      $thumb='cover.jpg';
    else
      $thumb=$record['thumb'];
    if($count2==0)
    {
      $sql3="select profile from users where username='".$record['username']."' LIMIT 1";
      $result_set4=mysqli_query($db_handle,$sql3);
      $profile = mysqli_fetch_assoc($result_set4);
      if(is_null($profile['profile']) || strlen($profile['profile'])==0)
        $img='icon.PNG';
      else
        $img=$profile['profile'];
      $i++;
	echo"<div data-aos='zoom-in' data-aos-delay='700' class='col-lg-4  col-md-6 p-lg-3 p-md-4 cards mx-auto'>
          <li>
          <a href='http://localhost/Bsg Site/instructions.php?qno=1&&title=".$record['sino']."' class='card'>
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
          <p class='card__description text-secondary'>Examiner : ".$record['username']."<br>Number of questions : ".$record['noq']."
          </p>
        </div>
      </a>
    </li>
    <li>
    </div>";
    }
}
  if($i==0)
  {

      echo "<p data-aos='zoom-in' data-aos-delay='600' class='col-lg-4 text-dark col-sm-10 text-center mx-auto lead  py-5'><img  class='img-responsive img-fluid' src='img/celebration.svg' ><br>Wohoo! You have no pending exam invitaions</p>";
  }
echo "</div></div>";
echo "
<div class='container  text-center pt-5'>
   <div class='row pt-5'>
      <div class='col-lg-6 mx-auto'>
        <h1 data-aos='fade-up' class='fw-light'>Review Exams</h1>
        <div data-aos='fade-up' data-aos-delay='100' class='lead text-muted'>";  
           echo $_SESSION['username'].", These are your previous exams.<br> You can review it.";
        echo "
        </div>
      </div> 
    </div>
</div>";
$sql="select * from invitation where username='".$_SESSION['username']."' order by sino desc";
$result_set=mysqli_query($db_handle,$sql);
echo "<div class='container py-4'>
  <div class='row mx-2'>";
      $i=0;
while($records=mysqli_fetch_array($result_set))
{  
    $sql="select * from exam where sino='".$records['title']."'";
    $result_set2=mysqli_query($db_handle,$sql);
    $record=mysqli_fetch_array($result_set2);
    $sql2="select * from leaderboard where title='".$record['sino']."' and username='".$_SESSION['username']."'";
    $result_set3=mysqli_query($db_handle,$sql2);
    $point=mysqli_fetch_array($result_set3);
    $count2 = mysqli_num_rows($result_set3);
    if(is_null($record['thumb']) || strlen($record['thumb'])==0)
        $thumb='cover.jpg';
    else
        $thumb=$record['thumb'];

    if($count2>0)
    {
      $sql3="select profile from users where username='".$record['username']."' LIMIT 1";
      $result_set4=mysqli_query($db_handle,$sql3);
      $profile = mysqli_fetch_assoc($result_set4);
      if(is_null($profile['profile']))
        $img='icon.PNG';
      else
        $img=$profile['profile'];
      $i++;
  echo"<div data-aos='zoom-in' class='col-lg-4  p-lg-3 cards mx-auto'>
          <li>
          <a href='http://localhost/Bsg Site/review.php?title=".$record['sino']."' class='card'>
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
          <p class='card__description text-secondary'> Your score : ".$point['point']."/".$record['noq']."
          </p>
        </div>
      </a>
    </li>
    <li>
    </div>";
  }
}
  if($i==0)
  {

      echo "<p class='col-lg-4 text-dark col-sm-10 text-center mx-auto lead  py-5'><img class='img-responsive img-fluid' src='img/celebration.svg' ><br> You haven't attempted any quiz.</p>";
  }
} 
?>
</div>
</body>
<script>
  AOS.init();
</script>
</html>
