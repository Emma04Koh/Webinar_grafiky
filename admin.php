<?php 
include('components/header.php');


//$auth = new Authenticate($db);
//$auth->requireLogin();

$db = new Database();
$contact = new Contact($db);
$contacts = $contact->index();
//var_dump($contacts); //vypis na kontrolu


//pre adminov

if(isset($_GET['delete'])){
    $contact->destroy($_GET['delete']);
    header("Location:admin.php");
    exit;
}
?>

<section class="container">
    <h1>Vítaj admin</h1>

    <h2>Kontakty</h2>

    <table border =1>
        
        <tr>
            <th>ID</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Sprava</th>            
            <th>Odstrániť</th>         
            <th>Zobraziť</th>         
            <th>Editovať</th>
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
        </section>