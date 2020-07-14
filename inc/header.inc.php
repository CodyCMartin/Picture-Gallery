<?php

require_once 'inc/db_connect.inc.php';
require_once 'inc/functions.inc.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $pageTitle ?></title>
</head>
<?php if ($pageTitle == "Login" || $pageTitle == "Registration") {
    require_once 'inc/nav.inc.php';
} else {
    require_once 'inc/galleryNav.inc.php';
} ?>

<body>