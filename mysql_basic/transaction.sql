USE publications;

-- CREATE TABLE accounts IF NOT EXISTS(
--     number INT,
--     balance FLOAT,
--     PRIMARY KEY(number)
-- ) ENGINE = InnoDB;

-- INSERT INTO accounts (number, balance) VALUES
--     (12345, 1025.50),
--     (67890, 140.00);


BEGIN;
UPDATE accounts SET balance=balance+25.11 where number = 12345;
COMMIT;
SELECT * FROM accounts;