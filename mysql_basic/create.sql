USE publications;

CREATE TABLE IF NOT EXISTS classics(
    author VARCHAR(128),
    title VARCHAR(128),
    type VARCHAR(16),
    year CHAR(4)
) ENGINE = MyISAM;


DELETE FROM classics;
INSERT INTO classics(author, title, category, year)
    VALUES('Mark Twain', 'The Adventures of Tom sawyer', 'Fiction', '1876');
INSERT INTO classics(author, title, category, year)
    VALUES('Jane Austen', 'Pride and Prejudice', 'Fiction', '1811');
INSERT INTO classics(author, title, category, year)
    VALUES('Charles Darwin', 'The Origin of species', 'Non-Fiction', '1851');
INSERT INTO classics(author, title, category, year)
    VALUES('Charles Dicken', 'The Old Curiosity Shop', 'Fiction', '1841');
INSERT INTO classics(author, title, category, year)
    VALUES('William Shakespeare', 'Romeo and Juliet', 'Play', '1594');


ALTER TABLE classics MODIFY year SMALLINT;
-- ALTER TABLE classics
--     ADD pages SMALLINT UNSIGNED;

-- ALTER TABLE classics
--     CHANGE type category VARCHAR(16);

-- learning indexes

ALTER TABLE classics ADD INDEX(author(20));
ALTER TABLE classics ADD INDEX(title(20));
ALTER TABLE classics ADD INDEX(category(4));
ALTER table classics ADD INDEX(year);
DESCRIBE classics;