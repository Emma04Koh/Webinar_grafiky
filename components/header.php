<?php 
  require('require.php');
  
  $db = new Database();
  $auth = new Authenticate($db);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EduWell - Education HTML5 Template</title>

    <?php
    add_stylesheets();
    ?>
<!-- TemplateMo 573 EduWell https://templatemo.com/tm-573-eduwell -->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                                <?php
                                    $pages = array(
                                    "Home"=>"index.php",
                                    "About Us"=>"about-us.php",
                                    "Our Services"=>"our-services.php",
                                    "Contact Us"=> "contact-us.php",
                                    );
                                    echo (get_menu($pages));
                                ?>
                                <?php if ($auth->isLoggedIn()): ?>
                                    <li><a href="logout.php">Logout</a></li>
                                <?php else: ?>
                                    <li><a href="login.php">Login</a></li>
                                <?php endif; ?>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
