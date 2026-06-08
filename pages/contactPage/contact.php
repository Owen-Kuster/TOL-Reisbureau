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

            <div class="top-margin-20px bg-color-cream outline-blue-2pxs flex-column border-radius-20px contact-box">

                <div class="bg-color-lightblue flex-align-items-center border-radius-top-20px contact-header">
                    <h1 class="font-weight-light color-white contact-header-title">Contact Us</h1>
                </div>

                <div class="flex-column contact-inner">

                    <form action="saveContactForm.php" method="POST" id="contact-form">

                        <div class="flex-row contact-row">
                            <div class="flex-column contact-field">
                                <p class="font-size-20px">Name</p>
                                <input class="outline-purple-1px border-radius-5px contact-input" type="text" name="ContactName" placeholder="Your name"
                                    <?php //fill php 
                                    ?>>
                            </div>
                            <div class="flex-column contact-field">
                                <p class="font-size-20px">Email</p>
                                <input class="outline-purple-1px border-radius-5px contact-input" type="email" name="ContactEmail" placeholder="Your email"
                                    <?php //fill php 
                                    ?>>
                            </div>
                        </div>

                        <div class="flex-row contact-row">
                            <div class="flex-column contact-field">
                                <p class="font-size-20px">Subject</p>
                                <input class="outline-purple-1px border-radius-5px contact-input" type="text" name="ContactSubject" placeholder="Subject"
                                    <?php //value php 
                                    ?>>
                            </div>
                        </div>

                        <div class="flex-column contact-field-full">
                            <p class="font-size-20px">Message</p>
                            <textarea class="outline-purple-1px border-radius-5px contact-textarea" name="ContactMessage" placeholder="Your message">
                                <?php //fill php 
                                ?></textarea>
                        </div>

                        <div class="flex-row contact-bottom-row">
                            <div class="flex-align-items-center contact-actions">
                                <button class="cursor-pointer font-weight-bold font-size-20px border-radius-5px bg-color-lightblue outline-purple-1px contact-btn-send">Send Message</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
        <div class="margin-100-bottom"></div>
    </section>

    <footer><?php include(__DIR__ . "/../headerFooter/footer.php"); ?></footer>

</body>

</html>