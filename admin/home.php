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
                <h1>Welcome to the Admin Dashboard</h1>
            </div>
            <div class="content">
                <p>Event management system</p>
				<h1>Total Users: 
				
				<?php
				
				$connection=mysqli_connect("localhost","root","","cms");

				if($connection){
						//echo "connection is done";
				}
				else{
						echo "connection is not done";
				}
				
				
				$query="SELECT count(*) as cnt FROM `user_registration`";
					$res=mysqli_query($connection,$query);
					$result=mysqli_fetch_assoc($res)['cnt'];
					echo $result;
				
				?>
				
				
				</h1>
				<h1>Date: <?php echo date('d-m-Y'); ?></h1>
				<h1>IP Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></h1>
            </div>
        </div>
    </div>
</body>
</html>

