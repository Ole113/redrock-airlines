<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/favicon/favicon.ico">
</head>

<body>
    <div id="holder">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="post" action="login.php">
                        <h1>Login</h1>
                        <br />
                        <br />
                        <div class="form-group">
                            <label for="email-input">Email address</label>
                            <input name="email" type="email" class="form-control" id="email-input"
                                aria-describedby="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password-input">Password</label>
                            <input name="password" type="password" class="form-control" id="password-input"
                                placeholder="Password" required>
                        </div>
                        <br />
                        <br />
                        <button type="submit" class="btn btn-primary">Login</button>
                        </formmethod="post" action="book.php">
                </div>
                <div class="col">
                    <img src="/images/login/arches.jpeg" alt="arches picture dark" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>