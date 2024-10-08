<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include($root . '/student71/dwes/files/header.php') ?>

<?php
if (isset($_POST['submit'])) {
    echo $_POST['c-first-name'];
    echo $_POST['c-last-name'];
    echo $_POST['c-email'];
}
?>

<section id="container-form">
    <form class="login-form" action="login.php" method="POST">
        <label for="first-name">First name</label>
        <input type="text" name="c-first-name" id="first-name">

        <label for="last-name">Last name</label>
        <input type="text" name="c-last-name" id="last-name">

        <label for="email">Email</label>
        <input type="text" name="c-email" id="email">

        <div class="submit-button">
            <input class="submit" type="submit" name="submit">
        </div>
    </form>
</section>


<?php include($root . '/student71/dwes/files/footer.php') ?>