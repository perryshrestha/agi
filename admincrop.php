<html>
    <head>
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="crop.css">

</head>
<body>
    <div class="social">
        <img src="Facebook.png" class="image2">
        <img src="insta.png" class="image1">
        <img src="google.png" class="image">
        <a href="login.php"><button type="button"style="float: right;">Logout </button></a>
        <a href="se.html"><button1 type="button"style="float: right;">Dashboard </button1></a>
        
    </div>
    
    <div class="container">
       <div class="navbar">
           <img src="logo.png" class="logo">
           <h4>Agriculture Information</h4>
           <h2>Management System</h2>
           <nav>
               <ul>
                   <li><a href="adminviewer.php">HOME</a></li>
                   <li><a href="adminabout.html">ABOUT</a></li>
                   <li><a href="admincontact.html">CONTACT</a></li>
            
                   
               </ul>
            </nav>
        </div> 
       <div class="col">
       <?php  
       $app= $_GET['search'];
            $size = 0;
            $connection = mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,"crop");
            $query="SELECT * FROM `$app`";
            $query_run=mysqli_query($connection,$query);
            while($row=mysqli_fetch_array($query_run)){
                $size+=1;
                if($size<11){
                ?>
        
        <?php
           
           if($size==1){
               ?>
               <div class="card card1">
               <?php echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            ?>
        
        
        <?php
           
           if($size==2){
               ?>
               <div class="card card2">
               <?php echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>                
                <?php
                } 
            ?>
        
        
        <?php
           
           if($size==3){
               ?>
               <div class="card card3">
               <?php echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            ?>
       
        
        <?php
           
           if($size==4){
               ?>
               <div class="card card4">
               <?php echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            ?>
        
               
               <?php
           
           if($size==5){
               ?>
               <div class="card card5">
               <?php echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            ?>
               
               
               <?php
           
           if($size==6){
               ?>
               <div class="card card6">
               <?php echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            ?>
           
            
            <?php
           
           if($size==7){
               ?>
               <div class="card card7">
               <?php echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            ?>
       
       
       <?php
           
           if($size==8){
               ?>
               <div class="card card8">
               <?php echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            ?>


<?php
           if($size==9){?>
           <div class="card card9">
               <?php
             echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            ?>


<?php
           if($size==10){?>
           <div class="card card10">
               <?php
                echo "<img src='{$row['img']}'style='width:180px;height:140px'>";?>
                <h5> <?php echo $row['cropname']  ?></h5>
                <p><?php echo $row['marketrate']  ?> per kg</p>
                </div>
                <?php
                } 
            }
        }
            ?>

    </div>
    </div>
    <div class="footer">
        <p>Copyright © 2023, Agriculture Information Management System. All Right Reserved.</p>
      </div>
</body>
</html>