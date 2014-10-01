<?php
    require_once 'includes/DbTable.php';
    
    $db = new MySQL('erin', 'root', 'qwerty', 'localhost');
    
    $data = $db->Select('info');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Erin Site</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <div id="bio">&nbsp;</div>
        <div id="demo">&nbsp;</div>
        <div id="email">&nbsp;</div>
        <div id="contact">&nbsp;</div>
        <div id="social">
            <a href="http://facebook.com"><img src="images/social-in.png" class="" alt="in" /></a>&nbsp;
            <a href="http://twitter.com"><img src="images/social-tw.png" class="" alt="tw" /></a>&nbsp;
            <a href="http://facebook.com"><img src="images/social-fb.png" class="" alt="fb" /></a>
        </div>
        
        <!-- popup block -->
        <div id="popup-phone"><?php echo $data['phone']; ?></div>
        <div id="popup-email"><?php echo $data['email']; ?></div>
        <div id="popup-bio">
            <div id="bio-info"><?php echo $data['bio']; ?></div>
        </div>
         <div id="popup-demo">
            <audio id="audioplayer" controls>
                <source src="files/<?php echo $data['audio']; ?>" type="audio/mpeg" />
            </audio>
        </div>
        <!-- /popup block -->
	</div>
</body>
