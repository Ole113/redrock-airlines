CREATE TABLE book (
    id               INT PRIMARY KEY AUTO_INCREMENT,
    client_name      TEXT NOT NULL,
    client_last      TEXT NOT NULL,
    flight_id        TEXT NOT NULL,
    --freqFlyerNum   INT NOT NULL,
    client_phone     BIGINT NOT NULL,
    client_email     TEXT NOT NULL,
    card_number      BIGINT NOT NULL,
    exp_date         DATE NOT NULL,   
    cvv              SMALLINT NOT NULL,
    card_first_name  TEXT NOT NULL,
    card_last_name   TEXT NOT NULL
);