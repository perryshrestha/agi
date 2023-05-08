<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bsytle.css">
</head>
<body class="main">   
    <div class="social">
        <img src="Facebook.png" class="image2">
        <img src="insta.png" class="image1">
        <img src="google.png" class="image">
        <a href="login.php"><button type="button"style="float: right;">Logout </button></a>
        <a href="se.html"><button1 type="button"style="float: right;">Dashboard </button1></a>
    </div>
    <hr>
    <div class="container">
        <div class="navbar">
            <a href="adminviewer.php"><img src="logo.png" class="logo"></a>
            <h4>Agriculture Information</h4>
            <h3>Management System</h3>
            <nav>
                <ul>
                  <li><a href="adminviewer.php">HOME</a></li>
                  <li><a href="adminabout.html">ABOUT</a></li>
                  <li><a href="admincontact.html">CONTACT</a></li>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                </ul>
            </nav>
        </div>
        <div class="img">
            <h5>Add Muncipality</h5>
            <a href="add.php"><img src="logo1.png" class="hero"></a>
        </div>
        <div class="table-container">
            <h1 class="heading">Province 1</h1>
            <table class="table">
                <thead>
                    <tr>
                      <th>Muncipality Name</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                     $connection = mysqli_connect("localhost","root","");
                     $db = mysqli_select_db($connection,"province");
                     $sql="SELECT * FROM municipality";
                     $result=mysqli_query($connection,$sql);
                     while($row=mysqli_fetch_array($result)){
                  ?>
                  <tr>
                    <form action="dashboard1.php" method="GET">
                      <td data-label="Municipality Name" name="Municipality Name"><?php echo $row["wada"];?> </td></form>
                      <td data-label="Option">
                        <a href=<?php echo "delete1.php?id={$row['id']}&delete=delete"?> class="btn">
                          <input type="submit" name="Delete" class="btn" value="Delete" onClick="return confirm('Are you sure you want to Delete ?')?this.form.action='<?php echo $_SERVER['PHP_SELF'] ?>':false;">
                        </a>
                      </td>
                    </form>
                  </tr>
                  <?php
                     } 
                  ?>
                  </tbody>
            </table>
            <a href="#" id="ex_btn"><button3 type="button" style="float: right;">Export</button3></a>
        </div>
        <div class="push"></div>
    </div>
    <div class="footer">
        <p>&copy; 2023, Agriculture Information Management System. All</div>
