<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vaccination Form</title>
</head>
<body>

<h2>Page 1: Registration Form</h2>

<form action="page2.php" method="post">

Name: <input type="text" name="name"><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<br><br>

Address: <input type="text" name="address"><br><br>

Division:
<select name="division">
    <option value="">Select Division</option>
    <option>Dhaka</option>
    <option>Chattogram</option>
    <option>Rajshahi</option>
    <option>Khulna</option>
    <option>Barishal</option>
    <option>Sylhet</option>
    <option>Rangpur</option>
    <option>Mymensingh</option>
</select>
<br><br>

Country:
<select name="country">
    <option value="">Select Country</option>
    <option>Bangladesh</option>
    <option>Other</option>
</select>
<br><br>

DOB: <input type="text" name="dob" placeholder="DD/MM/YYYY"><br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>