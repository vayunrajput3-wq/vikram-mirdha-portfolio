<?php
$con = mysqli_connect("localhost", "root", "940226", "users");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['sb'])) {
    $fullname = mysqli_real_escape_string($con, $_POST['name']);
    $emailaddress = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // ✅ Column names sahi kiye
    $query = "INSERT INTO mydata(full_name, email_address, message)
              VALUES('$fullname', '$emailaddress', '$message')";

    $execute = mysqli_query($con, $query);

    if ($execute) {
        echo "Data saved!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>