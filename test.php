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
        <link rel="stylesheet" href="/schedules/schedules.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
</head>
<body>
<form name = "form" method = "post" action = "test.php">
        <div class="form-group">
        <label for="airport-select">Choose an airport to see the available flights!</label>
        <select name = "airport-select" class="form-control" id="airport-select">
        <option>-----</option>
      <option>Denver International Airport, Colorado</option>
      <option>Colorado Springs Airport, Colorado</option>
      <option>Salt Lake International Airport, Utah</option>
      <option>Saint George Municipal Airport, Utah</option>
      <option>McCarran International Airport, Nevada</option>
      <option>Reno-Tahoe International Airport, Nevada</option>
      <option>Phoenix Sky H	arbor International Airport, Arizona</option>
      <option>Tuscon International Airport, Arizona</option>
      <option>Portland International Airport, Oregon</option>
      <option>Rogue Valley International-Medford Airport, Oregon</option>
      <option>Boise Airport, Idaho</option>
      <option>Idaho Falls Regional Airport, Idaho</option>
      <option>Jackson Hole Airport, Wyoming</option>
      <option>Yellowstone Regional Airport, Wyoming</option>
    </select>
    <br /><br />
    <button name = "submit" class="btn" type="submit">Submit</button>

    </div>

    <table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    </tbody>
    </table>
    </form>
    <?php
        $connection = mysqli_connect(
            "fbla2020.cpf3yxrjif7m.us-east-2.rds.amazonaws.com", //host
            "admin", //user
            "aelb8362580", //password
            "booking" //database
            );

            $airport_dropdown = $_POST["airport-select"];

            if(!$connection) { 
                die("ERROR: Could not connect. ".mysqli_connect_error());
            }

			$sql = "SELECT departingFrom, id FROM flights WHERE departingFrom = '".$airport_dropdown."'";
            if($result = mysqli_query($connection, $sql)){
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                      
						echo "<td>" . $row["id"] . "<br></td>";
						echo "<td>" . $row["departingFrom"] . "</td>";
				  }
              }
			}
			

        
/*
    if($airport_dropdown !== "-----") {
        echo($airport_dropdown);
    } else {
        echo("Please select a program");
    }*/
        mysqli_close($connection);

    ?>
</body>
</html>