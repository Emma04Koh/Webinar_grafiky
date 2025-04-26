<?php 
 function get_menu(array $pages){
    $menuItems = ''; 
    foreach($pages as $page_name => $page_url){
        $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
    }
    return $menuItems;
}

function add_stylesheets(){
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    echo('<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">');
    echo('<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">');
    echo('<link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">');
    echo('<link rel="stylesheet" href="assets/css/fontawesome.css">');

    switch($page_name){
        case 'index':
            echo('<link rel="stylesheet" href="assets/css/flex-slider.css">');
            echo('<link rel="stylesheet" href="assets/css/lightbox.css">');
            echo('<link rel="stylesheet" href="assets/css/owl.css">');
            break;
        case 'about-us':
            echo('<link rel="stylesheet" href="assets/css/owl.css">');
            break;
        case 'our-services':
            echo('<link rel="stylesheet" href="assets/css/owl.css">');
            break;
    }
}

function add_scripts(){
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    echo('<script src="vendor/jquery/jquery.min.js"></script>');
    echo('<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>');
    
    switch($page_name){
        case 'index':
            echo('<script src="assets/js/lightbox.js"></script>');
            echo('<script src="assets/js/tabs.js"></script>');
            echo('<script src="assets/js/slick-slider.js"></script>');
            echo('<script src="assets/js/video.js"></script>');
            echo('<script src="assets/js/isotope.min.js"></script>');
            echo('<script src="assets/js/owl-carousel.js"></script>');
            echo('<script src="assets/js/custom.js"></script>');
            echo('<script src="assets/js/isotope.js"></script>');
            break;
        case 'our-services':
            echo('<script src="assets/js/isotope.min.js"></script>');
            echo('<script src="assets/js/owl-carousel.js"></script>');
            echo('<script src="assets/js/custom.js"></script>');
            echo('<script src="assets/js/slick-slider.js"></script>');
            break;
    }
}
# nejdu skripty
?>