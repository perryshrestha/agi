<!-- using php for connecting to database and storing the detail of farmer -->
<?php
session_start();
?>
<?php
		$fullname = $_POST['fullname'];
		$birthDate = $_POST['birthDate'];
		$familyCount = $_POST['familyCount'];
		$contactnumber = $_POST['contactnumber'];
		$farmingCrops = $_POST['farmingCrops'];
		$productionRate = $_POST['productionRate'];
		$marketRate = $_POST['marketRate'];
		$farmerRate = $_POST['farmerRate']; 

	

	// Database connection
	$app =  $_SESSION["name"];
	$conn = mysqli_connect('localhost','root','','farmerdetail');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into `$app` (fullname, birthDate, familyCount, contactnumber, farmingCrops, productionRate, marketRate, farmerRate) values(?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssiisiii", $fullname, $birthDate, $familyCount, $contactnumber, $farmingCrops, $productionRate, $marketRate, $farmerRate);
		 $execval = $stmt->execute();
		// echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		header("Location: detail.html");
		exit();
	}
?>