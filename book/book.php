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

    <link rel="icon" type="image/png" href="/images/favicon/favicon.ico">
</head>

<body>

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
                    <a class="nav-link" href="/home/home.html">
                        <i class="material-icons">
                            home
                        </i>
                        <span class="home-icon">Home</span>
                        <span class="sr-only">(current)</span>
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
                <li class = "nav-item active">
                    <a style="color: #595959; font-weight: bold;" class = "nav-link" href = "/book/book.php">
                        <i class = "material-icons">
                            book
                        </i>
                        Book
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/frequent/frequent.html">
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


    <form style = "padding-top: 200px" method="post" action="book.php">
        Name : <input type="text" name="user_name" placeholder="Enter Your Name" /><br />
        Email : <input type="email" name="user_email" placeholder="Enter Your Email" /><br />
        Message : <textarea name="user_text"></textarea><br />
        <input type="submit" value="Submit" />
    </form>

	<?php 
		/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("fbla2020.cpf3yxrjif7m.us-east-2.rds.amazonaws.com", "admin", "aelb8362580", "booking");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['user_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['user_email']);
$email = mysqli_real_escape_string($link, $_REQUEST['user_text']);
 
// Attempt insert query execution
$sql = "INSERT INTO reservations (name, email, departureDate, from, to) VALUES (";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
	?>
      
<!--
    <div id = "reviews">
        <div class = "review">
            <h5 class="review-title">Tony Platt<br /><small><i>Aspen Colorado</i></small></h5>
            <p class = "review-body">

            </p>
        </div>
        <div class = "review">
            <h5 class="review-title">Jack Callistar<br /><small><i>Salt Lake City Utah</i></small></h5>
            <p class = "review-body">

            </p>
        </div>
        <div class = "review">
            <h5 class="review-title">Sophia Johnson<br /><small><i>Salt Lake City Utah</i></small></h5>
            <p class = "review-body">

            </p>
        </div>
    </div>
-->
</body>

</html>