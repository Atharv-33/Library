<?php
	session_start();
?>
		
			
	
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="st.css">
  <title>My Website</title>
  <style>
    #m{
         width: 80px;
         height: 60px;
        position:relative;
    }
    #k{
         width: 100px;
         height: 80px;
        position:relative;
    }
   </style>
</head>

<body>

<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				 <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          
          <a href="#hero">
            <img id="m" src="../images/R.png"><h1><span>E</span>- <span>L</span>brary</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="index.php" data-after="Home">Home</a></li>
            <li><a href="books.php" >Books</a></li>
            <li><a href="logout.php" >Logout</a></li>
          
            <li><a href="#" >Feedback</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
			<?php
}
		else
		{
			?>
			<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          
          <a href="#hero">
            <img id="m" src="../images/R.png"><h1><span>E</span>- <span>L</span>brary</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="index.php" data-after="Home">Home</a></li>
            <li><a href="books.php" >Books</a></li>
            <li><a href="../login.php" >Login</a></li>
            <li><a href="registration.php" >Sign Up</a></li>
            <li><a href="#" >Services</a></li>
            <li><a href="feedback.php" >Feedback</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
		<?php
		}
			
		?>


  <!-- Header -->
 
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome To Hpt Arts And Ryk Sci. College's <span></span></h1>
        <h1>E-Library....... <span></span></h1>
       
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
       <!-- <p>
          
        </p>-->
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Get Id Card</h2>
          <p> Get Instant Id Card By felling Up necessoary details 
             
          </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2> Read Books Online </h2>
          <p> Read Books Online Anytime , Anywhere and Any Books...

          </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2> Download Books </h2>
          <p> Download Books Online Anytime , Anywhere and Any Books...

          </p>
        </div>
       
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
           <img src="../images/plate-1.jpeg">
          </div>
          <div class="project-img">
            <img src="../images/Eda2.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <img src="../images/Eda.jpeg" alt="img">
          </div>
          <div class="project-img">
            <img src="../images/Eda1.jpg" alt="img">
          </div>
        </div>
      
        
       
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="../images/Respr.jpeg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>Our Principal</span></h1>
        <h2>HOD Of Physics Department</h2>
        <p>The HPT Arts and RYK Science College is known for shaping the students personality by giving them opportunity of participation in various activities. The HPT Arts and RYK Science College is known for making students empowered by giving them training of skills, like communication skill, leadership skill, writing skill, technical skills etc. It is also known for imbibing Indian culture by giving them opportunities to participate in value oriented training in the classroom, laboratory and at all other places. All the teachers make use of their innovative activities to shape the personality of a student, cultivate various skills and make the student create his own identity.</p>
        <!-- <a href="#" class="cta">Download Resume</a> -->
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>:0253-2572153, </h2>
            <h2>Junior college-2579480
              Fax No.::0253-2573097</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2> prinhptryknsk@rediffmail.com</h2>
            <h2>abcd@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Gokhale Education Society's H.P.T Arts and R.Y.K Science College, Prin. T.A. Kulkarni, Vidya Nagar, Nashik-422 005.</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <!--<section id="footer">
    <div class="footer container">
      <div class="brand">
        <img id="k" src="../images/R.png">
      </div>
      <h2>Quick Links </h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://clipart.info/images/ccovers/1509135181Facebook-logo-png-red.png" /></a>
        </div>
       
        <div class="social-item">
          <a href="#"><img src="https://clipart.info/images/ccovers/1509135181Facebook-logo-png-red.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://clipart.info/images/ccovers/1509135181Facebook-logo-png-red.png" /></a>
        </div>
      </div>
      <p>Copyright © 2024 HPT All rights reserved</p>
    </div>
  </section>-->
  <!-- End Footer -->
  <?php
       include "monu.php";
  ?>

<script src="bootstrap/js/app.js"></script>
</body>

</html>