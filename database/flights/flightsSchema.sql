CREATE TABLE flights (
    id INT PRIMARY KEY AUTO_INCREMENT,
    departing_state    TEXT NOT NULL,
    departing_airport  TEXT NOT NULL,
    departing_time     TIME NOT NULL,
    departing_date     DATE NOT NULL,
    arriving_state     TEXT NOT NULL,
    arriving_airport   TEXT NOT NULL,
    arriving_time      TIME NOT NULL,
    arriving_date      DATE NOT NULL,
    seats_available    INT NOT NULL,
    price              INT NOT NULL
);