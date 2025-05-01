<?php
require_once('components/require.php');

$db = new Database();
$auth = new Authenticate($db);
$auth->logout();

header("Location: login.php");
exit;
?>
