<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Rock Airlines - Schedule</title>
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
    <link rel="stylesheet" href="schedules.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="/book/book.php">
                        <i class="material-icons">
                            book
                        </i>
                        Book
                    </a>
                </li>
                <li class="nav-item active">
                    <a style="color: #595959; font-weight: bold;" class="nav-link" href="/schedules/schedules.php">
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
                        Adventure Miles
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
        <img src="/images/schedules/airport-departures.jpg" alt="airport flight board" />
    </div>

    <div class = "animated fadeIn slower" id="explore-title" style="margin-left: 7%;">
        <h2>Find a flight today</h2>
        <i class="material-icons navigate-icon">
            navigate_next
        </i>
    </div>

    <form method="post" action="schedules.php#results">
        <div class="form-group">
            <label for="state-select">Choose a state to see available flights!</label>
            <select name="state-select" class="form-control" id="state-select">
                <option>-----</option>
                <option>Colorado</option>
                <option>Utah</option>
                <option>Nevada</option>
                <option>Arizona</option>
                <option>Oregon</option>
                <option>Idaho</option>
                <option>Wyoming</option>
            </select>
            <br /><br />
            <button name = "submit" class="btn" type="submit">Submit</button>

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

                $state_dropdown = $_POST["state-select"];
                $state;
                if($state_dropdown !== "-----") {
                    $state = $state_dropdown;
                }
                
                $sql = "SELECT * FROM flights WHERE departing_state = '".$state_dropdown."'";

                if($result = mysqli_query($connection, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "
                        <h1 id = 'results'>" . "<br /><br /><br />Showing flights from " . $state_dropdown . "</h1>
                        <div class='table-responsive'>
                            <table class='table'>
                                <thead>
                                    <tr>
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

                            echo "
                            <tr>
                                <th scope='row'>$id</th>
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
                        <a class = 'btn' href = '/book/book.php'>Book Now</a>";

                    } else if($state_dropdown === "-----") {
                        echo "<br /><br /><br /><br /><h1>No results found.</h1>";
                    }
                }

                mysqli_free_result($result);

                mysqli_close($connection);
            ?>
 
        </div>
    </form>

    <div id="explore-title" style="margin-left: 7%;">
        <h2>What our customers are saying</h2>
        <i class="material-icons navigate-icon">
            navigate_next
        </i>
    </div>

    <div id="reviews-container">
        <div class="reviews-row">
            <img src="/images/schedules/customer1.jpg" />
            <div class="reviews-text">
                <h5>Tony Platt<br /><small><i>Aspen, Colorado</i></small></h5>

                <div class="reviews-holder">
                    <p> <i class="material-icons">
                            format_quote
                        </i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="reviews-row">
            <img src="/images/schedules/customer2.jpg" />
            <div class="reviews-text">
                <h5>Jack Callistar<br /><small><i>Salt Lake City, Utah</i></small></h5>

                <div class="reviews-holder">

                    <p> <i class="material-icons">
                            format_quote
                        </i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="reviews-row">
            <img src="/images/schedules/customer3.jpg" />
            <div class="reviews-text">
                <h5>Sophia Johnson<br /><small><i>Denver, Colorado</i></small></h5>

                <div class="reviews-holder">
                    <p> <i class="material-icons">
                            format_quote
                        </i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
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