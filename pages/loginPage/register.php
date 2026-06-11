<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../assets/css/register.css">
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
                <h1>Register</h1>
            </div>
            <div class="total-form">
                <div class="total-form">
    <form action="../../dbcalls/crud/Create/registerDB.php" method="POST">
        <div class="inputdiv">
            <label for=""></label>
            <input class="form" type="text" name="username" placeholder="Username">
        </div>
        <div class="inputdiv">
            <label for=""></label>
            <input class="form" type="password" name="password" placeholder="Password">
        </div>
        <div class="buttons">
            <button class="button" type="submit">Register</button>
            <a class="a" href="../passwordReset.php">Password reset</a>
            <a class="a" href="../login.php">Login</a>
        </div>
    </form>
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