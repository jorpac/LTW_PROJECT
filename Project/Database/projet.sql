CREATE TABLE user (
	id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,	
	username VARCHAR NOT NULL,
	password VARCHAR NOT NULL,
	name VARCHAR NOT NULL
);


CREATE TABLE place (
	id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
	title VARCHAR NOT NULL,
	price INTEGER NOT NULL,
	description VARCHAR,
	idusr INTEGER REFERENCES user,
	address VARCHAR,
	city VARCHAR
);

CREATE TABLE comments (
	id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
	idusr INTEGER REFERENCES user,
	idplace INTEGER REFERENCES place,
	title VARCHAR NOT NULL,
	description VARCHAR,
	mark INTEGER CHECK(mark<11 and mark>0)
);

CREATE TABLE reservation (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	idplace INTEGER REFERENCES place,
	idusr INTEGER REFERENCES user,
	checkindate DATE NOT NULL,
	checkoutdate DATE NOT NULL
);

CREATE TABLE img (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	idplace INTEGER REFERENCES place
);

CREATE TABLE favourite (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	idplace INTEGER REFERENCES place,
	idusr INTEGER REFERENCES user
);


INSERT INTO user VALUES( 1, "simon-tlc",'$2y$12$cH5Hmh/4JgKSEM4ZCih1jOOSItL2WW.XZruOxkG0udohjH5xMu6FG',"Simon Tollec");
INSERT INTO user VALUES( 2, "anthony",'$2y$12$cH5Hmh/4JgKSEM4ZCih1jOOSItL2WW.XZruOxkG0udohjH5xMu6FG',"Anthony");
INSERT INTO user VALUES (3, 'john', '$2y$12$cH5Hmh/4JgKSEM4ZCih1jOOSItL2WW.XZruOxkG0udohjH5xMu6FG', 'John');

INSERT INTO place VALUES(1, "Cute house near the beach", 200, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
2, "Rua 1234, 4590-444", "LISBON");

INSERT INTO place VALUES(2, "Cute house far from the beach", 1000, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
3, "Pl. Virgen Blanca 14 8530-000", "BARCELONA");

INSERT INTO place VALUES(3, "Big house", 1500, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
2, "Mercer St", "LONDON");


INSERT INTO place VALUES(4, "Small house", 500, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
3, "Mercer St", "LONDON");

INSERT INTO reservation VALUES(1, 1, 1, '2019-12-12', '2019-12-13');
INSERT INTO reservation VALUES(2, 1, 3, '2019-12-15', '2019-12-18');
INSERT INTO reservation VALUES(3, 2, 2, '2019-12-25', '2019-12-29');
INSERT INTO reservation VALUES(4, 3, 1, '2019-12-17', '2019-12-18');
INSERT INTO reservation VALUES(5, 3, 3, '2019-12-22', '2019-12-25');
INSERT INTO reservation VALUES(6, 4, 1, '2020-01-01', '2020-01-05');
INSERT INTO reservation VALUES(7, 4, 2, '2020-01-01', '2020-01-05');
INSERT INTO reservation VALUES(8, 2, 1, '2019-12-15', '2019-12-17');

INSERT INTO img VALUES(1, 1);
INSERT INTO img VALUES(4, 2);
INSERT INTO img VALUES(2, 3);
INSERT INTO img VALUES(3, 4);

INSERT INTO comments VALUES(0, 1, 2, "Great Stay!", "Loved everything, from hospitality to price!", 10);

INSERT INTO favourite VALUES(0, 1, 1);