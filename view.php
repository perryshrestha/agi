<html>
    <head>
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="muni.css">

</head>
<body>
    <div class="social">
        <img src="Facebook.png" class="image2">
        <img src="insta.png" class="image1">
        <img src="google.png" class="image">

        <a href="login.php"> <button type="button"style="float: right;">Login </button></a>
     
    </div>
    
    <div class="container">
       <div class="navbar">
           <img src="logo.png" class="logo">
           <h4>Agriculture Information</h4>
           <h2>Management System</h2>
           <nav>
               <ul>
                   <li><a href="">HOME</a></li>
                   <li><a href="viewerabout.html">ABOUT</a></li>
                   <li><a href="viewercontact.html">CONTACT</a></li>
                   <li><a href="">CROPS</a></li>
                   
                   <div class="sb-example-1">
                    <div class="search">
                    
                        <form action="crop.php" method="GET">
                      <div class="search">
                       <input type="text" name="search" class="searchTerm" placeholder="Search">
                       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                       <button type="submit" class="searchButton">
                         <i class="fa fa-search"></i>
                      </button>
                    </form>
                    </div>
                 </div>
  
               </ul>
                
           </nav>
       </div> 
       <div class="row">
       <div class="col">
               <h3> Welcome to</h3>
               <h1>Agriculture Information Management System</h1>
               <br>
               <br>
               <p>
               Agriculture Information Management System, in short AIMS, provides you the latest price of crops all over Nepal. AIMS is featured to track the prices daily, and provide you with the updated price based on your municipality.
               <br><br>
               Search your favourite crops price in your municipality today!
               </p>
           </div>
           <div class="col">
               <div class="card card1">  
                <img src="potato.png" height="194 px" width="230 px "> 
                <h5> Potato</h5>
                <p>120 per kg</p>

               </div>
               
               <div class="card card2">
                <img src="tomato.png" height="194 px" width="230 px">
                <h5> Tomato</h5>
                <p>60 per kg</p>
                </div>
            <div class="card card3">
                <img src="carrot.png" height="194 px" width="230 px">
                <h5> Carrot</h5>
            <p>70 per kg</p>
            </div>
            <div class="card card4">
                <img src="spinach.png" height="194 px" width="230 px">
                <h5> Spinach</h5>
                <p>60 per kg</p>
            </div>

        </div>
       </div>
    </div>
    <div class="footer">
        <p1>Copyright © 2023, Agriculture Information Management System. All Right Reserved.</p1>
      </div>
</body>
</html>
<?php

// $con = new PDO("mysql:host=localhost;dbname=CodeFlix",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>