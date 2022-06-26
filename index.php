<?php
include('db.php');

if (isset($_POST['submit'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $stmt = "INSERT INTO user VALUES(id, '$fName', '$lName', '$phone', '$mail')";
    $query = mysqli_query($sql, $stmt);
    if ($query) {
        echo "<h2>Success!!</h2>";
    };
};
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Testing Sql</title>
</head>
<body>
<div class="section">
    <h3>New Customer Form</h3>
    <form method="POST" action="#">
        <input type="text" name="fName" placeholder="First Name">
        <input type="text" name="lName" placeholder="Last Name">
        <input type="number" name="phone" placeholder="Phone Number">
        <input type="mail" name="mail" placeholder="Email">
        <input type="submit" name="submit" value="Add Query">
    </form>
    <a href="view.php">View Table</a>
    </div>
</body>
</html>