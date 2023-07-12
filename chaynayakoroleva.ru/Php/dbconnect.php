<?php
    require ("config.php");
    $db = mysqli_connect ("$HOST", "$USER", "$PASS", "$DB");
    if($db->connect_error){
        die("Ошибка: " . $db->connect_error);
    }
?>