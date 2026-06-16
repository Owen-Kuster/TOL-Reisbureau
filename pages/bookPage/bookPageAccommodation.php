<?php
session_start();
if ($_SESSION['role'] == 'user'){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodation</title>
    <link rel="stylesheet" href="../../assets/css/bookPageAccommodation.css">
    <?php include '../headerFooter/header.php' ?>
</head>

<body>
    <section class="outward">
        <div class="title">
            <h1>Accommodation</h1>
        </div>

        <div class="searchBar">
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
                        <img src="../../assets/img/people.png" alt="" height="17px" width="40px">
                        <input type="number" name="people" min="1" max="99" placeholder="1">
                    </div>
                </div>
            </form>
        </div>

        <!-- Optioneel: alleen zichtbaar als hotel aangevinkt is -->
        <!-- php fill: if ($hotelSelected) { -->

        <!-- Hotel kaart -->
        <div class="placeholder">
            <div class="hotel-info">
                <div class="hotel-header">
                    <div class="hotel-name">Hotel Arts Barcelona <!-- php fill --></div>
                    <div class="hotel-stars">4 sterren <!-- php fill --></div>
                </div>
                <div class="hotel-location">Barcelona, Spanje <!-- php fill --></div>
                <div class="hotel-description">
                    Een modern luxehotel direct aan het strand met prachtig uitzicht op de Middellandse Zee. <!-- php fill -->
                </div>
            </div>

            <div class="hotel-divider"></div>

            <div class="bookNow">
                <div class="hotel-price">€ 180 <span class="per-night">per nacht</span> <!-- php fill --></div>
                <a href="#" class="bookBtn">BOOK HERE</a>
            </div>
        </div>

        <!-- php fill: } -->

    </section>
</body>

</html>
<?php 
}
?>