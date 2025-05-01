<?php
include('components/header.php');

$db = new Database();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    if ($user->create($name, $email, $role, $password)) {
        header("Location: admin.php");
        exit;
    } else {
        echo "<p style='color: red;'>Error creating user. There may already be a user with this email.</p>";
    }
}
?>

<section class="container">
    <h1>Add user</h1>
    <form id="user" action="" method="POST">
        <input type="text" placeholder="Name" id="name" name="name" required><br>
        <input type="email" placeholder="Email" id="email" name="email" required><br>
        
        <select id="role" name="role" required>
            <option value="" disabled selected>Choose role</option>
            <option value="0">Admin</option>
            <option value="1">User</option>
        </select><br>

        <input type="password" placeholder="Password" id="password" name="password" required><br>
        <input type="submit" value="Create">
    </form>
</section>

<?php
include('components/footer.php');
?>
