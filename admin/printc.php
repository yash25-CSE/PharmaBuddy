<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="certificate">
        <div class="certificate-header">
            <h1>Medical Certificate</h1>
            <p>This is to certify that</p>
        </div>
        <div class="certificate-body">
            <h2 id="name"><?php echo $_GET['name']; ?></h2>
            <p></p>
            <h3 id="event-name"><?php echo $_GET['message']; ?></h3>
            <p>on</p>
            <h4 id="date">12-May-2024</h4>
        </div>
        <div class="certificate-footer">
            <p>Dr Kabir Singh</p>
            <h5>Jr Doctor AIMS</h5>
			<img src="sign.png" style="width:30%;">
        </div>
    </div>
</body>
</html>
