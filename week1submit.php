<?php
// Connect to MySQL database
$conn = mysqli_connect("localhost", "root", "", "Form_data");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];
$idtype = $_POST['idtype'];
$idnumber = $_POST['idnumber'];
$issueauthority = $_POST['issueauthority'];
$issuedate = $_POST['issuedate'];
$issuestate = $_POST['issuestate'];
$expiredate = $_POST['expiredate'];

// SQL query to insert form data into the database
$sql = "INSERT INTO your_table_name (fullname, dob, email, mobile, gender, occupation, idtype, idnumber, issueauthority, issuedate, issuestate, expiredate) VALUES ('$fullname', '$dob', '$email', '$mobile', '$gender', '$occupation', '$idtype', '$idnumber', '$issueauthority', '$issuedate', '$issuestate', '$expiredate')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
