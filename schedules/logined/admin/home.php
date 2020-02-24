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
    <link rel="stylesheet" href="/logined/logined.css">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logos/favicon.ico">
</head>

<body>

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
                    <a style="color: #595959; font-weight: bold;" class="nav-link" href="/logined/admin/home.php">
                        <i class="material-icons">
                            home
                        </i>
                        <span class="home-icon">Home</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logined/admin/flights.php">
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
                        <a class="nav-link" href="/logined/admin/admin.php#search">Search Flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logined/admin/admin.php#add">Add Flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logined/admin/admin.php#modify">Modify Flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logined/admin/employee.php#search">Search Employees</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="/logined/admin/employee.php#add">Add Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logined/admin/employee.php#modify">Modify Employees</a>
                    </li>
                </ul>
            </nav>
            <div class="col-sm-9 col-8">
                <div class="element-text" id="flights">
                    <br /><br /><br />
                    <div class="title">
                        <h1 style="text-transform: none" class="animated fadeInDown">About Us</h1>
                        <i class="material-icons navigate-icon">
                            navigate_next
                        </i>
                    </div>
                    <?php

                        $sql = "SELECT * FROM flights";
                        $flights_length;

                        if($result = mysqli_query($connection, $sql)){
                            $flights_length = mysqli_num_rows($result);
                        }

                        mysqli_free_result($result);

                        /*
                            max-flights                        230(pretty much 0 value of graph)
                                   /                      =                   /
                            current # of flights                              x
                        */

                        echo "
                        <style>
                            svg {
                                height: 300px;
                                display: inline-block;
                            }
                            
                            path {
                                stroke-linecap: round;  
                                stroke-width: 4.5px;
                            }
                            
                            path.grey-flights {
                                stroke: lightgrey;
                            }
                            
                            path.purple-flights {
                                stroke: purple;
                                stroke-dasharray: calc(40 * 3.142 * 1.85);
                                stroke-dashoffset: " . (230 - ((($flights_length * 230) / (200)))) . ";
                                /* 230 is about 5%, 0 is 100%, decrease from 230 to make it more pecent. */
                            }
                        </style>
                        ";

                        echo "
                        <div class = 'progress' style = 'display: inline-block'>
                            <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewbox='0 0 100 100'>
                                <path class='grey-flights' d='M40,90
                                        A40,40 0 1,1 60,90'
                                    style='fill:none;'/>
                                <path class='purple-flights' d='M40,90
                                        A40,40 0 1,1 60,90'
                                    style='fill:none;'/>
                                    <text x='50%' y='50%' text-anchor='middle' fill = 'grey' dy='0.3em'>" . round(($flights_length / 200) * 100) . "%</text>
                            </svg>
                        </div>
                        <div class = 'progress'>
                            <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewbox='0 0 100 100'>
                                <path class='grey-flights' d='M40,90
                                        A40,40 0 1,1 60,90'
                                    style='fill:none;'/>
                                <path class='purple-flights' d='M40,90
                                        A40,40 0 1,1 60,90'
                                    style='fill:none;'/>
                                <text x='50%' y='50%' text-anchor='middle' fill = 'grey' dy='0.3em'>" . round(($flights_length / 200) * 100) . "%</text>
                            </svg>
                        </div>
                        ";

                        /*
                            max-flights                        230(pretty much 0 value of graph)
                                   /                      =                   /
                            current # of flights                              x
                        */
                ?>
                </div>
                <br>
                <h4>Total flight capacity</h4>
            </div>
        </div>
    </div>




</body>

</html>