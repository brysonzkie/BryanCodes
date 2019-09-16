<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$prodname = $_POST['prodname'];
	$proddes = $_POST['proddes'];
	$price = $_POST['price'];
	$quan = $_POST['quan'];
		
	// checking empty fields
	if(empty($prodname) || empty($proddes) || empty($price) || empty($quan)) {
				
		if(empty($prodname)) {
			echo "<font color='red'>Product Name field is empty.</font><br/>";
		}
		
		if(empty($proddes)) {
			echo "<font color='red'>Product Description field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($quan)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql = "INSERT INTO users(prodname, proddes, price, quan) VALUES(:prodname, :proddes, :price, :quan)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':prodname', $prodname);
		$query->bindparam(':proddes', $proddes);
		$query->bindparam(':price', $price);
		$query->bindparam(':quan', $quan);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
