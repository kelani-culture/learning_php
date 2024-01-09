USE publications;

CREATE TABLE IF NOT EXISTS classics(
    author VARCHAR(128),
    title VARCHAR(128),
    type VARCHAR(16),
    year CHAR(4)
) ENGINE = MyISAM;