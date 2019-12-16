CREATE TABLE book (
    flightID         TEXT NOT NULL,
    client_firstname TEXT NOT NULL,
    client_lastname  TEXT NOT NULL
    --freqFlyerNum   INT NOT NULL,
    client_phoneNum1 INT NOT NULL,
    client_phoneNum2 INT NOT NULL,
    client_phoneNum3 INT NOT NULL,
    client_email     TEXT NOT NULL,
    cardNumber       INT NOT NULL,
    expDate          DATE NOT NULL,   
    CVV              INT NOT NULL,
    firstNameOnCard  TEXT NOT NULL,
    lastNameOnCard   TEXT NOT NULL
);