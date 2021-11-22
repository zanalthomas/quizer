<!DOCTYPE html>
<html>
<head>
	<title>test</title>
		 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
    	:root {
  --surface-color: #fff;
  --curve: 40;
  --bg-pink:#fef8f8;
  --black-color:#6a515e;
  --text-color:#d7bdca;
}

* {
  box-sizing: border-box;
}

    	body {
    		font-family: 'Poppins';
    	}
    .cards{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));
  gap:2rem;
  margin:4rem 5vw;
  padding:0;
  list-style: none;
}
.card {
  position: relative;
  display: block;
  height: 100%;
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
   -webkit-box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.7);
}
.card__image{
  width:100%;
  height:auto;
}
.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  border-radius: calc(var(--curve) * 1px);
  background-color: var(--surface-color);
  transform: translateY(100%);
  transition: 0.2s ease-in-out;
}
.card:hover .card__overlay{
  transform: translateY(0);
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
}
.card__header{
  position: relative;
  display:flex;
  align-items: center;
  gap:2rem;
  border-radius: calc(var(--curve) * 1px) 0 0 0; 
  background-color: var(--surface-color);
  padding:2em;
  transform: translateY(-100%); 
  transition: 0.2s ease-in-out;
}
.card__arc{
  width:5em;
  height:5em;
  position:absolute;
  bottom:100%;
  right:0;
  z-index: 1;
}
.card__arc path{
  fill:var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}
.card:hover .card__header{
  transform: translateY(0);
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
}
.card__thumb{
  flex-shrink: 0;
  width:3.125em;
  height:3.125em;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
}
.card__title{
  font-size:1em;
  margin:0 0 0.3em;
  color:var(--black-color);
}
.card__status{
  font-size:0.8em;
  color:var(--text-color);
}
.card__description{
  padding:0 2em 2em;
  margin:0;
  color:var(--text-color);
  display:-webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
} 
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
  <div data-aos="fade-right" class='navbar-brand h2 d-flex align-items-center header text-dark'>Quizer</div>
  <li  data-aos="fade-right" data-aos-delay="100" class="nav-item">
    <a class="nav-link text-dark" href="http://localhost/Bsg Site/option.php">Home</a>
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
  <div class="container text-center pt-3">
   <div class="row pt-5">
      <div class="col-lg-7 mx-auto">
        <h1 data-aos="fade-up" data-aos-delay="500" class="fw-light">Note the Point</h1>
        <div data-aos="fade-up" data-aos-delay="600" class="lead text-muted">
           Read these instructions carefully before you start your exam.
        </div>
      </div> 
    </div>
</div>
  <div data-aos="fade-up" data-aos-delay="700" class="container">
  	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mx-2">
  		<div class="col-lg-8 col-sm-8 mx-auto mt-5 shade py-2 px-5">
  			<div class="py-2 px-lg-3 px-sm-1">
  			   <div class="row">
  			   	<div class="col-lg-2">
                   <div class="py-2">
  			         <i class="far fa-clock fa-4x"></i>
  			       </div>   
  			   </div>
  			   <div class="col">
  			   <h5>Dedicated Time</h5>
  			   <p class="text-muted">Each question has dedicated time in seconds. You can see the remaining time at the top for each question.</p>
  			   </div>
  			   </div>
  			</div>
  		</div>
  		<div class="col-lg-8 col-sm-8 mx-auto mt-4 shade py-2 px-5">
  			 <div class="py-2 px-3">
  			  <div class="row">
  			  	<div class="col-lg-2">
                   <div class="py-3">
  			         <i class="fas fa-ban fa-4x"></i>
  			       </div>   
  			   </div>
  			   <div class="col">
  			   <h5>No plagarism</h5>
  			   <p class="text-muted">After starting the exam you will be continously mointored. If you attempt to switch between tabs or apps, the examiner will be notified. </p>
  		      </div>
  		     </div>
  		   </div>
  		</div>
  		<div class="col-lg-8 col-sm-8 mx-auto mt-4 shade py-2 px-5">
  			 <div class="py-2 px-3">
  			   <div class="row">
  			  	<div class="col-lg-2">
                   <div class="py-2">
  			         <i class="fas fa-times fa-4x"></i>
  			       </div>   
  			   </div>
  			   <div class="col">
  			   <h5>No reattempt</h5>
  			   <p class="text-muted">If you have seen the question you should answer it. You cannot skip and come back later.</p>
  			  </div>
  			</div>
  		     </div>
  		   </div>
  		   <div class="col-lg-8 col-sm-8 mx-auto mt-4 shade py-2 px-5">
  			 <div class="py-2 px-3">
  			  <div class="row">
  			  	<div class="col-lg-2">
                   <div class="py-3">
  			         <i class="far fa-check-circle fa-4x"></i>
  			       </div>   
  			   </div>
  			   <div class="col">
  			   <h5>Review</h5>
  			   <p class="text-muted">You can review your answers at the end of the exam, Including the right answers of the question.</p>
  		      </div>
  		     </div>
  		   </div>
  		</div>
  		</div>
  	</div>
  </div>
  <div class="container py-2">
	<div class="row">
		<div class="col-6 mx-auto py-4">
<div class="mx-auto">
  <?php
    $title=$_GET['title'];
echo "
<a class='btn btn-primary' href='http://localhost/Bsg Site/question.php?qno=1&&title=".$title."' >
		Continue
	</a>";
  ?>
		<a class="btn btn-secondary" href="http://localhost/Bsg Site/option.php">Cancel</a>
	</div>	
	</div>
	</div>
	</div>
   <script>
  AOS.init();
</script>
</body>
</html>