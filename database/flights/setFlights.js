const connection = require("../connect.js");

exports.run = async () => {
    
    //times on 24 hour system
    connection.query(`INSERT INTO flights (departingFrom, arrivalAt, departingTime, departingDate, arrivalTime, arrivalDate, totalSeats, seatsAvailable, price) VALUES ("Denver International Airport", "Salt Lake International Airport", "8:15:00", "2019-07-19", "13:30:00", "2019-07-19", "700", "300", "105");`, function (err, result) {
        if (err) console.log(err);
    });
    connection.query(`INSERT INTO flights (departingFrom, arrivalAt, departingTime, departingDate, arrivalTime, arrivalDate, totalSeats, seatsAvailable, price) VALUES ("Salt Lake International Airport", "Denver International Airport", "10:15:00", "2020-03-26", "15:30:00", "2020-03-26", "740", "180", "105");`, function (err, result) {
        if (err) console.log(err);
    });
    connection.query(`INSERT INTO flights (departingFrom, arrivalAt, departingTime, departingDate, arrivalTime, arrivalDate, totalSeats, seatsAvailable, price) VALUES ("McCarran International Airport", "Salt Lake International Airport", "18:30:00", "2019-12-03", "20:00:00", "2019-12-03", "400", "80", "155");`, function (err, result) {
        if (err) console.log(err);
    });
    connection.query(`INSERT INTO flights (departingFrom, arrivalAt, departingTime, departingDate, arrivalTime, arrivalDate, totalSeats, seatsAvailable, price) VALUES ("Phoenix Sky Harbor International Airport", "McCarran International Airport", "6:45:00", "2020-09-13, "9:30:00", "2020-09-13", "600", "200", "135");`, function (err, result) {
        if (err) console.log(err);
    });
    connection.query(`INSERT INTO flights (departingFrom, arrivalAt, departingTime, departingDate, arrivalTime, arrivalDate, totalSeats, seatsAvailable, price) VALUES ("McCarran International Airport", "Jackson Hole Airport", "13:55:00", "2019-11-24", "15:40:00", "2019-11-24", "200", "43", "165");`, function (err, result) {
        if (err) console.log(err);
    });

    /*connection.query(`SELECT roasts FROM roast_bot_custom_roast WHERE userID = "${message.author.id}";`, function (err, result) {
        let roastStatus = result[0].roast;
        if (err) console.log(err);
        if (!result.length) {
    */
}