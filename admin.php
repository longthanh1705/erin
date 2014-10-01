<?php
    require_once 'includes/DbTable.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $arrParams = $_POST;
        
        if ($arrParams['username'] == 'admin' && $arrParams['password'] == '123456') {
            $db = new MySQL('erin', 'root', 'qwerty', 'localhost');
            $data = $db->Select('info');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Erin Admin</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <div id="login">
            <form role="form" action="update" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="username" name="email" value="<?php echo $data['email']; ?>" />
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data['phone']; ?>" />
                </div>
                <div class="form-group">
                    <label for="audio">Audio</label>
                    <input type="text" class="form-control" id="audio" name="audio" value="<?php echo $data['audio']; ?>" />
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" rows="8" name="bio"><?php echo $data['bio']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Save</button>
            </form>
        </div>
	</div>
</body>

<?php
        }
        else {
            header('Location: login.php');
        }
    }
    else {
        header('Location: login.php');
    }
?>
