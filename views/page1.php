<?php

var_dump($_GET);
var_dump($_GET['name']);
?>

<?php include 'partials/header.php'; ?>
    <h1>Hello <?= $_GET['name'] ?? 'Unknown' ?></h1>
<?php include 'partials/footer.php'; ?>