<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Erin Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <div id="login">
            <form role="form" action="admin.php" method="POST">
                <div class="form-group">
                    <label for="username">Email address</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
	</div>
</body>
