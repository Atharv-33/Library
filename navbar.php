<?php 
    
    include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="st1.css">
  <title>My Website</title>
  <style>
      #m{
         width: 80px;
         height: 60px;
        position:relative;
    }

    </style>
</head>

<body>
    <section id="header">
        <div class="header container">
          <div class="nav-bar">
            <div class="brand">
              <a href="#hero">
                <img id="m" src="images/R.png"><h1><span>E</span>- <span>L</span>brary</h1>
              </a>
            </div>
            <div class="nav-list">
              <div class="hamburger">
                <div class="bar"></div>
              </div>
              <ul>
                <li><a href="#hero" data-after="Home">Home</a></li>
                <li><a href="#" data-after="Service">Services</a></li>
                <li><a href="#" data-after="Projects">Projects</a></li>
                <li><a href="#" data-after="About">About</a></li>
                <li><a href="#" data-after="Contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      
      <script src="bootstrap/js/app.js"></script>
    </body>
    
    </html>