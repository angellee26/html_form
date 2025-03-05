<?php
   echo "<pre>";
   var_dump($_POST);
   echo "</pre>";
   echo "<br><br>";

   $fullname = $_POST['FullName'];
   $gender = $_POST['Gender'];
   $country = $_POST ['Country'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wait_lang_sir";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php
    $sql = "INSERT INTO student_records (ID, Full_Name, Gender, Country)
        VALUES ('', '$fullname', '$gender', '$country')";

        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}