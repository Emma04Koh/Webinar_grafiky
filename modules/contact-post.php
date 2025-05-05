<?php
require_once('../require.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $db = new Database();
    $contact = new Contact($db);

    if ($contact->create($full_name, $email, $message)) {
        header("Location: ../contact-us.php");
        exit;
    }
}

header("Location: ../index.php");
exit
?>