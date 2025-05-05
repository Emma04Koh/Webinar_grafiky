<?php
include('components/header.php');
$db = new Database();
$contact = new Contact($db);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $contactData = $contact->show($id);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['full_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if ($contact->update($id, $name, $email, $message)) {
          header("Location: admin.php");
          exit;
        } else {
            echo "Error editing contact.";
        }
      }
}

?>

<section class="container">
    <h1>Update contact</h1>
    <form id="contact" action="" method="POST">
        <input type="text"  id ="full_name" name="full_name"  value="<?php echo($contactData['full_name']);?>" required><br>
        <input type="email" id="email" name="email" value="<?php echo($contactData['email']);?>" required><br>
        <textarea id="message" name="message" ><?php echo($contactData['message']);?></textarea><br>
        <input type="submit" value="Edit contact">
    </form>
</section>

<?php
include('components/footer.php');
?>