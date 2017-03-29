<?php
include 'includes/config.php';

    include 'views/head.php';




    include 'views/header.php';



    include 'views/menu.php';


if (!empty($_GET)){
  $page = $_GET['page'];
}
else{
  $page = 'home';
}

switch ($page) {


  case'home':
    include 'views/home.php';
    break;

  case'contact':
    include 'contact.php';
    break;

  default:
    include 'views/home.php';
}

include 'views/footer.php'
?>
