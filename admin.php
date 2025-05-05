<?php 
include('components/header.php');


//$auth = new Authenticate($db);
//$auth->requireLogin();

$db = new Database();
$contact = new Contact($db);
$contacts = $contact->index();
//var_dump($contacts); //vypis na kontrolu

//user 
$auth = new Authenticate($db);
$auth->requireLogin();
$userRole = $auth->getUserRole();

//pre adminov
if ($userRole == 0) {
    $user = new User($db);
    $users = $user->index();
}


if(isset($_GET['delete'])){
    $contact->destroy($_GET['delete']);
    header("Location:admin.php");
    exit;
}

if (isset($_GET['delete_user'])) {
    $user = new User($db);
    $user->destroy($_GET['delete_user']);
    header("Location: admin.php");
    exit;
}

?>

<section class="container">
    <h1>Welcome admin</h1>

    <h2>Contacts</h2>

    <table border =1>
        
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>            
            <th>Delete</th>         
            <th>Show</th>         
            <th>Edit</th>
        </tr>
        <?php foreach($contacts as $con): ?>
            <tr>
                <td><?= htmlspecialchars($con['id']) ?></td>
                <td><?= htmlspecialchars($con['full_name']) ?></td>
                <td><?= htmlspecialchars($con['email']) ?></td>
                <td><?= htmlspecialchars($con['message']) ?></td>
                <td><a href="?delete=<?= $con['id'] ?>" onclick="return confirm('Are you sure you want to delete the contact?')">Delete</a></td>
                <td><a href="contact-edit.php?id=<?= $con['id'] ?>">Edit</a></td>
                <td><a href="contact-show.php?id=<?= $con['id'] ?>">Show</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php if ($userRole == 0): ?>
        <h2>Users</h2>
        <a href="user-create.php" class="button">Create User</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Show</th>
            </tr>
            <?php foreach($users as $u): ?>
                <tr>
                    <td><?= htmlspecialchars($u['id']) ?></td>
                    <td><?= htmlspecialchars($u['name']) ?></td>
                    <td><?= htmlspecialchars($u['email']) ?></td>
                    <td><?= htmlspecialchars($u['role']) ?></td>
                    <td><a href="?delete_user=<?= $u['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a></td>
                    <td><a href="user-edit.php?id=<?= $u['id'] ?>">Edit</a></td>
                    <td><a href="user-show.php?id=<?= $u['id'] ?>">Show</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

        </section>