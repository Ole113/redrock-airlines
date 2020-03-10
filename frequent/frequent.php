<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Rock Airlines - Our Adventure Miles Rewards</title>
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
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link rel="stylesheet" href="frequent.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="/book/book.php">
                        <i class="material-icons">
                            book
                        </i>
                        Book
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/schedules/schedules.php">
                        <i class="material-icons">
                            schedule
                        </i>
                        Schedules
                    </a>
                </li>
                <li class="nav-item active">
                    <a style="color: #595959; font-weight: bold;" class="nav-link" href="/frequent/frequent.php">
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
        <img src="/images/frequent/airport-people-blur.jpg" alt="airport people walking" />
    </div>

    <div class = "animated fadeIn slower" id="explore-title" style="margin-left: 7%;">
        <h2>Join our Adventure Miles Program</h2>
        <i class="material-icons navigate-icon">
            navigate_next
        </i>
    </div>

    <div id = "infoHolder">
        <div class="container">
            <div class="row">
                <div class="col-md jumbotron">
                    <h1 class="display-4">Red Rock Adventure Miles</h1>
                    <br /><br /><br />
                    <ul>
                        <li>Miles will be earned based on ticket price</li>
                        <br>
                        <li>Miles are earned at a rate of 3 miles per USD</li>
                        <br>
                        <li>Miles can be spent on trips, flights, and hotels</li>
                        <br>
                        <li>Miles can also be used on upgrading seats and other amenities.</li>
                        <br>
                        <li>Miles are used as currency</li>
                        <br>
                        <br /><br />
                    </ul>
                    <a href="#joinNow" class="btn">Join now</a>
                </div>
                <div class="col-md">
                    <img src="/images/frequent/airplane-wing-clouds.jpg" alt="airplane window w/ wing">
                </div>
            </div>
        </div>
    </div>

    <div id="main-points-wrapper">
        <div class="point">
            <i class="material-icons-outlined">
                explore
            </i>
            <h5>Points don't expire</h5>
        </div>
        <div class="point">
            <i class="material-icons-outlined">
                monetization_on
            </i>
            <h5>Free to join</h5>
        </div>
        <div class="point">
            <i class="material-icons-outlined">
                date_range
            </i>
            <h5>No blackout dates</h5>
        </div>
    </div>

    <div class="container-fluid">
        <div id="explore-title" style="margin-left: 1.5%;">
            <h2>Explore With Your Rewards</h2>
            <i class="material-icons navigate-icon">
                navigate_next
            </i>
        </div>
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="/images/frequent/walkingArches.jpeg" class="card-img-top" alt="utah arches image">
                    <div class="card-body">
                        <h5 class="card-title">Utah</h5>
                        <p class="card-text">From delightful desert areas to snowy white mountains, Utah has it all. To
                            the South, adventures are greeted with 5 national parks, Arches, Zion, Bryce Canyon,
                            Canyonlands, and Capital Reef. To the North, you can hit the slopes in the Wasatch
                            mountains.
                        </p>
                        <a target = "_blank" href="https://www.nps.gov/arch/index.htm" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="/images/frequent/arizona-desert.jpg" class="card-img-top" alt="arizona canyon">
                    <div class="card-body">
                        <h5 class="card-title">Arizona</h5>
                        <p class="card-text">This state is home to the massive and jaw-dropping Grand Canyon. The result
                            of 6 million years of erosion, the vast Grand Canyon is beautiful, daunting and unique. You
                            can also go sightseeing at Antelope Canyon and Horseshoe Bend.
                        </p>
                        <a target = "_blank" href="https://www.nps.gov/state/az/index.htm" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="/images/frequent/crater-lake.jpeg" class="card-img-top" alt="crater lake">
                    <div class="card-body">
                        <h5 class="card-title">Oregon</h5>
                        <p class="card-text">Whether you want to see the Pacific Ocean or climb the volcanic Mount Hood,
                            Oregon will not disappoint. Oregon has a diverse landscape of forests, mountains, farms, and
                            beaches. Portland, Oregon's largest city, is home to several performing arts institutions
                            and microbreweries.</p>
                        <a target = "_blank" href="https://www.nps.gov/state/or/index.htm" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="/images/frequent/wyoming-canyon.jpeg" class="card-img-top" alt="wyoming canyon">
                    <div class="card-body">
                        <h5 class="card-title">Wyoming</h5>
                        <p class="card-text">This state is home to National Parks: Grand Teton and Yellowstone. Here
                            you can find amazing landmarks like Old Faithful, the Grand Prismatic Spring, the Teton
                            Range and Yellowstone Lake. Wyoming is home to Cheyenne Frontier Days, the largest rodeo in
                            the US.
                        </p>
                        <a target = "_blank" href="https://www.nps.gov/grte/index.htm" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="explore-title" style="margin-left: 7%;">
        <h2>Join Adventure Miles Today!</h2>
        <i class="material-icons navigate-icon">
            navigate_next
        </i>
    </div>


    <form id = "joinNow" name="frequentFlierForm" method="post" action="frequent.php">

        <!-- first name -->
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="ff-first-name">First Name</label>
                    <input name="ff-first-name" type="text" class="form-control" id="ff-first-name"
                        placeholder="Enter first name" required>
                </div>
            </div>
            <!-- last name -->
            <div class="col">
                <div class="form-group">
                    <label for="ff-last-name">Last Name</label>
                    <input name="ff-last-name" type="text" class="form-control" id="ff-last-name"
                        placeholder="Enter last name" required>
                </div>
            </div>
        </div>

        <!-- birthday -->
        <div class="form-group">
            <label for="ff-birthday">Date of Birth</label>
            <input name="ff-birthday" type="date" class="custom-select" id="ff-birthday">
        </div>

        <!--email-->
        <div class="form-group">
            <label for="ff-email">Email address</label>
            <input name="ff-email" type="email" class="form-control" id="ff-email" aria-describedby="ff-email"
                placeholder="Enter email address" required>
        </div>


        <!-- address -->
        <div class="form-group">
            <label for="ff-address">Street Address</label>
            <input name="ff-address" type="text" class="form-control" id="ff-address"
                placeholder="Enter your street address" required>
        </div>


        <!-- city -->
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="ff-city">City Name</label>
                    <input name="ff-city" type="text" class="form-control" id="ff-city" placeholder="Enter city name"
                        required>
                </div>
            </div>
            <!-- state -->
            <div class="col">
                <div class="form-group">
                    <label for="state-select">State Name</label>
                    <select name="state-select" class="form-control" id="state-select" required>
                        <option>-----</option>
                        <option>Colorado</option>
                        <option>Utah</option>
                        <option>Nevada</option>
                        <option>Arizona</option>
                        <option>Oregon</option>
                        <option>Idaho</option>
                        <option>Wyoming</option>
                    </select>
                </div>
            </div>

            <!-- postal code-->
            <div class="col">
                <div class="form-group">
                    <label for="ff-zip">ZIP Code</label>
                    <input name="ff-zip" type="integer" class="form-control" id="ff-zip" placeholder="Enter ZIP code"
                        required>
                </div>
            </div>
        </div>

        <br></br>

        <button name="submit" class="btn" type="submit">Submit</button>

            <?php
                if(isset($_POST["submit"])) {
                    $ff_first_name = $_POST["ff-first-name"];
                    $ff_last_name = $_POST["ff-last-name"];
                    $ff_birthday = $_POST["ff-birthday"];
                    $ff_email = $_POST["ff-email"];
                    $ff_address = $_POST["ff-address"];
                    $ff_city = $_POST["ff-city"];
    
                    $select_state = $_POST["state-select"];
                    $ff_state;
                    if($select_state !== "-----") {
                        $ff_state = $select_state;
                    }
    
                    $ff_zip = $_POST["ff-zip"];
    
                    // database info for connection
                    $host = "fbla2020.cpf3yxrjif7m.us-east-2.rds.amazonaws.com";//host
                    $user = "admin"; //user
                    $password = "aelb8362580"; //password
                    $databaseName = "booking"; //database
    
                    $conn = new mysqli($host, $user, $password, $databaseName);
                    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
    
                    $sql = "INSERT INTO frequent(
                        first_name, 
                        last_name, 
                        birthday, 
                        address, 
                        city, 
                        state, 
                        zip_code, 
                        email)
                        VALUES('$ff_first_name', '$ff_last_name', '$ff_birthday', '$ff_address', '$ff_city', '$ff_state', '$ff_zip', '$ff_email')";
    
                    if($query_result = mysqli_query($conn, $sql)){
                        echo "<br /><br /><br /><br /><br /><h1>Your flight has been successfully booked!</h1>";
                    } else {
                        echo "<br /><br /><br /><br /><br /><h1>Sorry, an error occurred.</h1>";
                    }

                    $conn->close();
                }
            ?>
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
            <h5 style="font size: 20px text-transform: none">Visit Us</h5>
            <br />
            <a href="https://facebook.com/redrockairlines">Facebook</a> <br />
            <a href="https://twitter.com/redrockairlines">Twitter</a> <br />
            <a href="https://instagram.com/redrockairlines">Instagram</a>
            <br />
            <br />
            <br />
            <br />
        </div>

        <div class="footerPart" id="scheduleBookHolder">
            <h5 style="font size: 20px text-transform: none">Booking & Schedules&nbsp;&nbsp;&nbsp;</h5>
            <br />
            <a href="/book/book.php">Book a flight</a> <br />
            <a href="/schedules/schedules.php">Flight Schedules</a>
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>

        <div class="footerPart" id="learnMoreHolder">
            <br />
            <h5 style="font size: 20px text-transform: none">Learn More</h5>
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
            <h5 style="font-size: 20px text-transform: none">Visit Us</h5>
            <a href="https://facebook.com/redrockairlines">Facebook</a>&nbsp;&nbsp;
            <a href="https://twitter.com/redrockairlines">Twitter</a>&nbsp;&nbsp;
            <a href="https://instagram.com/redrockairlines">Instagram</a>
        </div>

        <div class="footer-part-small" id="scheduleBookHolder">
            <h5 style="font-size: 20px text-transform: none">Booking & Schedules</h5>
            <a href="/book/book.php">Book a flight</a>&nbsp;&nbsp;
            <a href="/schedules/schedules.php">Flight Schedules</a>
        </div>

        <div class="footer-part-small" id="learnMoreHolder">
            <h5 style="font size: 20px text-transform: none">Learn More</h5>
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