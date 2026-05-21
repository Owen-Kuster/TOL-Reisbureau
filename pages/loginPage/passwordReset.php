<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/passwordReset.css">
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
                <h1>Password reset</h1>
            </div>
            <div class="total-form">
                <form action="#" method="POST">
                    <div class="inputdiv" >
                        <label for=""></label>
                        <input class="form" type="text" placeholder="Username">
                    </div>
                    <div class="inputdiv">
                        <label for=""></label>
                        <input class="form" type="password" placeholder="New Password">
                    </div>
                </form>
            </div>
            <div class="buttons">
                <button class="button">Reset password</button>
                <a class="a" href="./login.php">Login</a>
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