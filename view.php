<?php include ('db.php');
$dd = "SELECT * FROM user";
$view = mysqli_query($sql, $dd);
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>
            <?php foreach ($view as $views): ?>
            <tr>
                <td><?= $views['id']; ?></td>
                <td><?= $views['first_name']; ?></td>
                <td><?= $views['last_name']; ?></td>
                <td><?= $views['phone']; ?></td>
                <td><?= $views['mail']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>