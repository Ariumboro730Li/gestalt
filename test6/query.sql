DROP TABLE IF EXISTS Rent;
DROP TABLE IF EXISTS Buku;
DROP TABLE IF EXISTS Customer;

CREATE TABLE Buku (
    Id BIGINT PRIMARY KEY,
    Title VARCHAR(100) NOT NULL,
    Author VARCHAR(100),
    Price_rent NUMERIC CHECK (Price_rent > 0),
    Book_category VARCHAR(10) CHECK (Book_category IN ('MANGA', 'NOVEL', 'MAGAZINE'))
);

CREATE TABLE Customer (
    Id BIGINT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    identity_card_number VARCHAR(50) NOT NULL,
    address VARCHAR(50)
);

CREATE TABLE Rent (
    Id INTEGER PRIMARY KEY AUTO_INCREMENT,
    Customer_id BIGINT,
    Book_id BIGINT,
    Date_Rent DATE NOT NULL,
    Date_Return DATE,
    FOREIGN KEY (Customer_id) REFERENCES Customer(Id),
    FOREIGN KEY (Book_id) REFERENCES Buku(Id),
    CHECK (Date_Return > Date_Rent) -- Move the check constraint here
);


INSERT INTO Buku (Id, Title, Author, Price_rent, Book_category)
VALUES
    (1, 'Book 1', 'Author 1', 10000, 'NOVEL'),
    (2, 'Book 2', 'Author 2', 9000, 'MANGA'),
    (3, 'Book 3', 'Author 3', 12000, 'MAGAZINE'),
    (4, 'Book 4', 'Author 4', 8000, 'NOVEL'),
    (5, 'Book 5', 'Author 5', 1000, 'MANGA'),
    (6, 'Book 6', 'Author 6', 9000, 'NOVEL'),
    (7, 'Book 7', 'Author 7', 1000, 'MAGAZINE'),
    (8, 'Book 8', 'Author 8', 7000, 'NOVEL'),
    (9, 'Book 9', 'Author 9', 3000, 'MANGA'),
    (10, 'Book 10', 'Author 10', 13000, 'NOVEL');


INSERT INTO Customer (Id, Name, identity_card_number, address)
VALUES
    (1, 'Customer 1', '1234567890', 'Address 1'),
    (2, 'Customer 2', '0987654321', 'Address 2'),
    (3, 'Customer 3', '1111111111', 'Address 3'),
    (4, 'Customer 4', '2222222222', 'Address 4'),
    (5, 'Customer 5', '3333333333', 'Address 5'),
    (6, 'Customer 6', '4444444444', 'Address 6'),
    (7, 'Customer 7', '5555555555', 'Address 7'),
    (8, 'Customer 8', '6666666666', 'Address 8'),
    (9, 'Customer 9', '7777777777', 'Address 9'),
    (10, 'Customer 10', '8888888888', 'Address 10');

INSERT INTO Rent (Customer_id, Book_id, Date_Rent, Date_Return)
VALUES
    (1, 1, '2022-01-01', '2022-01-05'),
    (2, 2, '2022-01-02', '2022-01-06'),
    (7, 7, '2022-01-07', '2022-01-11'),
    (8, 8, '2022-01-08', '2022-01-12'),
    (9, 7, '2022-01-09', '2022-01-13'),
    (10, 1, '2022-01-10', '2022-01-14'),
    (1, 3, '2022-01-03', '2022-01-07'),
    (1, 4, '2022-01-04', '2022-01-08'),
    (1, 5, '2022-01-05', '2022-01-09'),
    (1, 5, '2022-01-05', '2022-01-09'),
    (1, 5, '2022-01-05', '2022-01-09'),
    (1, 5, '2022-01-05', '2022-01-09'),
    (1, 5, '2022-01-05', '2022-01-09'),
    (1, 5, '2022-01-05', '2022-01-09'),
    (1, 5, '2022-01-05', '2022-01-09'),
    (1, 8, '2022-01-05', '2022-01-09'),
    ( 7, 6, '2022-01-06', '2022-01-10'),
    ( 7, 8, '2022-01-06', '2022-01-10'),
    ( 7, 5, '2022-01-06', '2022-01-10'),
    ( 7, 5, '2022-01-06', '2022-01-10'),
    ( 7, 5, '2022-01-06', '2022-01-10'),
    ( 7, 5, '2022-01-06', '2022-01-10'),
    ( 7, 5, '2022-01-06', '2022-01-10'),
    ( 7, 5, '2022-01-06', '2022-01-10');
