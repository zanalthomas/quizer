<!DOCTYPE html>
<html>
	       <meta name="viewport" content="width=device-width, initial-scale=1">
        <head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<?php
session_start();
use Phppot\DataSource;
$conn =mysqli_connect( 'localhost', 'root', 'sanal','quizer');
$title=$_GET['title'];
if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
			    
            $sql = "INSERT into invitation (frm,username,title)
                   values ('".$_SESSION['username']."','".$column[0]."','".$title."')";
           $result_set=mysqli_query($conn,$sql);
            
            if (! empty($result_set)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}
if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                
            $sql = "INSERT into invitation (frm,username,title)
                   values ('".$_SESSION['username']."','".$column[0]."','".$title."')";
           $result_set=mysqli_query($conn,$sql);
            
            if (! empty($result_set)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}
?>

<script src="assets/jquery-3.2.1.min.js"></script>

<style>




#response {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 2px;
    display: none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
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
    <div class='container  text-center pt-4'>
   <div class='row pt-5'>
      <div class='col-lg-6 mx-auto'>
        <h1 class='fw-light'>Import CSV file</h1>
        <div class='lead text-muted'>
          The csv file should have the first column as usernames
        </div>
      </div> 
    </div>

    <div id="response"
        class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
        <?php if(!empty($message)) { echo $message; } ?>
        </div>
    <div class="container border my-5 ">
        <div class="row  py-3">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV
                        File</label> <input type="file" name="file"
                        id="file" accept=".csv">
                    <button type="submit" id="submit" name="import"
                        class="btn btn-primary">Import</button>
                        
                    <br />

                </div>

            </form>

        </div>
               <?php
            $sqlSelect = "SELECT * FROM invitation where frm='".$_SESSION['username']."' and title='".$title."'";
            $result=mysqli_query($conn,$sqlSelect);
            if (! empty($result)) {
                ?>
            <table id='userTable' class='table table-striped table-light  p-5'>
                <tr>
                    
                    <th>Invited Users</th>
                    
                    

                </tr>
<?php
                
                foreach ($result as $row) {
                    ?>
                    
                <tr>
                    
                    <td><?php  echo $row['username']; ?></td>
                    
                </tr>
                    <?php
                }
                ?>
        </table>
        <?php } ?>
    </div>
</div>
</body>

</html>
