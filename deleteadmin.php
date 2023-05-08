<?php
session_start();
?>
<?php
// If upload button is clicked ...
$app =  $_SESSION["name"];
	$connection = mysqli_connect("localhost", "root", "");
    $db=mysqli_select_db($connection,'crop');
    if (isset($_POST['Delete'])) {
         '<script type ="text/JavaScript">
         alert("Are you sure you want to delete this crop? ")
         </script>';
        $cropname=$_POST['cropname'];
       
		// Get all the submitted data from the form
		$sql = "DELETE FROM $app  WHERE cropname = '$cropname'";

		// Execute query
		$sql_run=mysqli_query($connection, $sql);
    }
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard Municipality</title>
        <link rel="stylesheet" href="del.css">
       
    </head>
    <body>
    <div class="social">
        <img src="Facebook.png" class="image2">
        <img src="insta.png" class="image1">
        <img src="google.png" class="image">

        <a href="login.php"><button type="button"style="float: right;">Log out</button></a>
        <a href="se.html"><button1 type="button"style="float: right;">Dashboard</button1></a>
    </div>
    <hr>
    <div class="container">
       <div class="navbar">
           <img src="logo.png" class="logo">
           <h4>Agriculture Information</h4>
            <h3>Management System</h3>
           <nav>
               <ul>
               <li><a href="adminviewer.php">Home</a></li>
                    <li><a href="adminabout.html">About</a></li>
                    <li><a href="admincontact.html">Contact</a></li>
                   <!-- <form action="a" method="POST"> -->
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
               </ul>
                
           </nav>
       </div> 
   
        <form method="POST" action="">
            <div class="deletecontant">
        <label class="decn">Crop name </label>
        <input type="text" placeholder="cropname" name="cropname" class="delname"><br><br>
        <!-- <input type="submit" name="Delete" value="Delete" class="del"> -->
        <input type="submit" name="Delete" class="del" value="Delete" 
        onClick="return confirm('Are you sure you want to Delete ?')?this.form.action='<?php echo $_SERVER['PHP_SELF'] ?>':false;">
            </div>
    </form>

    </div>
    
    </body>
</html>
<div class="footer">
        <p>Copyright © 2022, Agriculture Information Management System. All Right Reserved.</p>
      </div>
           
    </body>
</html>