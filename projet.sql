CREATE TABLE users(
	username VARCHAR PRIMARY KEY,
	password VARCHAR NOT NULL,
	name VARCHAR NOT NULL
);


CREATE TABLE places (
	id INTEGER PRIMARY KEY,
	title VARCHAR NOT NULL,
	price INTEGER NOT NULL,
	description VARCHAR,
	username VARCHAR REFERENCES users,
	adress VARCHAR,
	city VARCHAR,
);

CREATE TABLE comments(
	name VARCHAR REFERENCES users;
	place VARCHAR REFERENCES places;
	title VARCHAR NOT NULL;
	description VARCHAR;
	mark INTEGER CHECK(mark<11 and mark>0);
)

INSERT INTO users VALUES( "simon-tlc","blabla","Simon Tollec");

