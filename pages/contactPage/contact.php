<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../../assets/css/contactPage.css">
</head>

<body>
    <header>
        <?php include(__DIR__ . "/../headerFooter/header.php"); ?>
    </header>

    <!-- Section 1 Contact Form -->
    <section class="contact-section flex-justify-content-center top-margin-100px">
        <div class="contact-container">

            <div class="contact-title">
                <h1 class="font-style-italic">Contact</h1>
            </div>

            <div class="top-margin-20px bg-color-cream outline-purple-2px flex-column border-radius-20px contact-box">

                <div class="bg-color-light-purple flex-align-items-center border-radius-top-20px contact-header">
                    <h1 class="font-weight-light color-white contact-header-title">Contact Us</h1>
                </div>

                <div class="flex-column contact-inner">

                    <form action="" method="POST" id="contact-form">

                        <div class="flex-row contact-row">
                            <div class="flex-column contact-field">
                                <p class="font-size-20px">Name</p>
                                <input class="outline-purple-1px border-radius-5px contact-input" type="text" name="naam" placeholder="Your name"
                                    <?php //fill php ?>>
                            </div>
                            <div class="flex-column contact-field">
                                <p class="font-size-20px">Email</p>
                                <input class="outline-purple-1px border-radius-5px contact-input" type="email" name="email" placeholder="Uw email"
                                    <?php //fill php ?>>
                            </div>
                        </div>

                        <div class="flex-row contact-row">
                            <div class="flex-column contact-field">
                                <p class="font-size-20px">Phone Number</p>
                                <input class="outline-purple-1px border-radius-5px contact-input" type="tel" name="telefoon" placeholder="Your phone number"
                                    <?php //value php ?>>
                            </div>
                            <div class="flex-column contact-field">
                                <p class="font-size-20px">Subject</p>
                                <input class="outline-purple-1px border-radius-5px contact-input" type="text" name="onderwerp" placeholder="Onderwerp"
                                    <?php //value php ?>>
                            </div>
                        </div>

                        <div class="flex-column contact-field-full">
                            <p class="font-size-20px">Bericht</p>
                            <textarea class="outline-purple-1px border-radius-5px contact-textarea" name="bericht" placeholder="Uw bericht">
                                <?php //fill php ?></textarea>
                        </div>

                        <div class="flex-row contact-bottom-row">
                            <div class="flex-align-items-center contact-actions">
                                <button class="cursor-pointer font-weight-bold font-size-20px border-radius-5px bg-color-lightblue outline-purple-1px contact-btn-send">Verstuur</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

</body>

</html>