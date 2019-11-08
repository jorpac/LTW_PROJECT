CREATE TABLE user (
	username VARCHAR PRIMARY KEY,
	password VARCHAR NOT NULL,
	name VARCHAR NOT NULL
);


CREATE TABLE place (
	id INTEGER PRIMARY KEY,
	title VARCHAR NOT NULL,
	price INTEGER NOT NULL,
	description VARCHAR,
	username VARCHAR REFERENCES user,
	address VARCHAR,
	city VARCHAR
);

CREATE TABLE comments (
	name VARCHAR REFERENCES user,
	place VARCHAR REFERENCES places,
	title VARCHAR NOT NULL,
	description VARCHAR,
	mark INTEGER CHECK(mark<11 and mark>0)
);

INSERT INTO user VALUES( "simon-tlc","blabla","Simon Tollec");
INSERT INTO user VALUES( "john","password","John");
INSERT INTO user VALUES( "anthony","qwertyiop","Anthony");


INSERT INTO place VALUES(1234, "Cute house near the beach", 200, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
'anthony', "Rua 1234, 4590-444", "Lisbon");

INSERT INTO place VALUES(5764, "Cute house far from the beach", 1000, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
'john', "Pl. Virgen Blanca 14 8530-000", "Barcelona");
