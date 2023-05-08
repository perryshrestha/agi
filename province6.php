<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bsytle.css">
</head>
<!-- body part -->
<body class="main">   
    <div class="social">
        <img src="Facebook.png" class="image2">
        <img src="insta.png" class="image1">
        <img src="google.png" class="image">

        
        <a href="login.php"><button type="button"style="float: right;">Logout </button></a>
        <a href="se.html"><button1 type="button"style="float: right;">Dashboard </button1></a>
    </div>
    <hr>
    <!-- line break -->
    <div class="container">
        <div class="navbar">
            <!-- image define  -->
            <a href="adminviewer.php"><img src="logo.png" class="logo">
            <h4>Agriculture Information</h4>
            <h3>Management System</h3>
            <nav>
                <ul>
                <li><a href="adminviewer.php">HOME</a></li>
              <li><a href="adminabout.html">ABOUT</a></li>
              <li><a href="admincontact.html">CONTACT</a></li>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <!--div class="sb-example-1">
                        <div class="search">
                           <input type="text" class="searchTerm" placeholder="Search">
                           <button type="submit" class="searchButton">
                             <i class="fa fa-search"></i>
                          </button>
                        </div>
                     </div-->
                </ul>
            </nav>
            </div>
            <div class="img">
            <h5>Add Muncipality</h5>
                <a href="add5.php"><img src="logo1.png" class="hero"></a>
            </div>
            <div class="table-container">
                <h1 class="heading">Province 6</h1>
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
         $sql="SELECT * FROM province6";
         $result=mysqli_query($connection,$sql);
         while($row=mysqli_fetch_array($result)){
         ?>

           <tr>
           <form action = "dashboard1.php" method= "GET">
             
            <td data-label="Municipality Name" name= "Municipality Name"><?php echo $row["wada"];?> </td></form>
            
             <td data-label="Option"><a href=<?php echo "delete6.php?id={$row['id']}&delete=delete"?> class="btn"><input type="submit" name="Delete" class="btn" value="Delete" 
          onClick="return confirm('Are you sure you want to Delete ?')?this.form.action='<?php echo $_SERVER['PHP_SELF'] ?>':false;"></a></td>
         
          </tr>

<?php
         } ?>
                      </tbody>
                </table>
                <a href="#"><button3 type="button" id="ex_btn" style="float: right;">Export </button3></a>
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
    let lst=[["Municipality Name"]];
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