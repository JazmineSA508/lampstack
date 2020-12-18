USE testdb;

ALTER USER test@localhost IDENTIFIED WITH mysql_native_password BY 'testpass';


CREATE TABLE test (
	fName varchar(30),
	lInit varchar(1),
	bdayMonth varchar(10),
	bdayDay int,
);

INSERT INTO test (fName, lInit, bdayMonth, bdayDay)
VALUES
	('Jazmine', 'A', 'September', 14),
	('Richard', 'W', 'September', 12),
	('Alexis', 'U', 'December', 9),
	('Gabriela', 'A', 'September', 26),
	('Zack', 'A', 'August', 26),
	('Margie', 'W', 'October', 17),
	('William', 'A', 'September', 17)

