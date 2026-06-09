<?php
include(__DIR__ . "/../../dbcalls/connection/connection.php");
include(__DIR__ . "/../../dbcalls/crud/Read/read.php");
?>


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
        // DIR for now until admin is seperate page
        // REMOVE when admin is seperate page
        include(__DIR__ . "/../headerFooter/headerAdmin.php"); ?>
    </header>

    <!-- Section 1 Admin Messages -->
    <section class="admin-message-section">
        <div class="flex-justify-content-center messagebox-container">
            <div
                class="bg-color-blue outline-purple-3px border-radius-5px flex-justify-content-center flex-column messagebox-outer-shell">

                <div class="flex-align-self-center messagebox-title">
                    <h1 class="font-style-italic">Message Box</h1>
                </div>

                <div
                    class="bg-color-white flex-align-items-center flex-justify-content-center flex-align-self-center border-radius-20px outline-purple-2px messagebox-inner-shell">
                    <div class="message-area">
                        <div class="flex-row recieving-message-area">

                            <?php
                            foreach ($contact as $message) {
                                ?>
                                <div
                                    class="bg-color-blue outline-purple-2px border-radius-10px flex-column justify-content-space-between message-recieving-box">
                                    <div class="flex-column msg-fields">
                                        <div class="color-222 font-size-20px font-weight-bold msg-field">NAME:
                                            <?php echo $message['ContactName']; ?>
                                        </div>
                                        <div class="color-222 font-size-20px font-weight-bold msg-field">SUBJECT:
                                            <?php echo $message['ContactSubject']; ?>
                                        </div>
                                        <div class="color-222 font-size-20px font-weight-bold msg-field">EMAIL:
                                            <?php echo $message['ContactEmail']; ?>
                                        </div>
                                        <div class="color-333 font-size-20px font-weight-normal msg-body">
                                            <?php echo $message['ContactMessage']; ?>
                                        </div>
                                    </div>
                                    <div class="flex-justify-content-center btn-delete-box">
                                        <a href="/dbcalls/crud/Delete/delete.php?ContactID=<?php echo $message['ContactID']; ?>"
                                            class="cursor-pointer flex-text-align-center font-weight-bold font-size-20px border-radius-20px outline-purple-2px bg-color-white color-red btn-delete">
                                            DELETE
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 2 admin manage flights -->
    <section class="admin-manage-flights flex-justify-content-center top-margin-100px">
        <div class="admin-manage-flights-container">
            <div class="admin-manage-flights-content">
                <h1 class="font-style-italic">Manage Flights</h1>
            </div>
            <div
                class="top-margin-20px bg-color-cream outline-purple-2px flex-column border-radius-20px admin-manage-flights-box">
                <div
                    class="bg-color-light-purple flex-align-items-center border-radius-top-20px admin-manage-flights-header">
                    <h1 class="font-weight-light color-white manage-flights-header-title">Manage Flights</h1>
                </div>

                <div class="flex-column admin-manage-flights-inner">

                    <form action="" method="POST" id="manage-flights">

                        <p class="font-weight-bold font-size-20px">Choose a flight</p>
                        <select class="outline-purple-1px border-radius-5px admin-manage-flights-select-full">
                            <option value="">Select a flight</option>
                            <?php //fill with php ?>
                        </select>

                        <div class="flex-row admin-manage-flights-row">
                            <div class="flex-column admin-manage-flights-field">
                                <p class="font-size-20px">Departure</p>
                                <select class="outline-purple-1px border-radius-5px admin-manage-flights-select">
                                    <option value=""></option>
                                    <?php //fill with php ?>
                                </select>
                            </div>
                            <div class="flex-column admin-manage-flights-field">
                                <p class="font-size-20px">Destination</p>
                                <select class="outline-purple-1px border-radius-5px admin-manage-flights-select">
                                    <option value=""></option>
                                    <?php //fill with php ?>
                                </select>
                            </div>
                        </div>

                        <div class="flex-row admin-manage-flights-row">
                            <div class="flex-column admin-manage-flights-field">
                                <p class="font-size-20px">Departure Date</p>
                                <select class="outline-purple-1px border-radius-5px admin-manage-flights-select">
                                    <option value=""></option>
                                    <?php //fill with php ?>
                                </select>
                            </div>
                            <div class="flex-column admin-manage-flights-field">
                                <p class="font-size-20px">Return Date</p>
                                <select class="outline-purple-1px border-radius-5px admin-manage-flights-select">
                                    <option value=""></option>
                                    <?php //fill with php ?>
                                </select>
                            </div>
                        </div>

                        <div class="flex-row admin-manage-flights-bottom-row">
                            <div class="flex-column admin-manage-flights-field">
                                <p class="font-size-20px">People</p>
                                <select class="outline-purple-1px border-radius-5px admin-manage-flights-select">
                                    <option value=""></option>
                                    <?php //fill with php ?>
                                </select>
                            </div>
                            <div
                                class="flex-align-items-center justify-content-space-between admin-manage-flights-actions">
                                <div><button
                                        class="cursor-pointer font-weight-bold font-size-20px border-radius-5px bg-color-red color-white admin-manage-flights-btn-delete">DELETE</button>
                                </div>
                                <div><button
                                        class="cursor-pointer font-weight-bold font-size-20px border-radius-5px bg-color-lightblue outline-purple-1px admin-manage-flights-btn-update">Update</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 admin add flights -->
    <section class="admin-add-flights flex-justify-content-center top-margin-100px">
        <div class="admin-add-flights-container">
            <div class="admin-add-flights-content">
                <h1 class="font-style-italic">Add Flights</h1>
            </div>
            <div
                class="top-margin-20px bg-color-cream outline-purple-2px flex-column border-radius-20px admin-add-flights-box">
                <div
                    class="bg-color-light-purple flex-align-items-center border-radius-top-20px admin-add-flights-header">
                    <h1 class="font-weight-light color-white manage-flights-header-title">Add Flights</h1>
                </div>

                <div class="flex-column admin-add-flights-inner">

                    <form action="../../dbcalls/crud/Create/create.php" method="POST" id="add-flights">
                        <div class="flex-row admin-add-flights-row">
                            <div class="flex-column admin-add-flights-field">
                                <p class="font-size-20px">Departure</p>
                                <select class="outline-purple-1px border-radius-5px admin-add-flights-select"
                                    name="departure" id="add-departure">
                                    <option value="">Choose a departure</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Athens">Athens</option>
                                    <option value="Nice">Nice</option>
                                    <option value="Amsterdam">Amsterdam</option>
                                </select>
                            </div>
                            <div class="flex-column admin-add-flights-field">
                                <p class="font-size-20px">Destination</p>
                                <select class="outline-purple-1px border-radius-5px admin-add-flights-select"
                                    name="destination" id="add-destination">
                                    <option value="">Choose a destination</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Athens">Athens</option>
                                    <option value="Nice">Nice</option>
                                    <option value="Amsterdam">Amsterdam</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex-row admin-add-flights-row">
                            <div class="flex-column admin-add-flights-field">
                                <p class="font-size-20px">Departure Time</p>
                                <select class="outline-purple-1px border-radius-5px admin-add-flights-select"
                                    name="departure_time" id="add-departure-time">
                                    <option value="">Choose a departure time</option>
                                    <option value="10:00">10:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="20:00">20:00</option>
                                </select>
                            </div>

                            <div class="flex-column admin-add-flights-field">
                                <p class="font-size-20px">Arrival Time</p>
                                <select class="outline-purple-1px border-radius-5px admin-add-flights-select"
                                    name="arrival_time" id="add-arrival-time">
                                    <option value="">Choose an arrival time</option>
                                    <option value="10:00">10:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="20:00">20:00</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex-row admin-add-flights-bottom-row">
                            <div class="flex-column admin-add-flights-field">
                                <p class="font-size-20px">People</p>
                                <select class="outline-purple-1px border-radius-5px admin-add-flights-select"
                                    name="people" id="add-people">
                                    <option value="">Choose number of people</option>
                                    <option value="100">100</option>
                                    <option value="125">125</option>
                                    <option value="150">150</option>
                                    <option value="175">175</option>
                                    <option value="200">200</option>
                                </select>
                            </div>
                            <div class="flex-column admin-add-flights-field">
                                <p class="font-size-20px">Price</p>
                                <select class="outline-purple-1px border-radius-5px admin-add-flights-select"
                                    name="price" id="add-price">
                                    <option value="">Choose a price per ticket</option>
                                    <option value="100">€100</option>
                                    <option value="125">€125</option>
                                    <option value="150">€150</option>
                                    <option value="175">€175</option>
                                    <option value="200">€200</option>
                                </select>
                            </div>
                            <div
                                class="flex-align-items-center justify-content-space-between admin-add-flights-actions">
                                <div><button
                                        class="cursor-pointer font-weight-bold font-size-20px border-radius-5px bg-color-lightblue outline-purple-1px admin-add-flights-btn-update">Add
                                        Flight</button></div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Section 4 admin booked flights -->
    <section class="flex-justify-content-center top-margin-100px admin-booked-flights">
        <div class="admin-booked-flights-container">
            <div class="admin-booked-flights-content">
                <h1 class="font-style-italic">Booked Flights</h1>
            </div>
            <div
                class="top-margin-20px bg-color-cream outline-purple-2px flex-column border-radius-20px admin-booked-flights-outer">
                <div
                    class="bg-color-light-purple flex-align-items-center border-radius-top-20px admin-booked-flights-header">
                    <h1 class="font-weight-light color-white booked-flights-header-title">Booked Flights</h1>
                </div>

                <div class="flex-column flex-justify-content-center admin-booked-flights-inner">
                    <div class="flex-column admin-booked-flights-column">

                        <?php foreach ($flights as $bookedflight) { ?>

                            <div class="flex-column flex-justify-content-center admin-booked-flights-field">
                                <div
                                    class="bg-color-white outline-purple-1px flex-justify-content-center border-radius-5px admin-booked-flights-box">
                                    <div class="flex-row flex-justify-content-center booked-flight-details-box">

                                        <div
                                            class="flex-justify-content-center flex-align-items-center flex-column booked-account-name details-box">
                                            <h1 class="font-size-20px font-weight-bold">Account Name</h1>
                                            <?php ?>
                                        </div>
                                        <div
                                            class="flex-justify-content-center flex-align-items-center flex-column booked-hotel-yesno details-box">
                                            <h1 class="font-size-20px font-weight-bold">Hotel</h1>
                                            <?php ?>
                                        </div>
                                        <div
                                            class="flex-justify-content-center flex-align-items-center flex-column booked-departure details-box">
                                            <h1 class="font-size-20px font-weight-bold">Departure</h1>
                                            <?php echo $bookedflight['FlightDeparture'] ?>
                                        </div>
                                        <div
                                            class="flex-justify-content-center flex-align-items-center flex-column booked-destination details-box">
                                            <h1 class="font-size-20px font-weight-bold">Destination</h1>
                                            <?php echo $bookedflight['FlightDestination'] ?>
                                        </div>
                                        <div
                                            class="flex-justify-content-center flex-align-items-center flex-column booked-people details-box">
                                            <h1 class="font-size-20px font-weight-bold">People Available</h1>
                                            <?php echo $bookedflight['FlightAvailableSeats'] ?>
                                        </div>
                                        <div
                                            class="flex-justify-content-center flex-align-items-center flex-column booked-departure-date details-box">
                                            <h1 class="font-size-20px font-weight-bold">Departure Time</h1>
                                            <?php echo $bookedflight['FlightDepartureTime'] ?>
                                        </div>
                                        <div
                                            class="flex-justify-content-center flex-align-items-center flex-column booked-return-date details-box">
                                            <h1 class="font-size-20px font-weight-bold">Arrival Time</h1>
                                            <?php echo $bookedflight['FlightArrivalTime'] ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- section 5 admin all flights -->
    <section class="flex-justify-content-center top-margin-100px admin-all-flights">
        <div class="admin-all-flights-container">
            <div class="admin-all-flights-content">
                <h1 class="font-style-italic">All Flights</h1>
            </div>
            <div
                class="top-margin-20px bg-color-cream outline-purple-2px flex-column border-radius-20px admin-all-flights-outer">
                <div
                    class="bg-color-light-purple flex-align-items-center border-radius-top-20px admin-all-flights-header">
                    <h1 class="font-weight-light color-white all-flights-header-title">All Flights</h1>
                </div>

                <div class="flex-column flex-justify-content-center admin-all-flights-inner">
                    <div class="flex-column admin-all-flights-column">

                        <?php foreach ($flights as $allflight) { ?>

                            <div class="flex-column flex-justify-content-center admin-all-flights-field">
                                <div class="bg-color-white outline-purple-1px border-radius-5px admin-all-flights-box">
                                    <div class="flex-row flex-justify-content-center all-flight-details-box">

                                        <div class="flex-justify-content-center flex-align-items-center flex-column all-account-name all-details-box">
                                            <h1 class="font-size-20px font-weight-bold">Departure</h1>
                                            <?php echo $allflight['FlightDeparture'] ?>
                                        </div>
                                        <div class="flex-justify-content-center flex-align-items-center flex-column all-hotel-yesno all-details-box">
                                            <h1 class="font-size-20px font-weight-bold">Destination</h1>
                                            <?php echo $allflight['FlightDestination'] ?>
                                        </div>
                                        <div class="flex-justify-content-center flex-align-items-center flex-column all-departure all-details-box">
                                            <h1 class="font-size-20px font-weight-bold">People Available</h1>
                                            <?php echo $allflight['FlightAvailableSeats'] ?>
                                        </div>
                                        <div class="flex-justify-content-center flex-align-items-center flex-column all-destination all-details-box">
                                            <h1 class="font-size-20px font-weight-bold">Price</h1>
                                            <?php echo $allflight['FlightPrice'] ?>
                                        </div>
                                        <div class="flex-justify-content-center flex-align-items-center flex-column all-people all-details-box">
                                            <h1 class="font-size-20px font-weight-bold">Departure Time</h1>
                                            <?php echo $allflight['FlightDepartureTime'] ?>
                                        </div>
                                        <div class="flex-justify-content-center flex-align-items-center flex-column all-departure-date all-details-box">
                                            <h1 class="font-size-20px font-weight-bold">Arrival Time</h1>
                                             <?php echo $allflight['FlightArrivalTime'] ?>
                                        </div>
                                        <div class="flex-justify-content-center flex-align-items-center flex-column all-return-date all-details-box">
                                            <h1 class="font-size-20px font-weight-bold">Flight ID</h1>
                                             <?php echo $allflight['FlightID'] ?>
                                            <?php //fill with php ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer><?php include(__DIR__ . "/../headerFooter/footer.php"); ?></footer>

</body>

</html>