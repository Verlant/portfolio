<!DOCTYPE html>
<html lang="en">

<?php
include_once 'head.php'
?>

<body>
    <?php
    include_once 'header.php';
    include_once 'nav.php';
    if (!isset($page)) {
        $page = 'acceuil';
    }
    switch ($page) {
        case "":
            include_once 'content/acceuil_content.php';
            break;
        case 'acceuil':
            include_once 'content/acceuil_content.php';
            break;
        case 'realisation':
            include_once 'content/realisation_content.php';
            break;
        case 'veille':
            include_once 'content/veille_content.php';
            break;
        case 'cv':
            include_once 'content/cv_content.php';
            break;
        default:
            // include_once 'content/404.html';
            header("Location: content/404.html");
            die();
            break;
    }
    include_once 'footer.php';
    ?>
</body>

</html>