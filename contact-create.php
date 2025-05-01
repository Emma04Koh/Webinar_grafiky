<?php
include('components/header.php');
$db = new Database();
$contact = new Contact($db);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //print_r($_POST);
    if ($contact->create($full_name, $email, $message)) {
      header("Location: admin.php");
      exit;
    } else {
        echo "Error creating contact.";
    }
  }
?>
<section class="container">
    <h1>Create contact</h1>
    <form id="contact" action="" method="POST">
        <input type="text" placeholder="Your name" id ="full_name" name="full_name" required><br>
        <input type="email" placeholder="Your email" id="email" name="email" required><br>
        <textarea placeholder="Your message" id="message" name="message" ></textarea><br>
        <input type="submit" value="Send Message">
    </form>
</section>

<?php
include('components/footer.php');
?>