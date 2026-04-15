<?php
session_start();

$name = $_POST['name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$division = $_POST['division'];
$country = $_POST['country'];
$dob = $_POST['dob'];

$errors = "";

// Validation
if ($name == "") $errors .= "Name is required <br>";
if ($gender == "") $errors .= "Gender is required <br>";
if ($address == "") $errors .= "Address is required <br>";
if ($division == "") $errors .= "Division is required <br>";
if ($country == "") $errors .= "Country is required <br>";
if ($dob == "") $errors .= "DOB is required <br>";

echo "<h2>Page 2</h2>";

if ($errors != "") {
    echo $errors;
} else {

    // Calculate age
    $dobArray = explode("/", $dob);
    $birthDate = $dobArray[2] . "-" . $dobArray[1] . "-" . $dobArray[0];

    $today = date("Y-m-d");

    $age = date_diff(date_create($birthDate), date_create($today));

    if ($age->y < 5) {
        echo "You are eligible for vaccination <br><br>";
    } else {
        echo "You are NOT eligible for vaccination (Age must be under 5)<br><br>";
    }

    echo "Details:<br>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age->y . "Y " . $age->m . "M " . $age->d . "D<br>";

    // Save gender count in session (simple static array style)
    if (!isset($_SESSION['data'])) {
        $_SESSION['data'] = array(
            "total" => 0,
            "male" => 0,
            "female" => 0
        );
    }

    $_SESSION['data']['total']++;

    if ($gender == "Male") {
        $_SESSION['data']['male']++;
    } else if ($gender == "Female") {
        $_SESSION['data']['female']++;
    }

    echo "<br><a href='page3.php'>Go to Page 3</a>";
}
?>