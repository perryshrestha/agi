<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crops</title>
    

</head>
<body>   
  
  <div class="social">
      <img src="Facebook.png" class="image2">
      <img src="insta.png" class="image1">
      <img src="google.png" class="image">

      <a href="login.php"><button type="button"style="float: right;">Logout</button></a>
      <a href="se.html"><button1 type="button"style="float: right;">Dashboard </button1></a>
  </div>
  <hr>
  <div class="mainbody">
    <div class="navbar">
      <!-- image define  -->
      <img src="logo.png" class="logo">
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
    <div id="body1">
    <?php 
    $app =  $_SESSION["name"];
          $size = 0;
          $connection = mysqli_connect("localhost","root","");
          $db=mysqli_select_db($connection,"crop");
          $query="SELECT * FROM `$app`";
          $query_run=mysqli_query($connection,$query);
          $temp;
          while($row=mysqli_fetch_array($query_run)){
              $size+=1;
              if($size<11){
                if($size==10){
              
                ?>
            <div class="icon">
              <h2><?php echo $row['cropname'];  
              $temp=$row['cropname'];
              ?></h2>
              <?php echo "<img src='{$row['img']}' class='pimg'>";
            }
            }
            }
            ?>
            <!-- <div class="icon"> -->
              <!-- <h2>Potato</h2>
              <img src="download.jpg" class="pimg"> -->
            <!-- <div class="add">
            <a href="" target = "_blank"><img  src="logo1.png" class="right" /></a>
              </div> -->
                
             </div>
            </div>
    
         
        
    
   
      <div class="container">
      <?php 
          $size = 0;
          $connection = mysqli_connect("localhost","root","");
          $db=mysqli_select_db($connection,"farmerdetail");
          $query="SELECT * FROM `$app`";
          $query_run=mysqli_query($connection,$query);
          while($row=mysqli_fetch_array($query_run)){
              $size+=1;
              if($size<11){
                if($size==2){
              
                ?>
                <form action="#">
        <!--div class="user-details">
          <div class="input-box">
            <span class="details">Market Rate:</span>
            <input type="text" value=<?php echo $row['marketRate'] ;?>>
          </div>
          <div class="input-box">
            <span class="detail">Farmer Rate:</span>
            <input type="text" value=<?php echo $row['farmerRate'] ;?> >
        </div-->
      </form>
           
         <?php     
            }
            }
            }
            ?>
        <!-- <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Market Rate:</span>
            <input type="text">
          </div>
          <div class="input-box">
            <span class="detail">Farmer Rate:</span>
            <input type="text">
        </div>
      </form> -->
      
      
   <div class="table-container">
    
     <h1 class="heading">Farmer Details</h1>
     <div class="add">
      <h5>Add Farmer Detail</h5>
      <a href="detail1.html" target = "_blank"><img  src="logo1.png" class="right" /></a>
        </div>
     <table class="table">
       <thead>
         <tr>
           <th>Farmer Name</th>
           <th>Family Count</th>
           <th>Market Rate</th>
           <th>Farmer Rate</th>
           <th>Option</th>
           <th>Option</th>
         </tr>
       </thead>
       <tbody>
       <?php
         $db = mysqli_select_db($connection,"farmerdetail");
         $sql="SELECT * FROM $app where farmingCrops = '{$temp}'";
         $result=mysqli_query($connection,$sql);
         while($row=mysqli_fetch_array($result)){
         ?>

           <tr>
           <td data-label="Farmer Name" name= "Farmer Name"> <?php echo $row["fullname"]; ?> </td>
           <td data-label="Family Count" name= "Family Count" ><?php echo $row["familyCount"]; ?></td>
           <td data-label="Market Rate" name="Market Rate"><?php echo $row["marketRate"]; ?></td>
           <td data-label="Farmer Rate" name= "Farmer Rate"><?php echo $row["farmerRate"]; ?></td>
           <td data-label="Option"><a href=<?php echo "/lms/new%20folder/edit.php?id={$row['id']}"?> class="btn-danger">Edit</a></td>
           <td data-label="Option"><a href=<?php echo "/lms/new%20folder/edit.php?id={$row['id']}&delete=delete"?> class="btn">Delete</a></td>
         
          </tr>

          <?php
         } ?>

         <!-- <tr>
           <td data-label="Farmer Name">Ram Thapa</td>
           <td data-label="Family Count">5</td>
           <td data-label="Market Rate">40</td>
           <td data-label="Farmer Rate">35</td>
           <td data-label="Option"><a href="option" class="btn-danger">Edit</a></td>
           <td data-label="Option"><a href="option" class="btn">Delete</a></td>
         
          </tr>
          <tr>
            <td data-label="Farmer Name">Shyam Bhattarai</td>
            <td data-label="Family Count">4</td>
            <td data-label="Market Rate">50</td>
            <td data-label="Farmer Rate">40</td>
            <td data-label="Option"><a href="option" class="btn-danger">Edit</a></td>
            <td data-label="Option"><a href="option" class="btn">Delete</a></td>
            
          
           </tr>
           <tr>
            <td data-label="Farmer Name">Manish Thapa</td>
            <td data-label="Family Count">6</td>
            <td data-label="Market Rate">41</td>
            <td data-label="Farmer Rate">50</td>
            <td data-label="Option"><a href="option" class="btn-danger">Edit</a></td>
            <td data-label="Option"><a href="option" class="btn">Delete</a></td>
            
          
           </tr>
           <tr>
            <td data-label="Farmer Name">Kajal Agarawal</td>
            <td data-label="Family Count">3</td>
            <td data-label="Market Rate">50</td>
            <td data-label="Farmer Rate">45</td>
            <td data-label="Option"><a href="option" class="btn-danger">Edit</a></td>
            <td data-label="Option"><a href="option" class="btn">Delete</a></td>
            
          
           </tr> -->
       </tbody>
     </table>
     <a href="#"><button3 type="button" id = "ex_btn"style="float: right;">Export </button3></a>
   </div>
   
  </div>
  
  </div>
  <div class="footer">
    <p>Copyright © 2022, Agriculture Information Management System. All Right Reserved.</p>
  </div>
  <script>
    function arrayToCsv(data){
  return data.map(row =>
    row
    .map(String)  // convert every value to String
    .map(v => v.replaceAll('"', '""'))  // escape double colons
    .map(v => `"${v}"`)  // quote it
    .join(',')  // comma-separated
  ).join('\r\n');  // rows starting on new lines
}
function downloadBlob(content, filename, contentType) {
  // Create a blob
  var blob = new Blob([content], { type: contentType });
  var url = URL.createObjectURL(blob);

  // Create a link to download it
  var pom = document.createElement('a');
  pom.href = url;
  pom.setAttribute('download', filename);
  pom.click();
}


document.getElementById("ex_btn").onclick=function(){
	let lst=[["Farmer Name","Family Count","Market Rate", "Farmer Rate"]];
  let temp_lst=[];
  for(let i of lst[0]){
  	let el=document.getElementsByName(i);
    temp_lst.push(el);
    
  }
  for(let i=0;i<temp_lst[0].length;i++){
  		let temp1=[];
  		for(let j of temp_lst){
      	temp1.push(j[i].innerText);
      };
      lst.push(temp1);
  }
    console.log(lst);
    let data=arrayToCsv(lst);
    console.log(data);
    downloadBlob(data,'export.csv', 'text/csv;charset=utf-8;')
  
}
</script>
</body>
</html>