CREATE TABLE flights (
    id INT PRIMARY KEY AUTO_INCREMENT,
    departing_from     TEXT NOT NULL,
    departing_time     TIME NOT NULL,
    departing_date     DATE NOT NULL,
    arriving_to        TEXT NOT NULL,
    arriving_time      TIME NOT NULL,
    arriving_date      DATE NOT NULL,
    seats_available    TINYINT NOT NULL,
    price              INT NOT NULL
);