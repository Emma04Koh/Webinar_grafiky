<?php
include('components/header.php');

$db = new Database();
$user = new User($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $userData = $user->show($id);
}
?>

<section class="container">
    <h1>User detail</h1>
    <?php if ($userData): ?>
        <p>Name: <?= htmlspecialchars($userData['name']) ?></p>
        <p>Email: <?= htmlspecialchars($userData['email']) ?></p>
        <p>Role: <?= $userData['role'] == 0 ? 'Admin' : 'User' ?></p>
        <a href="admin.php">Back to user list</a>
    <?php else: ?>
        <p>User not found.</p>
        <a href="admin.php">Back to user list</a>
    <?php endif; ?>
</section>

<?php
include('components/footer.php');
?>
