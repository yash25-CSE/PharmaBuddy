<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <?php include "menu.php"; ?>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Contacts</h1>
            </div>
            <div class="content">
                <?php
                $connection = mysqli_connect("localhost", "root", "", "cms");

                if ($connection) {
                    // echo "Connection is done";
                } else {
                    echo "Connection is not done";
                }
                ?>

                <table class="styled-table" border="1" style="width:100%;text-align:center;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>medicine</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM contact";
                        $res = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><?php echo $row['medicine']; ?></td>
                            <td><a href="deleteContact.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
