<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333333;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-size: 14px;
            color: #666666;
        }
        input[type="text"], 
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form>
            <label for="usname">Enter Your Username</label>
            <input type="text" name="uname" id="usname" required>
            <label for="password">Enter Your Password</label>
            <input type="password" name="password" id="password" required>
			
			<span id="errormsg"></span><br/><br/>
            <input type="submit" name="submit" id="submit" value="Login" onCLick="doLogin();">
        </form>
    </div>
	
	
	<?php 
	
			if(isset($_GET['submit'])){
				
				$uname=$_GET['uname'];
				$password=$_GET['password'];
				
				if($uname == 'admin' and $password == 'admin'){
						echo "sucessful login";
						header("Location:home.php");
				}
				else{
						echo "fail login";
				}
				
			}
	
	
	
	?>
	
	
	
</body>
</html>
