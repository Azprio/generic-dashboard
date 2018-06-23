<html>
<head>
    <title>Add Data</title>
</head>

<body>


<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $city = mysqli_real_escape_string($mysqli, $_POST['city']);
    $country = mysqli_real_escape_string($mysqli, $_POST['country']);
    $postal = mysqli_real_escape_string($mysqli, $_POST['city']);
    $deviceId = mysqli_real_escape_string($mysqli, $_POST['deviceId']);
    $phoneNumber = mysqli_real_escape_string($mysqli, $_POST['phoneNumber']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    // checking empty fields
    if(empty($username) || empty($email) || empty($firstname) ) {

        if(empty($username)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($firstname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($lastname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($address)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($city)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($country)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($postal)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($deviceId)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($phoneNumber)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($password)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)

        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO `user` (`username`,`email`, `firstname`, `lastname`, `address`, `city`, `country`, `postal`,`deviceId`,`phoneNumber`,`password`) VALUES ('$username','$email','$firstname','$lastname','$address','$city','$country','$postal','$deviceId','$phoneNumber','$password')");

        //display success message
        header("Location: user.php");

    }
}
?>
</body>
</html>
