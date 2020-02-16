CREATE TABLE users (
    id         INT PRIMARY KEY AUTO_INCREMENT,
    first_name TEXT NOT NULL,
    last_name  TEXT NOT NULL,
    birthday   DATE NOT NULL,
    password   TEXT NOT NULL,
    username   TEXT NOT NULL,
    position   TEXT NOT NULL,
    email      TEXT NOT NULL
    -- need more values that are typically used
);