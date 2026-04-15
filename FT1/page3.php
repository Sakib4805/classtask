<?php
session_start();

echo "<h2>Page 3: Total Submission</h2>";

if (isset($_SESSION['data'])) {

    echo "Total: " . $_SESSION['data']['total'] . "<br>";
    echo "Male: " . $_SESSION['data']['male'] . "<br>";
    echo "Female: " . $_SESSION['data']['female'] . "<br>";

} else {
    echo "No data found.";
}
?>