CREATE TABLE book (
    orderNum         INT PRIMARY KEY AUTO_INCREMENT,
    client_name      TEXT NOT NULL,
    client_last      TEXT NOT NULL,
    flightID         TEXT NOT NULL,
    --freqFlyerNum   INT NOT NULL,
    client_phone INT NOT NULL,
    client_email     TEXT NOT NULL,
    cardNumber       INT NOT NULL,
    expDate          DATE NOT NULL,   
    CVV              INT NOT NULL,
    firstNameOnCard  TEXT NOT NULL,
    lastNameOnCard   TEXT NOT NULL
);