<!doctype html>

<html>
<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bazaardb";

//Create Connection

$conn = new mysqli($servername, $username, $password, $dbname);


//Test Connection
if ($conn ->connect_error) {
	die("Connection to database failed: " . $conn->connect_error);
}


//Sanitizing input
$pname = mysqli_real_escape_string($conn, $_POST['productname']);
$pdesc = mysqli_real_escape_string($conn, $_POST['productdescription']);
$colour = mysqli_real_escape_string($conn, $_POST['colour']);
$price = $_POST['price']; 
$imagepath = mysqli_real_escape_string($conn, $_POST['imagepath']); 

echo gettype($price);

//Query statment
$sql = "INSERT INTO products (productid, productname, productdesc, colour, price, imagepath)
VALUES ('$pname', '$pdesc', '$colour', '$price', '$imagepath')";

echo "the price is: "; $_POST['price'];

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!!\n";
	echo "Product ";  $_POST['productname']; echo " sucessfully recorded!\n";
	echo "Price: "; $_POST['price']; echo "\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?><br>


</body>
</html>