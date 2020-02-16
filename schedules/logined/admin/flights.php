<!--
Add flights
Modify flights
Add employees


-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
    <link rel="stylesheet" href="../logined.css">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/favicon/favicon.ico">
</head>

<body data-spy="scroll" data-target="#scrollspy" data-offset="1">

    <!-- Makes it so when the page is refreshed forms are not submitted again, problem was that when adding to flights when user 
    refreshed page it would be added again.
    https://stackoverflow.com/questions/6320113/how-to-prevent-form-resubmission-when-page-is-refreshed-f5-ctrlr
    -->
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

    <!--sets the global variables of the database -->
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
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home/home.html">
            <img style="margin-left: 12%;" alt="Brand" src="/images/favicon/favicon.ico"><span
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
                    <a class="nav-link" href="/logined/admin/home.php">
                        <i class="material-icons">
                            home
                        </i>
                        <span class="home-icon">Home</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="color: #595959; font-weight: bold;" class="nav-link" href="/logined/admin/flights.php">
                        <i class="material-icons">
                            book
                        </i>
                        Flights
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logined/admin/employees.php">
                        <i class="material-icons">
                            schedule
                        </i>
                        Employees
                    </a>
                </li>

                <hr />
                </li>
            </ul>
        </div>
    </nav>

    <div id="wrapper">
        <div class="row">
            <nav class="col-sm-3 col-4" id="scrollspy">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#search">Search Flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#add">Add Flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modify">Modify Flights</a>
                    </li>
                </ul>
            </nav>
            <div class="col-sm-9 col-8">
                <div class="element-text" id="search">
                    <br /><br /><br />
                    <div class="title">
                        <h1 style="text-transform: none">Search Flights</h1>
                        <i class="material-icons navigate-icon">
                            navigate_next
                        </i>
                    </div>
                    <h3>Leave input blank to not add to search parameters.</h3>
                    <br /><br />
                    <form name="search" method="post" action="flights.php#search-results">

                        <div class="form-row">
                            <div class="col">
                                <!-- departure -->
                                <div class="form-group">
                                    <label for="search-departure">Date of Departure</label>
                                    <input name="search-departure" type="date" class="custom-select"
                                        id="search-departure">
                                </div>
                            </div>
                            <div class="col">
                                <!-- arrival -->
                                <div class="form-group">
                                    <label for="search-arrival">Date of Arrival</label>
                                    <input name="search-arrival" type="date" class="custom-select" id="search-arrival">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <!-- price -->
                                <div class="form-group">
                                    <label for="search-price">Price</label>
                                    <input name="search-price" type="number" class="form-control" id="search-price">
                                </div>
                            </div>
                            <div class="col">
                                <!-- Seats Available -->
                                <div class="form-group">
                                    <label for="search-seats">Seats Available</label>
                                    <input name="search-seats" type="number" class="form-control" id="search-seats">
                                </div>
                            </div>
                        </div>

                        <!-- state -->
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="search-from-select">Departing location</label>
                                    <select name="search-from-select" class="form-control" id="search-from-select">
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
                                    <label for="search-to-select">Arriving location</label>
                                    <select name="search-to-select" class="form-control" id="search-to-select">
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
                        <br></br>
                        <button name="submit-search" class="btn" type="submit">Search</button>
                    </form>

                    <?php
                        if(isset($_POST["submit-search"])) {
                            $departing_location_select = $_POST ["search-from-select"];
                            $departing_select;
                            if($departing_location_select !== "-----") $departing_select = $departing_location_select;
                            $arriving_location_select = $_POST ["search-to-select"];
                            $arriving_select;
                            if($arriving_location_select !== "-----") $arriving_select = $arriving_location_select;

                            $variable_name = array("departing_airport", "departing_date", "arriving_airport", "arriving_date", "seats_available", "price");
                            $variables = [
                                $departing_select,
                                $_POST["search-departure"],
                                $arriving_select,
                                $_POST["search-arrival"],
                                $_POST["search-seats"],
                                $_POST["search-price"]
                            ];

                            $sql = "SELECT * FROM flights WHERE ";

                            for($i = 0; $i < count($variables);$i++) {
                                if(empty($variables[$i])) {
                                    unset($variables[$i]);
                                    unset($variable_name[$i]);
                                    $temp_var = array_values($variables);
                                    $variables = $temp_var;
                                    $temp_name = array_values($variable_name);
                                    $variable_name = $temp_name;
                                    $i--;
                                }
                            }

                            for($j = 0; $j < count($variables); $j++) {
                                if($j == count($variables) - 1) $sql .= "" . $variable_name[$j] . " = '".$variables[$j]."';";
                                else $sql .= "" . $variable_name[$j] . " = '".$variables[$j]."' AND ";
                            }
                            
                            if($result = mysqli_query($connection, $sql)){
                                if(mysqli_num_rows($result) > 0) {
                                    echo "
                                    <div id = 'search-results'>
                                        <h1><br /><br />Showing flights based on parameters</h1><br /><br />
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
            
                                        $id = $row["id"];
            
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
                                    </div>";
            
                                } else if($departing_location_select === "-----") {
                                    echo "<div id = 'search-results'>
                                    <br /><br /><br /><br /><h1>No results found.</h1>
                                    </div>";
                                }
                            }

                            mysqli_free_result($result);
                        }
                    ?>
                    <br /><br /><br />
                    <hr style="margin-right: 10%;">
                </div>
                <div class="element-text" id="add">
                    <br /><br /><br />
                    <div class="title">
                        <h1 style="text-transform: none">Add Flights</h1>
                        <i class="material-icons navigate-icon">
                            navigate_next
                        </i>
                    </div>
                    <form name="add" method="post" action="flights.php#add-results">

                        <div class="form-group row">
                            <div class="col">
                                <!-- departure -->
                                <label for="add-departure">Date of Departure</label>
                                <input name="add-date-departure" type="date" class="custom-select" id="add-departure" required>
                            </div>
                            <div class="col">
                                <!-- arrival -->
                                <label for="add-arrival">Date of Arrival</label>
                                <input name="add-date-arrival" type="date" class="custom-select" id="add-arrival" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="add-time-depart-hour">Time of Departure Hour (24 hour)</label>
                                <input name="add-time-depart-hour" type="number" class="custom-select" id="add-time-depart-hour" required>
                            </div>
                            <div class="col">
                                <br />
                                <label for="add-time-depart-min">Time of Departure Minutes</label>
                                <input name="add-time-depart-min" type="number" class="custom-select" id="add-time-depart-min" required>
                            </div>
                            <div class="col">
                                <br />
                                <label for="add-time-arrival-hour">Time of Arrival Hour (24 hour)</label>
                                <input name="add-time-arrival-hour" type="number" class="custom-select" id="add-time-arrival-hour" required>
                            </div>
                            <div class="col">
                                <br />
                                <label for="add-time-arrival-min">Time of Arrival Minutes</label>
                                <input name="add-time-arrival-min" type="number" class="custom-select" id="add-time-arrival-min" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <!-- price -->
                                <label for="add-price">Price</label>
                                <input name="add-price" type="number" class="form-control" id="add-price" required>
                            </div>
                            <div class="col">
                                <!-- Seats Available -->
                                <label for="add-seats">Seats Available</label>
                                <input name="add-seats" type="number" class="form-control" id="add-seats" required>
                            </div>
                        </div>

                        <!-- state -->
                        <div class="form-group row">
                            <div class="col">
                                <label for="add-from-select">Departing location</label>
                                <select name="add-from-select" class="form-control" id="from-select-add" required>
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

                            <div class="col">
                                <label for="add-to-select">Arriving location</label>
                                <select name="add-to-select" class="form-control" id="add-to-select">
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
                        <br></br>

                        <button name="submit-add" class="btn" type="submit">Add</button>
                    </form>

                    <?php
                        if(isset($_POST["submit-add"])) {
                            $departing_location_add = $_POST["add-from-select"];
                            $departing_add;
                            if($departing_location_add !== "-----") $departing_add = $departing_location_add;
                            
                            $arriving_location_add = $_POST["add-to-select"];
                            $arriving_add;
                            if($arriving_location_add !== "-----") $arriving_add = $arriving_location_add;
            
                            //gets it from the individual inputs of hour / min and puts it in sql HH:M:S
                            $formated_time_departure = $_POST["add-time-depart-hour"] . ":" . $_POST["add-time-depart-min"] . ":" . "00";
                            $formated_time_arrival = $_POST["add-time-arrival-hour"] . ":" . $_POST["add-time-arrival-min"] . ":" . "00";

                            $airports = [
                                "Jackson Hole Airport",
                                "Portland International Airport",
                                "Rogue Valley International-Medford Airport",
                                "Idaho Falls Regional Airport",
                                "Boise Airport",
                                "McCarran International Airport",
                                "Reno-Tahoe International Airport",
                                "Salt Lake International Airport",
                                "Denver International Airport",
                                "Tuscon International Airport",
                                "Saint George Municipal Airport",
                                "Yellowstone Regional Airport",
                                "Phoenix Sky Harbor International Airport"
                            ];

                            $states = [
                                "Wyoming",
                                "Oregon",
                                "Oregon",
                                "Idaho",
                                "Idaho",
                                "Nevada",
                                "Nevada",
                                "Utah",
                                "Colorado",
                                "Arizona",
                                "Utah",
                                "Wyoming",
                                "Arizona"
                            ];

                            $state_departing;
                            $state_arriving;

                            //sets departing state
                            for($i = 0; $i < count($states); $i++) {
                                if($airports[$i] == $_POST["add-from-select"]) $state_departing = $states[$i];
                                if($airports[$i] == $_POST["add-to-select"]) $state_arriving = $states[$i];
                            }

                            if($i == $_POST["add-from-select"]) $state_departing = $i;
                            if($i == $_POST["add-to-select"]) $state_arriving = $i;

                            $variables = [
                                $state_departing,
                                $_POST["add-from-select"],
                                $formated_time_departure,
                                $_POST["add-date-departure"],
                                $state_arriving,
                                $_POST["add-to-select"],
                                $formated_time_arrival,
                                $_POST["add-date-arrival"],
                                $_POST["add-seats"],
                                $_POST["add-price"],
                            ];

                            $sql_insert = "INSERT INTO flights (departing_state, departing_airport, departing_time, departing_date, arriving_state, arriving_airport, arriving_time, arriving_date, seats_available, price) VALUES (";

                            for($i = 0; $i < count($variables);$i++) {
                                if($i == count($variables) - 1) $sql_insert .= "'" . $variables[$i] . "');";
                                else if(!empty($variables[$i])) $sql_insert .= "'" . $variables[$i] . "',";
                            }

                            if($query_result = mysqli_query($connection, $sql_insert)){
                                echo "<div id = 'add-results'
                                <br /><br /><br /><br /><br /><h1>The flight has been successfully booked!</h1>
                                </div>";
                            } else {
                                echo "<div id = 'add-results'
                                <br /><br /><br /><br /><br /><h1>Sorry, an error occurred.</h1>
                                </div>";
                            }
                        }
                    ?>
                    <br /><br /><br />
                    <hr style="margin-right: 10%;">
                </div>
                <div class="element-text" id="modify">
                    <!--User enters flight ID, pull up the flight info. Then echo form with inputs for all the flights info, say enter data to replace, leave blank to stay the same-->
                    <br /><br /><br />
                    <div class="title">
                        <h1 style="text-transform: none">Modify Flights</h1>
                        <i class="material-icons navigate-icon">
                            navigate_next
                        </i>
                    </div>
                    <h3>Get the Flight ID from Search Flights and enter it below.</h3>
                    <br /><br />
                    <form name="modify" method="post" action="flights.php#modify-results">
                        <div class="form-group">
                            <label for="modify-id">Flight ID</label>
                            <input name="modify-id" type="number" class="custom-select" id="modify-id">
                        </div>
                        <br /><br />
                        <button name="submit-modify" class="btn" type="submit">Modify</button>
                    </form>
                    <?php
                        if(isset($_POST["submit-modify"])) {

                            $sql = "SELECT * FROM flights WHERE id = " . $_POST['modify-id'] . "";

                            if($result = mysqli_query($connection, $sql)){
                                if(mysqli_num_rows($result) == 1) {
                                    while($row = mysqli_fetch_array($result)){
                                        echo "
                                        <div id = 'modify-results'>
                                            <br /><br /><br /><br /><br /><h3>Leave input blank to not modify flight value</h3><br /><br />
                                            <table class='table'>
                                                <thead>
                                                    <tr>
                                                        <th scope='col'>#</th>
                                                        <th scope='col'>Name</th>
                                                        <th scope='col'>Current Value</th>
                                                        <th scope='col'>New Value</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope='row'>1</th>
                                                        <td>Departing State</td>
                                                        <td>" . $row["departing_state"] . "</td>
                                                        <td>            
                                                            <select name='state-select' class='form-control' id='state-select'>
                                                                <option>-----</option>
                                                                <option>Colorado</option>
                                                                <option>Utah</option>
                                                                <option>Nevada</option>
                                                                <option>Arizona</option>
                                                                <option>Oregon</option>
                                                                <option>Idaho</option>
                                                                <option>Wyoming</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope='row'>2</th>
                                                        <td>Departing Airport</td>
                                                        <td>" . $row["departing_airport"] . "</td>
                                                        <td>
                                                            <select name='add-to-select' class='form-control' id='add-to-select'>
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
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope='row'>3</th>
                                                        <td>Departing Time</td>
                                                        <td>" . $row["departing_time"] . "</td>
                                                        <td>
                                                            <div class = 'form-group row'>
                                                                <div class = 'col'>
                                                                    <small>Hour (24)</small><input name='add-time-depart-min' type='number' class='custom-select' id='add-time-depart-min'><br />
                                                                </div>
                                                                <div class = 'col'>
                                                                    <small>Minutes</small><input name='add-time-depart-min' type='number' class='custom-select' id='add-time-depart-min'>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope='row'>4</th>
                                                        <td>Departing Date</td>
                                                        <td>" . $row["departing_date"] . "</td>
                                                        <td>
                                                            <input name='modify-date' type='date' class='custom-select' id=''>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope='row'>5</th>
                                                        <td>Arriving State</td>
                                                        <td>" . $row["arriving_state"] . "</td>
                                                        <td>            
                                                            <select name='state-select' class='form-control' id='state-select'>
                                                                <option>-----</option>
                                                                <option>Colorado</option>
                                                                <option>Utah</option>
                                                                <option>Nevada</option>
                                                                <option>Arizona</option>
                                                                <option>Oregon</option>
                                                                <option>Idaho</option>
                                                                <option>Wyoming</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope='row'>6</th>
                                                        <td>Arriving Airport</td>
                                                        <td>" . $row["arriving_airport"] . "</td>
                                                        <td>
                                                            <select name='add-to-select' class='form-control' id='add-to-select'>
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
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope='row'>7</th>
                                                        <td>Arriving Time</td>
                                                        <td>" . $row["arriving_time"] . "</td>
                                                        <td>
                                                            <div class = 'form-group row'>
                                                                <div class = 'col'>
                                                                    <small>Hour (24)</small><input name='add-time-depart-min' type='number' class='custom-select' id='add-time-depart-min'><br />
                                                                </div>
                                                                <div class = 'col'>
                                                                    <small>Minutes</small><input name='add-time-depart-min' type='number' class='custom-select' id='add-time-depart-min'>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope='row'>8</th>
                                                        <td>Arriving Date</td>
                                                        <td>" . $row["arriving_date"] . "</td>
                                                        <td>
                                                            <input name='modify-date' type='date' class='custom-select' id=''>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        ";
                                    }
                                } else {
                                    echo "
                                    <div id = 'modify-results'
                                        <br /><br /><br /><br /><br /><h1>No results were found with the submitted Flight ID.</h1>
                                    </div>";
                                }
                            }
                            mysqli_free_result($result);
                        }
                    ?>
                    <div style = "padding-bottom: 350px;"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>