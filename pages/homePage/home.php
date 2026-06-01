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
                        <select name="departure">
                            <label>City...</label>
                            <option value="">Amsterdam</option>
                            <option value="">Porto</option>
                            <option value="">Athens</option>
                            <option value="">Barcalona</option>
                        </select>
                    </div>
                </div>

                <div class="search-field">
                    <label class="label">Destination</label>
                    <div class="field-input">
                        <img src="../../assets/img/pinPointer.png" alt="" height="20px" width="20px">
                        <select name="destination">
                            <label>City...</label>
                            <option value="">Amsterdam</option>
                            <option value="">Porto</option>
                            <option value="">Athens</option>
                            <option value="">Barcalona</option>
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

                    <?php

                    ?>

                    <div class="review-card">
                        <div>
                            <p class="reviewer-name">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                            <p class="review-text">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                        </div>
                        <div class="stars">
                            <?php
                            /*-php-*/
                            ?>
                        </div>
                    </div>

                    <div class="review-card">
                        <div>
                            <p class="reviewer-name">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                            <p class="review-text">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                        </div>
                        <div class="stars">
                            <?php
                            /*-php-*/
                            ?>
                        </div>
                    </div>

                    <div class="review-card">
                        <div>
                            <p class="reviewer-name">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                            <p class="review-text">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                        </div>
                        <div class="stars">
                            <?php
                            /*-php-*/
                            ?>
                        </div>
                    </div>

                    <div class="review-card">
                        <div>
                            <p class="reviewer-name">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                            <p class="review-text">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                        </div>
                        <div class="stars">
                            <?php
                            /*-php-*/
                            ?>
                        </div>
                    </div>

                    <div class="review-card">
                        <div>
                            <p class="reviewer-name">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                            <p class="review-text">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                        </div>
                        <div class="stars">
                            <?php
                            /*-php-*/
                            ?>
                        </div>
                    </div>

                    <div class="review-card">
                        <div>
                            <p class="reviewer-name">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                            <p class="review-text">
                                <?php
                                /*-php-*/
                                ?>
                            </p>
                        </div>
                        <div class="stars">
                            <?php
                            /*-php-*/
                            ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="write-review-row">
                <a href="#review-schrijven">Write a review!</a>
            </div>
        </section>

        <section class="aanbiedingpagina">
            <h1 class="aanbieding-text">Sale</h1>

            <div class="aanbieding-box">
            </div>

            <div class="aanbieding-box">
            </div>
        </section>

    </main>
    <footer></footer>
</body>

</html>