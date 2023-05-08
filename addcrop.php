<?php
session_start();
?>
<?php
// If upload button is clicked ...
if (isset($_POST['upload'])) {
    
    $app =  $_SESSION["name"];
	$cropname=$_POST['cropname'];
    $marketrate=$_POST['mp'];
    $img=$_POST['imgupload'];
	$db = mysqli_connect("localhost", "root", "", "crop");
		// Get all the submitted data from the form
		$sql = "INSERT INTO $app (cropname, img,marketrate) VALUES ('$cropname','$img','$marketrate')";
		// Execute query
		mysqli_query($db, $sql);
        echo '<script>alert("Crop have been added")</script>';
	
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="addcrop.css">
</head>
<body>
<div class="social">
        <img src="Facebook.png" class="image2">
        <img src="insta.png" class="image1">
        <img src="google.png" class="image">

        <a href="login.php"><button type="button"style="float: right;">Logout</button></a>
        <a href="dashboard.php"><button1 type="button"style="float: right;">Dashboard </button1></a>
    </div>
    <hr>
    <div class="container">
       <div class="navbar">
       <a href="adminviewer.php"><img src="logo.png" class="logo">
           <h4>Agriculture Information</h4>
            <h3>Management System</h3>
           <nav>
               <ul>
               <li><a href="muniviewer.php">HOME</a></li>
                    <li><a href="muniabout.html">ABOUT</a></li>
                    <li><a href="municontact.html">CONTACT</a></li>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
               </ul>
                
           </nav>
       </div> 
<form method="POST" action="">
    <div class="con">
        <label class="cm" >Crop name </label>
        <input type="text" placeholder="Cropname" name="cropname" class="addcropname"><br><br>
		<label class="mp">Market price </label>
		<input type="text" placeholder="Market Price" name="mp"  class="mprate"><br><br>
        <input type="file"  name="imgupload" class="upbtn">
        <input type="submit" name="upload" value="Upload" class="subtn" >
    </div>
    </form>
    <div class="footer">
        <p>Copyright © 2023, Agriculture Information Management System. All Right Reserved.</p>
      </div>
    
   
</html>

</body>

    </body>
</html>