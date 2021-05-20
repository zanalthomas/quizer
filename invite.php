<?php
session_start();
$title=$_GET['title'];
 if( isset($_POST['ajax'])){
    $db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
    $sql="insert into invitation(frm,username,title) values('".$_SESSION['username']."','".$_POST['name']."','".$title."')";
    $result_set=mysqli_query($db_handle,$sql);
    echo "send";
    exit;
}
?>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style type="text/css">
      a {
        text-decoration: none;
      }
      
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');

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
<div class="container header  text-center bg-white my-3 py-5 " >
   	<header class="mb-auto mx-auto pb-4">
    <div>
      <h1 class="pb-3">Invite Participants</h1>
    </div>
  </header>
	   <div class="row py-4">
	    <div class="col-lg-5 col-md-8 px-5 col-sm-10 mx-auto order-sm-2 order-lg-1">
		<?php
	echo '<form name="frm" onSubmit="return invite()" action="http://localhost/Bsg Site/invite.php?title='.$title.'">';?>

                   <h1 class="h3 mb-4 fw-normal">Send Invitation to :</h1>
                    <label for="name" class="visually-hidden">Email address</label>
                   <input type="text" id="name" name="inv" class="form-control my " placeholder="Name of sender" autofocus><br>
                    <input class="mt-2 w-50 btn btn-lg btn-primary" type="button" onclick="invite()" value="Invite">
                   <p class="mt-3 text-muted">
                   	 <?php
		             echo 'or<br><a href="http://localhost/Bsg Site/bulk.php?title='.$title.'">Invite bulk using CSV file</a>';
		             ?> 
		             <br>
		            Please note that this site doesn't sends any Emails or messages to the invited user.This invitation would be visible if they login to thier account using the name you specified above.
		           </p>
            </form>
	   	</div>
      <div class="col-lg-5 mx-auto order-sm-1 order-lg-2 " >
            <i data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-out-right"><img class="img-responsive img-fluid" src="img/invitation.svg" >
            <rect width="100%" height="100%" fill="#777"/></i>
      </div>
	</div>

		

		<script src='assets/jquery-3.1.1.min.js' type='text/javascript'></script>
<script type="text/javascript">
function invite()
{
                var name =document.frm.inv.value;
                if (name == null || name == "") {
                document.getElementById("response").innerHTML="Username must be filled out.";
                 return false;
                }
                $.ajax({
                    type: 'post',
                    data: {ajax: 1,name: name},
 
                });
               document.frm.inv.value="";
   
}
</script>
</body>
</html>
