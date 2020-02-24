<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Rock Airlines - Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="book.css">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logos/favicon.ico">
</head>

<body>

    <!-- Makes it so when the page is refreshed forms are not submitted again, problem was that when adding to flights when user 
    refreshed page it would be added again.
    https://stackoverflow.com/questions/6320113/how-to-prevent-form-resubmission-when-page-is-refreshed-f5-ctrlr
    -->
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home/home.html">
            <img style="margin-left: 12%;" alt="Brand" src="/images/logos/favicon.ico"><span
                style="color: #4d4d4d; z-index: 1; font-weight: 600; font-size: 15px;">&nbsp;&nbsp;Red Rock
                Airlines</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home/home.html">
                        <i class="material-icons">
                            home
                        </i>
                        <span class="home-icon">Home</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a style="color: #595959; font-weight: bold;" class="nav-link" href="/book/book.php">
                        <i class="material-icons">
                            book
                        </i>
                        Book
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/schedules/schedules.php">
                        <i class="material-icons">
                            schedule
                        </i>
                        Schedules
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/frequent/frequent.php">
                        <i class="material-icons material-airplane">
                            airplanemode_active
                        </i>
                        Frequent Flyer
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/jobs/job.html">
                        <i class="material-icons">
                            work
                        </i>
                        Jobs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/info/info.html#faq">
                        <i class="material-icons">
                            question_answer
                        </i>
                        FAQs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/info/info.html#privacy-policy">
                        <i class="material-icons">
                            help_outline
                        </i>
                        Contact
                    </a>

                    <hr />
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu dropdown-menu-nav" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/info/info.html#privacy-policy">Privacy Policy</a>
                        <a class="dropdown-item" href="/info/info.html#terms-and-conditions">Terms & Conditions</a>
                        <a class="dropdown-item" href="/info/info.html#about">About Us</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div id="main-image-holder">
        <img src="/images/book/bryce-canyon.jpg" alt="airport people walking" />
    </div>

    <div class = "animated fadeIn slower" id="explore-title" style="margin-left: 7%;">
        <h2>Book a flight today</h2>
        <i class="material-icons navigate-icon">
            navigate_next
        </i>
    </div>

    <form method="post" action="book.php#result">
        <div id="initial">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="state-select">Choose a departing location!</label>
                        <select name="from-select" class="form-control" id="from-select">
                            <option>-----</option>
                            <option>McCarran International Airport</option>
                            <option>Reno-Tahoe International Airport</option>
                            <option>Boise Airport</option>
                            <option>Idaho Falls Regional Airport</option>
                            <option>Phoenix Sky Harbor International Airport</option>
                            <option>Tuscon International Airport</option>
                            <option>Denver International Airport</option>
                            <option>Rogue Valley International-Medford Airport</option>
                            <option>Jackson Hole Airport</option>
                            <option>Portland International Airport</option>
                            <option>Salt Lake International Airport</option>
                            <option>Colorado Springs Airport</option>
                            <option>Saint George Municipal Airport</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="state-select">Choose an arriving location!</label>
                        <select name="to-select" class="form-control" id="to-select">
                            <option>-----</option>
                            <option>McCarran International Airport</option>
                            <option>Reno-Tahoe International Airport</option>
                            <option>Boise Airport</option>
                            <option>Idaho Falls Regional Airport</option>
                            <option>Phoenix Sky Harbor International Airport</option>
                            <option>Tuscon International Airport</option>
                            <option>Denver International Airport</option>
                            <option>Rogue Valley International-Medford Airport</option>
                            <option>Jackson Hole Airport</option>
                            <option>Portland International Airport</option>
                            <option>Salt Lake International Airport</option>
                            <option>Colorado Springs Airport</option>
                            <option>Saint George Municipal Airport</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="departure-date">Departure Date</label>
                        <input class="form-control" type="date" id="daparture-date">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="arrival-date">Arrival Date</label>
                        <input class="form-control" type="date" id="arrival-date">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="numberPassengers" class="col-form-label">Number of passengers</label>
                        <input name="numberPassengers" type="number" class="form-control" id="numberPassengers"
                            placeholder="Number of passengers">
                    </div>
                </div>
            </div>
        </div>
        <br /><br />
        <button name="submit" class="btn" type="submit">Search</button>
        </div>
        <?php
                $connection = mysqli_connect(
                    "fbla2020.cpf3yxrjif7m.us-east-2.rds.amazonaws.com", //host
                    "admin", //user
                    "aelb8362580", //password
                    "booking" //database
                );
    
                if(!$connection) { 
                    die("ERROR: Could not connect. ".mysqli_connect_error());
                }

                $departing_location = $_POST["from-select"];
                $departing;
                if($departing_location !== "-----") {
                    $departing = $departing_location;
                }
                
                $arriving_location = $_POST["to-select"];
                $arriving;
                if($arriving_location !== "-----") {
                    $arriving = $arriving_location;
                }

                $radio_id = 0;

                $sql = "SELECT * FROM flights WHERE departing_airport = '".$departing_location."' AND arriving_airport = '".$arriving_location."'";
                if($result = mysqli_query($connection, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "
                        <h1 id ='result'><br /><br /><br />Select a flight from below</h1><br />
                        <div class='table-responsive'>
                            <table class='table'>
                                <thead>
                                    <tr>
                                        <th scope ='col'>Select</th>
                                        <th scope='col'>ID</th>
                                        <th scope='col'>Departing From</th>
                                        <th scope='col'>Departing At</th>
                                        <th scope='col'>Arrival To</th>
                                        <th scope='col'>Arrival At</th>
                                        <th scope='col'>Seats Available</th>
                                        <th scope='col'>Price</th>
                                    </tr>
                                </thead>
                            <tbody>";

                        while($row = mysqli_fetch_array($result)){

                            $id = $row['id'];
                            $global_id = $row['id'];
                            echo "
                            <tr>
                                <td><div style = 'text-align: center;' class='form-check'>
                                <input class='form-check-input' type='radio' name='choice' value='$id'> 
                                
                              </div></td>
                                <th scope = 'row'>$id</th>
                                    <td>" . $row['departing_airport'] . ", " . $row['departing_state'] . "</td>
                                    <td>" . $row['departing_time'] . " on " . $row['departing_date'] . "</td>
                                    <td>" . $row['arriving_airport'] . ", " . $row['arriving_state'] . "</td>
                                    <td>" . $row['arriving_time'] . " on " . $row['arriving_date'] . "</td>
                                    <td>" . $row['seats_available'] . "</td>
                                    <td>" . "$ " . $row['price'] . "</td>
                                    </tr>";
                        }

                        echo "
                                </tbody>
                            </table>
                        </div>
                        <br /><br />
                        <form method = 'post' action = 'book.php'>
                            <div class = 'form-row'>
                                <div class = 'col'>
                                    <div class='form-group'>
                                        <label for='first-name' class='col-form-label'>First Name</label>
                                        <input name = 'first-name' type='text' class='form-control' id='first-name' placeholder='First name' required>
                                    </div>
                                </div>
                                <div class = 'col'>
                                    <div class='form-group'>
                                        <label for='last-name' class='col-form-label'>Last Name</label>
                                        <input name = 'last-name' type='text' class='form-control' id='last-name' placeholder='Last name' required>
                                    </div>
                                </div>
                            </div>
                            <div class = 'form-row'>
                                <div class = 'col'>
                                <div class='form-group'>
                                <label for='phone' class='col-form-label'>Telephone Number</label>
                                <input name = 'phone' type='tel' class='form-control' id='phone' placeholder='801-543-2100' required>
                            </div>
                                </div>
                            </div>
                            <div class = 'form-row'>
                                <div class = 'col'>
                                    <div class='form-group'>
                                        <label for='email' class='col-form-label'>Email</label>
                                        <input name = 'email' type='email' class='form-control' id='email' placeholder='Email address' required>
                                    </div>
                                </div>
                            </div>
                            <div class = 'form-row'>
                                <div class = 'col'>
                                    <div class='form-group'>
                                        <label for='credit-card-number' class='col-form-label'>Credit Card Number</label>
                                        <input name = 'credit-card-number' type='text' class='form-control' id='credit-card-number' placeholder='Credit card number' required>
                                    </div>
                                </div>
                            </div>
                            <div class = 'form-row'>
                                <div class = 'col'>
                                    <div class='form-group'>
                                        <label for='cvv' class='col-form-label'>CVV</label>
                                        <input name = 'cvv' type='text' class='form-control' id='cvv' placeholder='CVV' required>
                                    </div>
                                </div>
                                <div class = 'col'>
                                    <div class='form-group'>
                                        <label for='card-expiration'>Card Expiration Date</label>
                                        <input name='card-expiration' class='form-control' type='date' id='card-expiration' required>
                                    </div>
                                </div>
                            </div>
                            <div class = 'form-row'>
                                <div class = 'col'>
                                    <div class='form-group'>
                                        <label for='card-name-first' class='col-form-label'>Credit Card First Name</label>
                                        <input name = 'card-name-first' type='text' class='form-control' id='card-name-first' placeholder='First name' required>
                                    </div>
                                </div>
                                <div class = 'col'>
                                    <div class='form-group'>
                                        <label for='card-name-last' class='col-form-label'>Credit Card Last Name</label>
                                        <input name = 'card-name-last' type='text' class='form-control' id='card-name-last' placeholder='Last name' required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br /><br />
                        <button name = 'book' class='btn' type='submit'>Book</button>
                    </form>";
                    } else if($departing_location === "-----") {
                        if(isset($_POST["book"])) {
                            $card_name_last = $_POST["card-name-last"];
                            $card_name_first = $_POST["card-name-first"];
                            $card_expiration = $_POST["card-expiration"];
                            $cvv = $_POST["cvv"];
                            $credit_card_number = $_POST["credit-card-number"];
                            $email = $_POST["email"];
                            $phone = $_POST["phone"];
                            $last_name = $_POST["last-name"];
                            $first_name = $_POST["first-name"];
                            //check if radio button is selected
                            $flight_id = $_POST["choice"];
                            
                            // add variable that is set to the flight id of the flight that the user selects with a radio button. put variable in place of the "1".
                            $sql_insert = "INSERT INTO book(client_name, client_last, flight_id, client_phone, client_email, card_number, exp_date, cvv, card_first_name, card_last_name) VALUES ('$first_name', '$last_name', '$flight_id', '$phone', '$email', '$credit_card_number', '$card_expiration', '$cvv', '$card_name_first', '$card_name_last')";
                            if($query_result = mysqli_query($connection, $sql_insert)){
                                echo "<br /><br /><br /><br /><br /><h1>Your flight has been successfully booked!</h1>";
                            } else {
                                echo "<br /><br /><br /><br /><br /><h1>Sorry, an error occurred.</h1>";
                            }
                        }
                    } else if(mysqli_num_rows($result) == 0) {
                        if(isset($_POST["submit"])) {
                            echo "<br /><br /><br /><br /><br /><h1 id = 'result'>No results found.</h1>";
                        }
                    }
                }

                mysqli_free_result($result);

                mysqli_close($connection);
            
            ?>
        <br />
        <br />
    </form>


    <footer class="large-footer">
        <div style="text-align: center;" class="footerPart">
            <a href="/home/home.html"><img src="/images/logos/grey-red-rock-logo.png" alt="company image" /></a>
            &nbsp;&nbsp;&nbsp;<span>Red Rock Airlines</span>
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
        <div style="text-align: center;" class="footerPart">
            <h5>Visit Us</h5>
            <br />
            <a href="https://facebook.com/redrockairlines">Facebook</a> <br />
            <a href="https://twitter.com/redrockairlines">Twitter</a> <br />
            <a href="https://instagram.com/redrockairlines">Instagram</a>
            <br />
            <br />
            <br />
        </div>

        <div class="footerPart" id="scheduleBookHolder">
            <h5>Booking & Schedules&nbsp;&nbsp;&nbsp;</h5>
            <br />
            <a href="/book/book.php">Book a flight</a> <br />
            <a href="/schedules/schedules.php">Flight Schedules</a>
            <br />
            <br />
            <br />
            <br />
        </div>

        <div class="footerPart" id="learnMoreHolder">
            <br />
            <h5>Learn More</h5>
            <br />
            <a href="mailto:redrockairlines@help.com">Contact Us</a> <br />
            <a href="/info/info.html#privacy-policy">Privacy Policy</a> <br />
            <a href="/info/info.html#terms-and-conditions">Terms & Conditions</a> <br />
            <a href="/jobs/job.html">Jobs</a> <br />
            <a href="/info/info.html#about">About Red Rock Airlines</a> <br />
            <a href="/info/info.html#faq">FAQs</a><br />
            <a href="/info/info.html#credits">Credits</a>
        </div>

    </footer>

    <footer class="small-footer">
        <br />
        <div class="footer-part-small">
            <img src="/images/logos/grey-red-rock-logo.png" alt="company image" />
            &nbsp;&nbsp;&nbsp;<span>Red Rock Airlines</span>
        </div>
        <div class="footer-part-small">
            <h5>Visit Us</h5>
            <a href="https://facebook.com/redrockairlines">Facebook</a>&nbsp;&nbsp;
            <a href="https://twitter.com/redrockairlines">Twitter</a>&nbsp;&nbsp;
            <a href="https://instagram.com/redrockairlines">Instagram</a>
        </div>

        <div class="footer-part-small" id="scheduleBookHolder">
            <h5>Booking & Schedules</h5>
            <a href="/book/book.php">Book a flight</a>&nbsp;&nbsp;
            <a href="/schedules/schedules.php">Flight Schedules</a>
        </div>

        <div class="footer-part-small" id="learnMoreHolder">
            <h5>Learn More</h5>
            <a href="mailto:redrockairlines@help.com">Contact Us</a>&nbsp;&nbsp;
            <a href="/info/info.html#privacy-policy">Privacy Policy</a>&nbsp;&nbsp;
            <a href="/info/info.html#terms-and-conditions">Terms & Conditions</a>&nbsp;&nbsp;
            <a href="/jobs/job.html">Jobs</a>&nbsp;&nbsp;
            <a href="/info/info.html#about">About Red Rock Airlines</a>&nbsp;&nbsp;
            <a href="/info/info.html#faq">FAQs</a>&nbsp;&nbsp;
            <a href="/info/info.html#credits">Credits</a>
        </div>
    </footer>
</body>

</html>