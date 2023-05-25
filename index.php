<?php

declare(strict_types=1);

// basis verwijzing
const ROOT = "/UnescoWebsite";

// classes
require_once("classes/Pages.php");
require_once("classes/DBConn.php");

// session_start wordt zo opgeroepen over de gehele website
session_start();

?>
<!-- html / pagina oproepen -->
<!DOCTYPE html>
<html lang="nl">

    <head>
        <!-- bootstrap en eventueel eigen css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    <!-- icon -->
        <?php $page = Pages::getHeader(); ?>
            <link rel="icon" href="./images/schildlogo.png">
            <link rel="stylesheet" href="style.css">
        
        <title>UNESCO Guardians</title>
    </head>
    <body>
        <!-- pages worden zo opgeroepen, $page = de pagina wat je als eerst wilt laten zien-->
        <?php
        $page = Pages::getHeader();
        if ($page != "quiz") {
            require_once("required/Hamburger.php");
        }
        if ($page == "Start" ) {
            require_once("pages/" . $page . ".php");
        } else {
            $page = empty($page) ? "Start" : $page;

            require_once("pages/" . $page . ".php");
        }
        
        ?>
    </body>

</html>