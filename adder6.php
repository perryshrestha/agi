<?php  
//farmer detail
       $app= $_GET['user'];
       $pass= $_GET['pass'];
            $conn = mysqli_connect("localhost","root","");
            $db=mysqli_select_db($conn,"farmerdetail");
            $sql="CREATE TABLE `$app` (
                id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fullname VARCHAR(50) NOT NULL,
                birthDate DATE NOT NULL,
                familyCount INT(50) NOT NULL,
                contactnumber INT(50) NOT NULL,
                farmingCrops VARCHAR(50) NOT NULL,
                productionRate INT(50) NOT NULL,
                marketRate INT(50) NOT NULL,
                farmerRate INT(50) NOT NULL
                )";
                if ($conn->query($sql) === TRUE) {
                    echo "Table MyGuests created successfully";
                  } else {
                    echo "Error creating table: " . $conn->error;
                  }
                  
                  $conn->close();
//crop
                  $conn = mysqli_connect("localhost","root","");
                  $db=mysqli_select_db($conn,"crop");
                  $sql="CREATE TABLE `$app` (
                      id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      cropname VARCHAR(50) NOT NULL,
                      img VARCHAR(50) NOT NULL,
                      marketrate VARCHAR(50) NOT NULL
                      )";
                      if ($conn->query($sql) === TRUE) {
                          echo "Table MyGuests created successfully";
                        } else {
                          echo "Error creating table: " . $conn->error;
                        }
                        
                        $conn->close();
//registration
                  $conn = mysqli_connect("localhost","root","");
                  $db=mysqli_select_db($conn,"loo");
                  $sql= "INSERT INTO login (Username, Pass, Usertype)
                  VALUES ('$app', '$pass', 'Municipality')";
                  if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  
                  $conn->close();
                 //province
                 $conn = mysqli_connect("localhost","root","");
                 $db=mysqli_select_db($conn,"province");
                 $sql= "INSERT INTO province7 (wada)
                 VALUES ('$app')";
                 if ($conn->query($sql) === TRUE) {
                   echo "New record created successfully";
                 } else {
                   echo "Error: " . $sql . "<br>" . $conn->error;
                 }
                 
                 $conn->close();
                 header("Location:add6.php");
?>