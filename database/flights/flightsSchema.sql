CREATE TABLE flights (
    id INT PRIMARY KEY AUTO_INCREMENT,
    departingFrom     TEXT NOT NULL,
    arrivalAt         TEXT NOT NULL,
    departingTime     TIME NOT NULL,
    departingDate     DATE NOT NULL,
    arrivalTime       TIME NOT NULL,
    arrivalDate       DATE NOT NULL,
    totalSeats        TINYINT NOT NULL,
    seatsAvailable    TINYINT NOT NULL,
    price             INT NOT NULL
);