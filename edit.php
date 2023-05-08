<?php
session_start();
?>
<?php
$app =  $_SESSION["name"];
$id = $_GET['id'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"farmerdetail");
if (isset($_GET['delete'])){
    $query="delete from `$app` where id= {$id}";
    $result=mysqli_query($connection,$query);
    header("Location: dashboard.php");
    die();
}
if (isset($_POST['edit'])){
    $query= "update `$app` set fullname = '{$_POST['fullname']}', birthDate = '{$_POST['birthDate']}', familyCount = {$_POST['familyCount']}, contactnumber = {$_POST['contactnumber']}, farmingCrops = '{$_POST['farmingCrops']}', productionRate = {$_POST['productionRate']}, marketRate = {$_POST['marketRate']}, farmerRate = {$_POST['farmerRate']} where id = {$id} ";
    $result=mysqli_query($connection,$query);
    header("Location: dashboard.php");
    die();
}
$sql="SELECT * FROM `$app` where id = {$id}";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);
?>
<!-- using html and php for making detail farmer form -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <style>
            /* align at center */
            body {text-align: center;} 
            </style>
            <!-- assigning title -->
        <title>Detail Form | PHP</title>
        <link rel="stylesheet" href="style1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>       
    <div class="container">
    <!-- assigning title for form page -->
        <div class="title">Farmer Form </div>
        <!-- linking to registration.php -->
        <form  method="post">
            <div class ="user-details">
                <div class="fullname">
                    <span class="details">Full Name</span>
                    <input type="text"  value= <?php echo "'{$row['fullname']}'"?> placeholder="Enter your Fullname" required name="fullname"/>    
                </div>
                <div class="birthDate">
                    <span class="details">Birth date</span>
                    <input type="text" value= <?php echo "'{$row['birthDate']}'"?> placeholder="Enter in B.S." required name="birthDate" />    
                </div>
                <div class="familyCount">
                    <span class="details">Family Count</span>
                    <input type="text" value= <?php echo $row['familyCount']?> placeholder="Enter your Family Count" required name="familyCount" />    
                </div>
                <div class="contactnumber">
                    <span class="details">Contact</span>
                    <input type="text" value= <?php echo $row['contactnumber']?> placeholder="Enter your contact" required name="contactnumber" />    
                </div>
                <div class="farmingCrops">
                    <span class="details">Farming Crops</span>
                    <input type="text" value= <?php echo "'{$row['farmingCrops']}'"?> placeholder="Enter Farming crops" required name="farmingCrops" />    
                </div>
                <div class="productionRate">
                    <span class="details">Production Rate</span>
                    <input type="text" value= <?php echo $row['productionRate']?> placeholder="Enter Production Rate"  required name="productionRate" /> 
                    <div>
                        <select name="dropdown" id="dropdown" name="gender">
                        <option value="Male">kg</option>
                        <option value="gram">g</option>
                        <option value="Female">tons</option>
                    </select>
                </div>
                    <!-- <input type="text" value="kg" > -->
   
                </div>
                <div class="marketRate">
                    <span class="details">Market Rate</span>
                    <input type="text"  value= <?php echo $row['marketRate']?> placeholder="Enter Market Rate" required name="marketRate" />    
                </div>
                <div>
                    <select name="dropdown" id="market" name="marketrate">
                    <option value="rupees">Rs</option>
                </select>
            </div>
                <div class="farmerRate">
                    <span class="details">Farmer Rate</span>
                    <input type="text" value= <?php echo $row['farmerRate']?> placeholder="Enter Farmer Rate"required name="farmerRate" />    
                </div>
                <div>
                    <select name="dropdown" id="Farmer" name="farmerRate">
                    <option value="rupees">Rs</option>
                   
                </select>
            </div>
            <!-- resetting if press on cancel -->
                <div class="button1">
                        <input type="reset" value="Reset" name="cancel">    
                    </div>
                    <!-- Submitting the file if pressed at create button -->
                    <div class="button2">
                        <input type="submit" value="edit" name="edit">    
                    </div> 

            </div>
        </form>
    </div>
    </body>
</html>