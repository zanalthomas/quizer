<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style type="text/css">

      
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
.shade{
    		-webkit-box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
 border-radius: 20px;
  border-top: 1px solid #D6D6D6;
    	}
    	.shad{
    		-webkit-box-shadow: 0px 10px 15px -10px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 15px -10px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 15px -10px rgba(0, 0, 0, 0.7);
 border-radius: 20px;
  border-top: 1px solid #D6D6D6;
    	}
    	.new{
    		  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
    	}
    	.hov:hover {
    		background-color: #40F398;
    		 transition: 0.4s ease-in-out;
    	}
    	.iconcolor {
    		color:green;
    	}
    </style>
</head>
<body>
	 <ul data-aos="fade-down" class="nav bg-white py-2 px-lg-5">
  <div class='navbar-brand h2 d-flex align-items-center header text-dark'>Quizer</div>
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
<div class="container  text-center pt-5">
   <div class="row pt-5">
      <div class="col-lg-6 mx-auto">
        <h1 data-aos="fade-up" data-aos-delay="100" class="fw-light">Review Exam</h1>
        <div data-aos="fade-up" data-aos-delay="200" class="lead text-muted">
            Here is the review for your exam
        </div>
      </div> 
    </div>
</div>
<script type="text/javascript">
function changecolor(ans,userans,no)
{
 if(ans==userans)
 {
 	var str="#"+ans+no;
 	document.querySelector(str).style.background = "#40F398";
 }
 else
 {
 	var str="#"+userans+no;
 	document.querySelector(str).style.background = "#FA9900";
 	var sel="#"+ans+no;
    document.querySelector(sel).style.background = "#40F398";
 }
 }

</script>
<?php
session_start();
include_once "redirect.php";
$user=$_SESSION['username'];
$title=$_GET['title'];
$point=0;
	$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
$sql="select * from answers where tablename=".$title." and user='".$user."'";
$result_set=mysqli_query($db_handle,$sql);
$record=mysqli_fetch_array($result_set);
$sql="select * from questions where tablename=".$title."";
$result_set2=mysqli_query($db_handle,$sql);
$i=1;
while($record2=mysqli_fetch_array($result_set2))
{
	echo "<div data-aos='fade-up' data-aos-delay='300' class='container'>
  	<div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 mx-2'>
  		<div class='col-lg-8 col-sm-8 mx-auto mt-5 shade py-2 px-5'>
  			<div class='py-2 px-lg-3 px-sm-1'>
  			   <div class='row'>
  			   	<div class='col-lg-2'>
                   <div class='py-2'>
  			         <i class='fas fa-question fa-4x'></i>
  			       </div>   
  			   </div>
  			   <div class='col py-3'>
  			   <h5>".$record2['question']."</h5>
  			   </div>
  			   </div>
  			</div>
  		</div>
  	</div>
</div>";
$sql="select * from answers where tablename=".$title." and user='".$user."' and qno=".$record2['qno']."";
  $result_set=mysqli_query($db_handle,$sql);
   $record=mysqli_fetch_array($result_set);
echo"<div data-aos='fade-up' data-aos-delay='400' class='container py-3'>
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 mx-2'>
    	<div class='col-lg-8 mx-auto'>
    		 <div class='row'>
  			   	  <div class='col-lg-5 shad  m-2 px-5 py-4 mx-auto' id='A".$i."'>
  			   	  	
  			   	  	  <label for='radi'> A)  ".$record2['opt1']." </label>
  			   	  </div>
  			   	  <div class='col-lg-5 shad m-2 px-5 py-4 mx-auto' id='B".$i."'>
  			
  			   	  	  <label for='radi2'> B)  ".$record2['opt2']." </label>
  			   	  </div>
  			   	  <div class='col-lg-5 shad  m-2 px-5 py-4 mx-auto' id='C".$i."'>
  			   	  	
  			   	  	  C) ".$record2['opt3']."
  			   	  </div>
  			   	  <div class='col-lg-5 shad  m-2 px-5 py-4 mx-auto' id='D".$i."'>
  			   	  	
  			   	  	  <label for='radi4'> D) ".$record2['opt4']."</label>
  			   	  </div>
  			</div>   	  
  		</div>
  	</div>";
  echo "<div class='text-center h5 py-5'> Correct answer: ".$record2['ans']."<br>";

   echo "Your answer: ".$record['answer']."<br>";
   if($record2['ans']==$record['answer'])
   {
   echo "1 point";
   $point++;
   }
   else
   echo "0 point";
   echo "</div><hr>"; 

echo "<script type='text/javascript'>
changecolor('".$record2['ans']."','".$record['answer']."','".$i."');
</script>";
$i++;
}
echo " <div class='col-lg-6 col-sm-8 mx-auto mt-5 text-center shade py-2 px-5'>
        <div class='py-2 px-lg-3 px-sm-1'>
           <div class='row py-3'>
           <p class='card-title h3'> <i class='px-2 fas fa-check-circle'></i>Your Final Score is : ".$point." <br>
           </p>
           </div>
        </div>
      </div>";	
$sql="select * from leaderboard where username='".$user."' and title='".$title."'";
$result_set=mysqli_query($db_handle,$sql);
$count = mysqli_num_rows($result_set);
if($count==0)
{
$sql="insert into leaderboard values('".$user."',".$point.",'".$title."')";
$result_set=mysqli_query($db_handle,$sql);
}
?>
<script>
  AOS.init();
</script>
</body>
</html>