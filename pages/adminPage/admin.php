<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>
 <header>
    <?php 
    // Include the header for the admin page
    // __DIR__ is that the redirect starts from this map
    include(__DIR__ . "/../headerFooter/headerAdmin.php"); 
    ?>
</header>

    <!-- Section 1 Admin Messages -->
    <section class="admin-message-section">
        <div class="flex-justify-content-center messagebox-container">
            <div class="bg-color-blue outline-purple-3px border-radius-5px flex-justify-content-center flex-column messagebox-outer-shell">

                <div class="flex-align-self-center messagebox-title">
                    <h1 class="font-style-italic">Berichten Box</h1>
                </div>

                <div class="bg-color-white flex-align-items-center flex-justify-content-center flex-align-self-center border-radius-20px outline-purple-2px messagebox-inner-shell">
                    <div class="message-area">
                        <div class="flex-row recieving-message-area">
 
                            <?php
                            // foreach
                            ?>
 
                            <!-- Messages -->
                            <div class="bg-color-blue outline-purple-2px border-radius-10px flex-column justify-content-space-between message-recieving-box">
                                <div class="flex-column msg-fields">
                                    <div class="color-222 font-size-20px font-weight-bold msg-field">NAME <?php //fill php ?></div>
                                    <div class="color-222 font-size-20px font-weight-bold msg-field">DATE <?php //fill php ?></div>
                                    <div class="color-222 font-size-20px font-weight-bold msg-field">EMAIL <?php //fill php ?></div>
                                    <div class="color-222 font-size-20px font-weight-bold msg-field">TEL <?php //fill php ?></div>
                                    <div class="color-333 font-size-20px font-weight-normal msg-body">
                                        <?php //fill php ?>
                                    </div>
                                </div>
                                <button class="cursor-pointer flex-text-align-center font-weight-bold font-size-20px border-radius-20px outline-purple-2px bg-color-white color-red btn-delete">DELETE</button>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>
        </div>
</section>
</html>