<?php
    require_once 'includes/DbTable.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $arrParams = $_POST;
        
        $db = new MySQL('erin', 'root', 'qwerty', 'localhost');
        
        $set = array(
            'email' => $arrParams['email'],
            'phone' => $arrParams['phone'],
            'audio' => $arrParams['audio'],
            'bio' => $arrParams['bio'],
        );
        $where = array('id'=>1);
        $db->Update('info', $set, $where);
        
        header('Location: index.php');
    }
    else {
        header('Location: index.php');
    }
?>
