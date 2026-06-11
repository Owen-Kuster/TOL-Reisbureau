<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<header>
    <?php
    include('../headerFooter/header.php');
    ?>
</header>

<body>
    <section class="flex-center">
        <div class="bubble">
            <div class="title">
                <h1>Login</h1>
            </div>
            <div class="total-form">
                <form action="#" method="POST">
                    <div class="inputdiv" >
                        <label for=""></label>
                        <input name="username" class="form" type="text" placeholder="Username">
                    </div>
                    <div class="inputdiv">
                        <label for=""></label>
                        <input name="password" class="form" type="password" placeholder="Password">
                    </div>
                </form>
            </div>
            <div class="buttons">
                <button class="button">Login</button>
                <a class="a" href="./passwordReset.php">Password reset</a>
                <a class="a" href="./register.php">Register</a>
            </div>
        </div>
    </section>
</body>
<footer>
    <?php
    include '../headerFooter/footer.php';
    ?>
</footer>

</html>