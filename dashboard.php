<?php
session_start();
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard Municipality</title>
        <link rel="stylesheet" href="dash.css">
       
    </head>
    <body >
    <div class="social">
        <img src="Facebook.png" class="image2">
        <img src="insta.png" class="image1">
        <img src="google.png" class="image">

        <a href="login.php"><button type="button"style="float: right;">Log out</button></a>
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
                   <!-- <form action="a" method="POST"> -->
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                   <!-- <div class="sb-example-1">
                    <div class="search"> -->
                        
                       <!-- <input type="text" class="searchTerm" placeholder="Search">
                       <button type="submit"  class="searchButton">
                         <i class="fa fa-search"></i>
                      </button> -->
                        <!-- </form> -->
                    <!-- </div>
                 </div> -->
  
               </ul>
                
           </nav>
       </div> 
        
        <section class="vegetablesection">
            <h1>Crops</h1>
            <div class="ed">
                <div class="adbox">
                <form action="addcrop.php">
                <button type="submit" class="add">Add</button>
                </form>
                </div>
                <div class="delbox">
                <form action="delete.php">
                <button type="submit" class="delete">Delete</button>
                </form>
                </div>
             
             
             
             
            </div>
            <?php  
           
            $app =  $_SESSION["name"];
            
            $size = 0;
            $connection = mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,"crop");
            $query="SELECT * FROM `$app`";
            $query_run=mysqli_query($connection,$query);
            while($row=mysqli_fetch_array($query_run)){
                $size+=1;
                if($size<11){
                ?>
        <div class="first">  
        <?php
           
                if($size==1){
                    ?>
            <a href="page1.php" ><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname']  ?></div>
              
            </a> 
            <?php
                } 
            ?> 
        </div>
        <div class="secound" >
        <?php
                if($size==2){
                    ?>
            <a href="page2.php"class="img2"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>  
        </div>
       
        <div class="third">
        <?php
                if($size==3){
                    ?>
            <a href="page3.php"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>      
        </div>  
        <div class="fourth">
        <?php
                if($size==4){
                    ?>
            <a href="page4.php"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px' >";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>     
                    
        </div>
        <div class="fifth">
        <?php
                if($size==5){
                    ?>
            <a href="page5.php"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                }
            ?>        
                  
        </div>
        
        <div class="sixth">
        
        <?php
                if($size==6){
                    ?>
            <a href="page6.php"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>      
        </div>
        <div class="seventh">
        
        <?php
                if($size==7){
                    ?>
            <a href="page7.php"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>      
                     
        </div>
        <div class="eight">
        <?php
                if($size==8){
                    ?>
            <a href="page8.php"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>         
        </div>
        <div class="ninth">
       
        <?php
                if($size==9){
                    ?>
            <a href="page9.php"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>        
                    
        </div>
        <div class="tenth">
        <?php
                if($size==10){
                    ?>
            <a href="page10.php"><?php echo "<img src='{$row['img']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>       
                 
        </div>
        <?php }  } ?>
          
    </section>
        
    
    <div class="footer">
        <p>Copyright © 2022, Agriculture Information Management System. All Right Reserved.</p>
      </div>
    </div>
           
    </body>
</html>