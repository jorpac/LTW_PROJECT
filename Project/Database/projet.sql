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
	idplace INTEGER REFERENCES places,
	title VARCHAR NOT NULL,
	description VARCHAR,
	mark INTEGER CHECK(mark<11 and mark>0)
);

INSERT INTO user VALUES( 1, "simon-tlc",'$2y$12$cH5Hmh/4JgKSEM4ZCih1jOOSItL2WW.XZruOxkG0udohjH5xMu6FG',"Simon Tollec");
INSERT INTO user VALUES( 2, "anthony",'$2y$12$cH5Hmh/4JgKSEM4ZCih1jOOSItL2WW.XZruOxkG0udohjH5xMu6FG',"Anthony");
INSERT INTO user VALUES (3, 'john', '$2y$12$cH5Hmh/4JgKSEM4ZCih1jOOSItL2WW.XZruOxkG0udohjH5xMu6FG', 'John');

INSERT INTO place VALUES(1234, "Cute house near the beach", 200, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
2, "Rua 1234, 4590-444", "LISBON");

INSERT INTO place VALUES(5764, "Cute house far from the beach", 1000, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
3, "Pl. Virgen Blanca 14 8530-000", "BARCELONA");
