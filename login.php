<?php
include('components/header.php');
$db = new Database();
$auth = new Authenticate($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($auth->login($email, $password)) {
        header('Location: admin.php');
        exit;
    } else {
        $error = 'Wrong email or password';
    }
}
?>
<section class="container">
    <h2>Prihlásenie</h2>
    <?php if (isset($error)): ?>
        <div style="color:red;">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</section>
<?php
include('components/footer.php');
?>