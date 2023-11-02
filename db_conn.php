<?php


// Database credentials
define ('DB_host', 'localhost') ;
define ('DB_user', 'root') ;
define ('DB_password', '') ;
define ('DB_name', 'charity_db') ;

// Create a connection to the database
$conn = mysqli_connect(DB_host, DB_user, DB_password);

// Check the connection
if (!$conn) {
    die("Connection failed with connecting to server: " . mysqli_error());
}
else{
    echo "Loaded into server successfully";
}

$db_conn = mysqli_select_db($conn, DB_name);
if (!$db_conn) {
    die("Connection failed with connecting to database: " . mysqli_error());
}
else{
    echo "Loaded into database successfully";
}


// Data to be inserted
$legalName = $_POST['LegalName'];
$commonName = $_POST['CommonName'];
$street = $_POST['Street'];
$city = $_POST['City'];
$province = $_POST['Province'];
$postal_code = $_POST['Postal_code'];
$url = $_POST['myUrl'];

// SQL query to insert data into the table
$sql = "INSERT INTO CHARITY (LegalName, CommonName, Street, City, Province, Postal_code, URL) VALUES ('$legalName', '$commonName', '$street' , '$city' , '$province' , '$postal_code' , '$url')";

if (!mysqli_query($conn, $sql)) {
    die("Failed to insert data into database: " . mysqli_error());
}

mysqli_close($conn);

// --------------------------------------

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  // https://www.w3schools.com/php/php_file_upload.asp
}


?>

