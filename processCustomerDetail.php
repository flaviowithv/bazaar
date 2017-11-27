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
$gname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']); 

//Query statment
$sql = "INSERT INTO customers (gname, lname, email, address)
VALUES ('$gname', '$lname', '$email', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!!\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?><br>
Welcome <?php echo $_POST['firstname'] ;?><br>
Your email address is: <?php echo $_POST['email']; ?> <br>
Your address is: <?php echo $_POST['address']; ?> <br>

</body>
</html>