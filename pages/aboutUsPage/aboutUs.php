<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../../assets/css/aboutUs.css">
</head>

<body>
    <header>
        <?php include(__DIR__ . "/../headerFooter/header.php"); ?>
    </header>

    <!-- Section 1 Title -->
    <section class="flex-center title">
        <h1>About Us</h1>
    </section>

    <!-- Section 2 Our Story -->
    <section class="flex-center">
        <div class="bubble story-bubble">
            <h2 class="section-heading">Our Story</h2>
            <p class="story-text">
                Welcome to TOL Reisbureau! We are a travel agency with a passion for helping families discover the world.
                Whether you are looking for a relaxing beach holiday or an exciting city trip, we are here to make your dream vacation a reality.
                Our team is dedicated to finding the best destinations and deals so your whole family can travel with ease and confidence.
            </p>
        </div>
    </section>

    <!-- Section 3 Our Mission -->
    <section class="flex-center">
        <div class="bubble mission-bubble">
            <h2 class="section-heading">Our Mission</h2>
            <p class="story-text">
                At TOL Reisbureau, our mission is simple: making travel fun, easy, and affordable for every family.
                We believe every family deserves an unforgettable adventure together.
            </p>
        </div>
    </section>

    <!-- Section 4 Our Team -->
    <section class="flex-center team-section">
        <div class="team-container">
            <h2 class="team-title">Meet Our Team</h2>
            <div class="team-grid">

                <a href="javascript:void(0)" onclick="openPopup('tygo')" class="team-card">
                    <h3 class="team-name">Tygo</h3>
                </a>

                <a href="javascript:void(0)" onclick="openPopup('owen')" class="team-card">
                    <h3 class="team-name">Owen</h3>
                </a>

                <a href="javascript:void(0)" onclick="openPopup('laura')" class="team-card">
                    <h3 class="team-name">Laura</h3>
                </a>

            </div>
        </div>
    </section>

    <div id="tygo" class="hidden popup-overlay">
        <div class="popup-card">
            <button onclick="closePopup('tygo')" class="popup-close">✕</button>
            <div class="popup-avatar">TY</div>
            <h3 class="popup-name">Tygo</h3>
            <p class="popup-role">Software developer</p>
            <p class="popup-bio">
                Tygo has been exploring the world since he was a child and brings that passion to every trip he plans.
                He specialises in family adventures across Europe and Southeast Asia.
                With an eye for detail, he makes sure every itinerary is both exciting and stress-free.
                Outside of work, you'll find him hiking or planning his next big trip.
            </p>
        </div>
    </div>

    <div id="owen" class="hidden popup-overlay">
        <div class="popup-card">
            <button onclick="closePopup('owen')" class="popup-close">✕</button>
            <div class="popup-avatar">OW</div>
            <h3 class="popup-name">Owen</h3>
            <p class="popup-role">software developer</p>
            <p class="popup-bio">
                Owen keeps everything running smoothly behind the scenes at TOL Reisbureau.
                He built our booking platform and makes sure the website is always fast and up to date.
                He has a talent for turning complex travel logistics into simple, easy steps for our customers.
                When he's not coding, Owen loves discovering hidden local gems on city trips.
            </p>
        </div>
    </div>

    <div id="laura" class="hidden popup-overlay">
        <div class="popup-card">
            <button onclick="closePopup('laura')" class="popup-close">✕</button>
            <div class="popup-avatar">LA</div>
            <h3 class="popup-name">Laura</h3>
            <p class="popup-role">Software developer</p>
            <p class="popup-bio">
                Laura is the friendly face of TOL Reisbureau and the first person you'll talk to when planning your holiday.
                She has helped hundreds of families find their perfect destination and loves hearing the travel stories afterwards.
                Laura speaks three languages and has lived in four different countries.
                Her personal favourite? A sunny beach holiday with great food nearby.
            </p>
        </div>
    </div>
    <script src="./aboutJS.js"></script>
</body>
<footer>
    <?php include(__DIR__ . "/../headerFooter/footer.php"); ?> 
</footer>
</html>