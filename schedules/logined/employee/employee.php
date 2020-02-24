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
    <title>Employee Panel</title>
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
    <link rel="stylesheet" href="admin.css">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logos/favicon.ico">
</head>

<body>
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
                    <a style="color: #595959; font-weight: bold;" class="nav-link" href="/home/home.html">
                        <i class="material-icons">
                            home
                        </i>
                        <span class="home-icon">Home</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/book/book.php">
                        <i class="material-icons">
                            book
                        </i>
                        Flights
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/schedules/schedules.php">
                        <i class="material-icons">
                            schedule
                        </i>
                        Employees
                    </a>
                </li>

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

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql_select_employees = "SELECT * FROM users WHERE position = 'employee'";
        if($result = mysqli_query($connection, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $birthday = $row['birthday'];
                    $password = $row['password'];
                    $username = $row['username'];
                    $position = $row['position'];
                    $email = $row['email'];
                    
                    echo "
                    <h1><br /><br /><br />Current employees</h1>
                    <div class='table-responsive'>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th scope='col'>ID</th>
                                    <th scope='col'>First Name</th>
                                    <th scope='col'>Last Name</th>
                                    <th scope='col'>Birthday</th>
                                    <th scope='col'>Username</th>
                                    <th scope='col'></th>
                                    <th scope='col'>Price</th>
                                </tr>
                            </thead>
                        <tbody>
                    <tr>
                        <th scope = 'row'>$id</th>
                        <td>" . $row['first_name'] . "</td>
                        <td>" . $row['last_name'] . "</td>
                        <td>" . $row['birthday'] . "</td>
                        <td>" . $row['username'] . "</td>
                        <td>" . $row['password'] . "</td>
                        <td>" . $row['position'] . "</td>
                        <td>" . $row['email'] . "</td>
                        </tr>
                        </tbody>
                    </table>";
                }
            }
        }

        /*$sql_insert_employees = "INSERT INTO users(password, username, position) VALUES ('$username')";
        if($query_result = mysqli_query($connection, $sql_insert_employees)){
            echo "<br /><br /><br /><br /><br /><h1>Your flight has been successfully booked!</h1>";
        } else {
            echo "<br /><br /><br /><br /><br /><h1>Sorry, an error occurred.</h1>";
        }*/
    ?>
</body>

</html>