<html>
	<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
<?php
session_start();
$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
$title=$_GET['title'];
$n=$_GET['qno'];
if( isset($_POST['ajax'])){
    echo $_POST['ajax'];
    $sql="select username from exam where tablename='".$title."'";
    $result_set=mysqli_query($db_handle,$sql);
    $record=mysqli_fetch_array($result_set);
    $destination=$record['username'];
    $sql="insert into messages(dto,message) values('".$destination."','".$_SESSION['username']." has attempted plagarism in your quiz ".$title." at question ".$n."')";
    $result_set=mysqli_query($db_handle,$sql);
    exit;
}
$n=$_GET['qno'];
$sql="select noq from exam where tablename='".$title."'";
$result_set=mysqli_query($db_handle,$sql);
$records=mysqli_fetch_array($result_set);
$noq=$records['noq'];
$p=$n-1;
if($n>1)
{
	$ans=$_POST['opts'];
if(isset($ans)){
$sql="insert into answers(user,qno,tablename) values('".$_SESSION['username']."',".$p.",'".$title."')";
$result_set=mysqli_query($db_handle,$sql);
$sql="update answers set answer='".$ans."' where user='".$_SESSION['username']."' and tablename='".$title."' and qno=".$p."";
$result_set=mysqli_query($db_handle,$sql);
}
}
if($n<=$noq)
{
$sql="select * from ".$title." where qno='".$n."'";
$result_set=mysqli_query($db_handle,$sql);
$records=mysqli_fetch_array($result_set);
$k=$n+1;
echo "
<div class='container text-center'>
  	<div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 mx-2'>
  		<div class='col mx-auto mt-5  py-2 px-5'>
  			   <i class='far fa-clock'></i>
              Time Left
  			   <h5><div id='count'></div></h5>
  			</div>
  		</div>
  	</div>
</div>
<div class='container'>
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
  			   <h5>Q".$n.". ".$records['question']."</h5>
  			   </div>
  			   </div>
  			</div>
  		</div>
  	</div>
</div>
<form name='frm' method='post'   action='question.php?qno=".$k."&title=".$title."'>
<input type='text' name='plagarism' class='visually-hidden' value='".$p."'>
    <div class='container py-3'>
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 mx-2'>
    	<div class='col-lg-8 mx-auto'>
    		 <div class='row'>
  			   	  <div class='col-lg-5 shad hov m-2 px-5 py-4 mx-auto'>
  			   	  	<input type='radio' name='opts' value='A' id='radi'>
  			   	  	  <label for='radi'> A) ".$records['opt1']." </label>
  			   	  </div>
  			   	  <div class='col-lg-5 shad hov m-2 px-5 py-4 mx-auto'>
  			   	  	 <input type='radio' name='opts' value='B' id='radi2'>
  			   	  	  <label for='radi2'> B) ".$records['opt2']." </label>
  			   	  </div>
  			   	  <div class='col-lg-5 shad hov m-2 px-5 py-4 mx-auto'>
  			   	  	 <input type='radio' name='opts' value='C' id='radi3'>
  			   	  	  <label for='radi3'> C) ".$records['opt3']."</label>
  			   	  </div>
  			   	  <div class='col-lg-5 shad hov m-2 px-5 py-4 mx-auto'>
  			   	  	 <input type='radio' name='opts' value='D' id='radi4'>
  			   	  	  <label for='radi4'> D) ".$records['opt4']."</label>
  			   	  </div>
  			</div>   	  
  		</div>
  	</div>
  	<div class='text-center mt-5'>
  	<input class='btn btn-primary btn-lg ' type='submit'>
  	</div>
  	<div id='plag' class='text-center'></div>
  	<hr>
  </div>
  </form>";
}
else
{
  echo "finished";
  header("location:http://localhost/Bsg Site/review.php?title=".$title."");
}
?>
</body>
<script src='assets/jquery-3.1.1.min.js' type='text/javascript'></script>
	<script>
		var count=<?php echo $records['time'];?>;

window.onload = function() {
	startschedule();
}
window.onblur=function() {
	document.querySelector("#plag").innerHTML =  "you have attempted plagarism your teacher has been notified. One more attempt will disqualify you";
  $.ajax({
        type: 'post',
        data: {ajax: 1},
                    
        });
}
window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
function startschedule() {
	document.querySelector("#count").innerHTML =  count+" seconds" ;
	setInterval(function() {
		count--;
	document.querySelector("#count").innerHTML =  count+" seconds";
	if (count == 0) {
		document.querySelector("#count").innerHTML =  "OH!" ;
		
		//document.getElementById("clickme").style.display="";
		document.frm.submit();
	}
	if (count <= 5) {
		document.querySelector("#count").style.color = "red";
		//document.getElementById("clickme").style.display="";
	}
	if (count < 0) {
		document.querySelector("#count").style.display = "none";
	}
	}, 1000)
}

function resetTimer() {
	startschedule();
}
</script>
