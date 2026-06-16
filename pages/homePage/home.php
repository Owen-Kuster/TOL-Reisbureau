<?php
include(__DIR__ . "/../../dbcalls/connection/connection.php");
include(__DIR__ . "/../../dbcalls/crud/Read/read.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../assets/css/home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOL-Home</title>
</head>

<body>
    <header>
        <?php
        include(__DIR__ . "/../headerFooter/header.php");
        ?>
    </header>
    <main>
        <section class="landingspagina">
            <form class="travel-search-box" action="" method="GET">

                <div class="search-field">
                    <label class="label">Departure</label>
                    <div class="field-input">
                        <img src="../../assets/img/pinPointer.png" alt="" height="20px" width="20px">
                        <select name="departure">
                            <label>City...</label>
                            <option value="">
                                <?php
                                echo $FlightDeparture['$FlightDeparture'];
                                ?>
                            </option>
                        </select>
                    </div>
                </div>

                <div class="search-field">
                    <label class="label">Destination</label>
                    <div class="field-input">
                        <img src="../../assets/img/pinPointer.png" alt="" height="20px" width="20px">
                        <select name="destination">
                            <label>City...</label>
                            <option value="">
                                <?php
                                ?>
                            </option>
                            <option value="">
                                <?php
                                ?>
                            </option>
                            <option value="">
                                <?php
                                ?>
                            </option>
                            <option value="">
                                <?php
                                ?>
                            </option>
                        </select>
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
                        <img src="../../assets/img/people.png" alt="" height="17px" width="40px">
                        <input type="number" name="people" min="1" max="99" placeholder="1">
                    </div>
                </div>

                <button type="submit" class="box-search">
                    <h4>Search</h4>
                </button>

            </form>
        </section>

        <section class="beoordelingspagina">

            <div class="reviews-section">
                <div class="reviews-track">

                    <div class="reviews-group">
                        <?php
                        foreach ($review as $reviewMessage) {
                            ?>
                            <div class="review-card">

                                <h1 class="reviewer-name">
                                    <?php
                                    echo $reviewMessage['ReviewName'];
                                    ?>
                                </h1>

                                <h4 class="review-text">
                                    <?php
                                    echo $reviewMessage['ReviewMessage'];
                                    ?>
                                </h4>

                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>

                            </div>
                            <?php
                        }
                        ?>
                    </div>

                </div>
            </div>

            <div class="write-review-row">
                <a href="#review-schrijven">Write a review!</a>
            </div>
        </section>

        <section class="aanbiedingpagina">
            <h1 class="aanbieding-text">Sale</h1>

            <div class="aanbiedingen-row">
                <div class="aanbieding-box">
                    <img class="aanbieding-img" src="../../assets/img/franceImgOne.png" alt="Hotel Cannes">
                    <div class="aanbieding-info">
                        <h3 class="aanbieding-naam">Family Staybridge Suites Cannes Centre - Frankrijk</h3>
                        <div class="aanbieding-prijs">
                            <p class="oude-prijs"><s>€299,-</s></p>
                            <p class="nieuwe-prijs">€179,-</p>
                        </div>
                        <div class="aanbieding-kenmerken">
                            <span>Toegang tot strand +</span>
                            <span>Oplaadstation EV</span>
                        </div>
                    </div>
                </div>

                <div class="aanbieding-box">
                    <img class="aanbieding-img" src="../../assets/img/spainImgTwo.png" alt="Hotel Spanje">
                    <div class="aanbieding-info">
                        <h3 class="aanbieding-naam">Canfranc Estación, a Royal Hideaway Hotel Family - Spanje</h3>
                        <div class="aanbieding-prijs">
                            <p class="oude-prijs"><s>€499,-</s></p>
                            <p class="nieuwe-prijs">€369,-</p>
                        </div>
                        <div class="aanbieding-kenmerken">
                            <span>Breakfast +</span>
                            <span>Parking space</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="aanbiedingen-row">
                <div class="aanbieding-box">
                    <img class="aanbieding-img" src="../../assets/img/greeceImgThree.png" alt="Hotel Griekenland">
                    <div class="aanbieding-info">
                        <h3 class="aanbieding-naam">Tholos Resort Family - Griekenland</h3>
                        <div class="aanbieding-prijs">
                            <p class="oude-prijs"><s>€399,-</s></p>
                            <p class="nieuwe-prijs">€299,-</p>
                        </div>
                        <div class="aanbieding-kenmerken">
                            <span>Toegang tot strand +</span>
                            <span>Breakfast</span>
                        </div>
                    </div>
                </div>

                <div class="aanbieding-box">
                    <img class="aanbieding-img" src="../../assets/img/spainImgFour.png" alt="Hotel Granada">
                    <div class="aanbieding-info">
                        <h3 class="aanbieding-naam">Hotel Granada Family Palace, Affiliated by Meliá - Spanje</h3>
                        <div class="aanbieding-prijs">
                            <p class="oude-prijs"><s>€399,-</s></p>
                            <p class="nieuwe-prijs">€349,-</p>
                        </div>
                        <div class="aanbieding-kenmerken">
                            <span>Toegang tot strand +</span>
                            <span>Parking space</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="write-review-row">
                <a href="#hotels">See all hotels</a>
            </div>
        </section>

    </main>
    <footer>
        <?php
        include(__DIR__ . "/../headerFooter/footer.php");
        ?>
    </footer>

    <script>
        setTimeout(function () {
            const box = document.querySelector('.travel-search-box');
            if (box) box.classList.add('visible');
        }, 100);
    </script>

</body>

</html>