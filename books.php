
<?php
  include "connection.php";
  include "navbar.php";
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<style>
    
	.mk {
        padding: 0px;
        margin: 0;
		font-size:13px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
		font-family: Verdana;
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #h {
        background-color: #16a085;
        color: #fff;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>

<body class="mk">

<?php
	 
	 if(isset($_POST['submit']))
	 {
		 $q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%' ");

		 if(mysqli_num_rows($q)==0)
		 {
			 echo "Sorry! No book found. Try searching again.";
		 }
		 else
		 {
	 echo "<table  >";
		 echo "<tr id='h'>";
			 //Table header
			 echo "<th>"; echo "ID";	echo "</th>";
			 echo "<th>"; echo "Book-Name";  echo "</th>";
			 echo "<th>"; echo "Authors Name";  echo "</th>";
			 echo "<th>"; echo "Edition";  echo "</th>";
			 echo "<th>"; echo "Status";  echo "</th>";
			 echo "<th>"; echo "Quantity";  echo "</th>";
			 echo "<th>"; echo "Department";  echo "</th>";
		 echo "</tr>";	

		 while($row=mysqli_fetch_assoc($q))
		 {
			 echo "<tr>";
			 echo "<td>"; echo $row['bid']; echo "</td>";
			 echo "<td>"; echo $row['name']; echo "</td>";
			 echo "<td>"; echo $row['authors']; echo "</td>";
			 echo "<td>"; echo $row['edition']; echo "</td>";
			 echo "<td>"; echo $row['status']; echo "</td>";
			 echo "<td>"; echo $row['quantity']; echo "</td>";
			 echo "<td>"; echo $row['department']; echo "</td>";

			 echo "</tr>";
		 }
	 echo "</table>";
		 }
	 }
   
		 /*if button is not pressed.*/
	 else 
	 {
		 $re=mysqli_query($db," SELECT * FROM books ORDER BY bid ASC; ");
		 if(!$re)
			die('q failed'.mysqli_error($db));

	 echo "<table  >";
		 echo "<tr  id='h'>";
			 //Table header
			 echo "<th>"; echo "ID";	echo "</th>";
			 echo "<th>"; echo "Book-Name";  echo "</th>";
			 echo "<th>"; echo "Authors Name";  echo "</th>";
			 echo "<th>"; echo "Edition";  echo "</th>";
			 echo "<th>"; echo "Status";  echo "</th>";
			 echo "<th>"; echo "Quantity";  echo "</th>";
			 echo "<th>"; echo "Department";  echo "</th>";
		 echo "</tr>";	

		 while($row=mysqli_fetch_assoc($re))
		 {
			 echo "<tr>";
			 echo "<td>"; echo $row['bid']; echo "</td>";
			 echo "<td>"; echo $row['name']; echo "</td>";
			 echo "<td>"; echo $row['authors']; echo "</td>";
			 echo "<td>"; echo $row['edition']; echo "</td>";
			 echo "<td>"; echo $row['status']; echo "</td>";
			 echo "<td>"; echo $row['quantity']; echo "</td>";
			 echo "<td>"; echo $row['department']; echo "</td>";

			 echo "</tr>";
		 }
	 echo "</table>";
	 }
	 
 ?>
    

</body>

</html>
