<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include($root . '/student71/dwes/files/common-files/header.php')?>

<section id="container-form">
    <form class="login-form" action="login.php" method="POST">
        <h3>Login</h3>
        <label for="first-name">First name</label>
        <input type="text" name="c-first-name" id="first-name">

        <label for="last-name">Last name</label>
        <input type="text" name="c-last-name" id="last-name">

        <label for="email">Email</label>
        <input type="text" name="c-email" id="email">

        <div class="submit-button">
            <input class="submit" type="submit" name="submit">
        </div>
        <a href="">I forgot my password</a>
    </form>
</section>


<?php include($root . '/student71/dwes/files/common-files/footer.php')?>