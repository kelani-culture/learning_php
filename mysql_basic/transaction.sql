USE publications;

-- CREATE TABLE accounts IF NOT EXISTS(
    number INT,
    balance FLOAT,
    PRIMARY KEY(number)
) ENGINE = InnoDB;

INSERT INTO accounts (number, balance) VALUES
    (12345, 1025.50),
    (67890, 140.00);


BEGIN;
UPDATE accounts SET balance=balance+25.11 where number = 12345;
COMMIT;
SELECT * FROM accounts;


BEGIN;
UPDATE accounts SET balance=balance-250 WHERE number=12345;
UPDATE accounts SET  balance=balance+250 WHERE number=67890;
SELECT * FROM accounts;

ROLLBACK;
SELECT * FROM accounts;

EXPLAIN SELECT * FROM accounts;

DROP TABLE accounts;