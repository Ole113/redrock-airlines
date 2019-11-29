const setFlightsFile = require("../db/flights/setFlights.js");

connection.query(`SELECT * FROM flights;`, function (err, result) {
    if (err) console.log(err);
    if (!result.length) {
        
    }
}
