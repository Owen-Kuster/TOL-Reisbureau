<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../assets/css/home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOL-Home</title>
</head>

<body>
    <main>
        <section class="landingspagina">
            <form class="travel-search-box" action="" method="GET">

                <div class="search-field">
                    <label class="label">Departure</label>
                    <div class="field-input">
                        <img src="../../assets/img/pinPointer.png" alt="" height="20px" width="20px">
                        <input type="text" name="departure" placeholder="City...">
                    </div>
                </div>

                <div class="search-field">
                    <label class="label">Destination</label>
                    <div class="field-input">
                        <img src="../../assets/img/pinPointer.png" alt="" height="20px" width="20px">
                        <input type="text" name="destination" placeholder="City...">
                    </div>
                </div>

                <div class="search-field">
                    <label class="label">Hotel</label>
                    <div class="field-input">
                        <select name="hotel">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>

                    </div>
                </div>

                <div class="search-field">
                    <label class="label">Departure date</label>
                    <div class="field-input">
                        <img src="../../assets/img/calender.png" alt="" height="20px" width="20px">
                        <input type="text" name="departure_date" placeholder="dd/mm/yyyy">
                    </div>
                </div>

                <div class="search-field">
                    <label class="label">Return date</label>
                    <div class="field-input">
                        <img src="../../assets/img/calender.png" alt="" height="20px" width="20px">
                        <input type="text" name="return_date" placeholder="dd/mm/yyyy">
                    </div>
                </div>

                <div class="search-field">
                    <label class="label">People</label>
                    <div class="field-input">
                        <img src="../../assets/img/people.png" alt="" height="13px" width="30px">
                        <input type="number" name="people" min="1" max="99" placeholder="1">
                    </div>
                </div>

                <button type="submit" class="box-search">
                    <h4>Search</h4>
                </button>

            </form>
        </section>

        <section class="cointainer2 test">

            <body>

                <section class="reviews-section">
                    <div class="reviews-track">

                        <?php
                        /*
                         * ─────────────────────────────────────────────
                         *  PHP: haal reviews op uit de database
                         *  en loop er doorheen met een foreach.
                         *  Elke review heeft: naam, tekst, rating (1-5)
                         * ─────────────────────────────────────────────
                         *
                         * Voorbeeld:
                         *   $reviews = getReviewsFromDatabase();
                         *   foreach ($reviews as $review) {
                         *     $name   = htmlspecialchars($review['naam']);
                         *     $text   = htmlspecialchars($review['tekst']);
                         *     $rating = (int) $review['rating'];
                         *     // echo de kaart hieronder
                         *   }
                         */
                        ?>

                        <!-- REVIEW CARD — herhaal dit blok per review vanuit PHP -->

                        <div class="review-card">
                            <div>
                                <p class="reviewer-name">Fatima</p>
                                <p class="review-text">Alles was goed geregeld, zeker een aanrader voor het hele gezin.
                                </p>
                            </div>
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star empty">★</span>
                            </div>
                        </div>

                        <!-- ── Duplicaat voor naadloze loop ── -->

                        <div class="review-card">
                            <div>
                                <p class="reviewer-name">Ahmad</p>
                                <p class="review-text">Goede nederlandse service en ik via dit bedrijf naar mijn huis.
                                </p>
                            </div>
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star empty">★</span>
                                <span class="star empty">★</span>
                                <span class="star empty">★</span>
                                <span class="star empty">★</span>
                            </div>
                        </div>

                        <div class="review-card">
                            <div>
                                <p class="reviewer-name">Piet</p>
                                <p class="review-text">Geweldig!!!</p>
                            </div>
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>

                        <div class="review-card">
                            <div>
                                <p class="reviewer-name">Henk</p>
                                <p class="review-text">Reis liep echt perfect is alleen beetje prijzig.</p>
                            </div>
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star empty">★</span>
                            </div>
                        </div>

                        <div class="review-card">
                            <div>
                                <p class="reviewer-name">Niggel</p>
                                <p class="review-text">Geweldig geregeld, ben heel blij hoe mijn reis verlopen is! De
                                    kinderen vonden het ook super leuk!</p>
                            </div>
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>

                        <div class="review-card">
                            <div>
                                <h3 class="reviewer-name">Fatima</h3>
                                <p class="review-text">Alles was goed geregeld, zeker een aanrader voor het hele gezin.
                                </p>
                            </div>
                            <div class="stars">
                                <?php
                                /*-php*/
                                ?>
                            </div>
                        </div>

                    </div>
                </section>

                <div class="write-review-row">
                    <a href="/review-schrijven">Schrijf een review!</a>
                </div>
        </section>
    </main>
    <footer></footer>
</body>

</html>