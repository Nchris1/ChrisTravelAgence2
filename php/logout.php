<?php
$_SESSION = array();
session_destroy();
 header('Location:../spamindex.html');
exit;
?>