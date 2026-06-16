<?php
session_start();
if ($_SESSION['role'] == 'user'){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inward Journey</title>
    <link rel="stylesheet" href="../../assets/css/bookPageInward.css">
    <?php include '../headerFooter/header.php' ?>
</head>

<body>
    <section class="outward">
        <div class="title">
            <h1>Inward journey</h1>
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

        <!-- Vlucht kaart -->
        <div class="placeholder">
            <div class="bubble01">
                <div class="bubble011 icons-row">
                    <div class="flight-icon">
                        <img src="../../img/Outward-Inward/departure.png" alt="departure">
                    </div>
                    <div class="flight-duration">
                        <span>0lh 45m <!-- php fill --></span>
                    </div>
                    <div class="flight-icon">
                        <img src="../../img/Outward-Inward/arrival.png" alt="arrival">
                    </div>
                </div>

                <div class="bubble011 times-row">
                    <div class="flight-point">
                        <div class="time">06:45 <!-- php fill --></div>
                        <div class="place">AMS <!-- php fill --></div>
                    </div>
                    <div class="flight-point right">
                        <div class="time">08:30 <!-- php fill --></div>
                        <div class="place">BCN <!-- php fill --></div>
                    </div>
                </div>
            </div>

            <div class="bookNow">
                <a href="#" class="bookBtn">BOOK HERE</a>
                <div class="seats">150 plaatsen over <!-- php fill --></div>
            </div>
        </div>

    </section>
</body>

</html>
<?php 
}
?>