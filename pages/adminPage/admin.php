<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>

<body>
    <?php
    include("pages/headerFooter/headerAdmin.php");
    ?>
    <section class="admin-message-section">
        <div class="flex-justify-content-center messagebox-container">
            <div
                class="bg-color-blue outline-purple-4px border-radius-20px flex-justify-content-center flex-column messagebox-outer-shell">
                <div class="flex-align-self-center messagebox-title">
                    <h1 class="font-style-italic">Message Box</h1>
                </div>
                <div class="bg-color-white flex-align-items-center flex-justify-content-center flex-align-self-center border-radius-20px outline-purple-2px messagebox-inner-shell">
                    <div class="message-area">
                        <div class="recieving-message-area">
                            <div class="message-recieving-box">
                                <form class="message-recieving" action="#" method="GET">
                                    <input type="text" id="name" name="name" placeholder="Name">
                                </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>