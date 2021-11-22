<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style type="text/css">
.mycontent {
  border-right: 2px dashed #4E4455;

}
      
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
<div class='container  text-center pt-5'>
   <div class='row pt-5'>
      <div class='col-lg-6 mx-auto'>
        <h1 class='fw-light'>Create Exam Here</h1>
        <div class='lead text-muted'>
         Add your questions and time here.
        </div>
      </div> 
    </div>
</div>

<?php
session_start();
if($_GET['q']==1)
{
$nq=intval($_POST['noq']);
$title=$_POST['title'];
$filename = $_FILES['image']['name'];
$tempname = $_FILES["image"]["tmp_name"];    
echo "<div id='result'></div>
<form enctype='multipart/form-data' name='frmq' method='post' action='create.php?q=2&&noq=".$nq."' onSubmit='return validateForm()'><div class='gfg-input-fields'>";
echo "<input class='visually-hidden'  name='title' value='".$title."'>"; 
echo "<input class='visually-hidden'  name='filename' value='".$filename."'>";
echo "<input class='visually-hidden'  name='tempname' value='".$tempname."'>";
for($i=1;$i<=$nq;$i++)
{
    echo "<div class='container'>
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 mx-2'>
        <div class='col-lg-8 col-sm-8 mx-auto mt-5 shade py-2 px-5'>
            <div class='py-2 px-lg-3 px-sm-1'>
               <div class='row'>
                <div class='col-lg-2'>
                   <div class='py-4'>
                     <i class='fas fa-question fa-4x'></i>
                   </div>   
               </div>
               <div class='col py-3'>
               <h5>Question ".$i."<br></h5>
               <textarea class='form-control'  name='input_field[]' placeholder='Your Question ".$i." here'></textarea>
               </div>
               </div>
            </div>
        </div>
    </div>
</div>

    <div class='container py-3'>
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 mx-2'>
        <div class='col-lg-8 mx-auto'>
             <div class='row'>
                  <div class='col-lg-5 shad  m-2 px-4 py-4 mx-auto'>
                      <label class='mx-2' for='op1[]'>Type your Option A</label>
                      <input   class='form-control my-2' type='text' name='op1[]'  maxlength='50' placeholder='Option A'>
                  </div>
                  <div class='col-lg-5 shad m-2 px-4 py-4 mx-auto'>
                      <label class='mx-2' for='op2[]'>Type your Option B</label>
                    <input  class='form-control my-2' type='text' name='op2[]'  maxlength='50' placeholder='Option B'>
                  </div>
                  <div class='col-lg-5 shad  m-2 px-4 py-4 mx-auto'>
                     <label class='mx-2' for='op3[]'>Type your Option C</label>
                    <input  class='form-control my-2' type='text' name='op3[]'  maxlength='50' placeholder='Option C'>
                  </div>
                  <div class='col-lg-5 shad m-2 px-4 py-4 mx-auto'>
                     <label class='mx-2' for='op4[]'>Type your Option D</label>
                    <input  class='form-control my-2' type='text' name='op4[]'  maxlength='50' placeholder='Option D'>
                  </div>
                  <div class='col-lg-5 shad m-2 px-4 py-4 mx-auto'>
                 <label class='mx-2' for='ans[]'>Correct Option</label>
                 <i class='fas fa-check-circle '></i>
                  <select class='form-control my-2' name='ans[]'>
                    <option>Choose</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                  </select>
                  </div>
                  <div class='col-lg-5 shad m-2 px-4 py-4 mx-auto'>
                     <label class='mx-2' for='time[]'>Time</label>
                     <i class='fas fa-stopwatch '></i>
                    <input  class='form-control my-2' type='text' name='time[]'  maxlength='50' placeholder='Time in Seconds'>
                  </div>
            </div>        
        </div>
    </div>
    <hr>
  </div>";

}
echo "
<div class='container text-center'>
<input class='btn btn-primary' type='submit' value='Submit exam'></div></form></div>";
}
else if($_GET['q']==2)
{
$nq=intval($_GET['noq']);
$title=$_POST['title'];
$user=$_SESSION['username'];
$filename=$_POST['filename'];
$tempname=$_POST['tempname'];
$folder = "img/".$filename;
move_uploaded_file($tempname, $folder);
 if( isset($_POST['ajax'])){
    $db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
    $sql="insert into invitation(frm,username) values('".$_SESSION['username']."','".$_POST['name']."')";
    $result_set=mysqli_query($db_handle,$sql);
    echo "send";
    exit;
}
$db_handle =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
$sql="INSERT INTO exam(username,tablename,status,noq,thumb) VALUES('".$user."','".$title."','dis',".$nq.",'".$filename."')";
$result_set=mysqli_query($db_handle,$sql);
$sql="select * from exam where tablename='".$title."' and username='".$_SESSION['username']."' order by sino desc";
$result_set=mysqli_query($db_handle,$sql);
while($records=mysqli_fetch_array($result_set))
{ $tablename=$records['sino'];break;}
echo $tablename;
$number = count($_POST["input_field"]);  
 if($number > 0)  
 {  
 for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["input_field"][$i] != ''))  
           {  
	$sql = "INSERT INTO questions(qno,question,opt1,opt2,opt3,opt4,time,tablename,ans) VALUES($i+1,'".mysqli_real_escape_string($db_handle, $_POST["input_field"][$i])."','".$_POST["op1"][$i]."','".$_POST["op2"][$i]."','".$_POST["op3"][$i]."','".$_POST["op4"][$i]."',".intval($_POST["time"][$i]).",'".$tablename."','".$_POST["ans"][$i]."')";  
$result_set=mysqli_query($db_handle,$sql);
}
}
 echo "Data Inserted";  
 header("location:http://localhost/Bsg Site/invite.php?title=".$tablename."");
 }  
 else  
 {  
        
 }  
}
?>
<script>
function validateForm() {
  var y = document.frmq.title.value; 
  if (y == null || y == "") {
    document.getElementById("result").innerHTML="Title must be filled out.";
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    return false;
  }
  var y = document.frmq.input_field[1].value;
  document.write(y); 
  if (y == null || y == "") {
    document.getElementById("result").innerHTML="Title must be filled out.";
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    return false;
  }
}
</script>
</body>
</html>