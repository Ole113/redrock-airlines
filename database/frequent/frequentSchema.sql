CREATE TABLE frequent (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name         TEXT NOT NULL,
    last_name          TEXT NOT NULL,
    birthday           DATE NOT NULL,
    address            TEXT NOT NULL,
    city               TEXT NOT NULL,
    state              TEXT NOT NULL,
    zip_code           TEXT NOT NULL,
    email              TEXT NOT NULL
);