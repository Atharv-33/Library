
<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title> Update Pass.</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  <style type="text/css">
    section
     {
         
         margin-top: -12px;
      width:100%;
      height:750px;
      background-image: url("images/4.png");
         background-size:cover;   
      
     }

     .box1
{
	height: 400px;
	width: 450px;
	background-color: black;
	margin: 0px auto;
	opacity: .8;
	color: white;
	padding: 20px;
}
  </style>   
</head>
<body>

<section><br><br><br>
     <div class="box"><br><br><br><br><br>
     <form  name="login" action="" method="post">
     <p  align="center" style="margin-left:50px; font-size:30px; color:yellow;"> Change Password : </p>
        <br><br>
        <span  style="margin-left:40%;font-size:20px;"> Admin : </span><input  style="margin-left:10px; width:18px;" type="radio" name="user" id="admin" value="admin" > <br><br>
        <span  style="margin-left:40%;font-size:20px;"> User : </span><input  style="margin-left:25px; width:18px;" type="radio" name="user" id="user" value="user" checked="" > <br><br><br>
        <input class="btn btn-default" type="submit" name="submit1" value="GO" style=" margin-left:40%; color: black; width: 70px; height: 30px"> 
      
</form>
</div>
<?php
if(isset($_POST['submit1']))
    {
      if($_POST['user']=='admin')
      {
        ?>
        <script type="text/javascript">
          window.location="ADMIN/update_ad.php";
        </script>
      <?php
      }
      else{
            
        ?>
        <script type="text/javascript">
          window.location="Student/update_password.php";
        </script>
      <?php

      }
    }
 ?>    
</section>
</body>
</html>