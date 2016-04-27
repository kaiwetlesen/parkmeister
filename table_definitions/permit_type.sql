CREATE TABLE permit_type ( 
	permit_type CHAR(25) NOT NULL,
	provided_by CHAR(25) COMMENT 'Refers to parking operator table.',
	effective_on DATE DEFAULT NULL COMMENT 'Date that the parking pass is effective.',
	expires_on DATE DEFAULT NULL COMMENT 'Date that the parking pass expires.',
	PRIMARY KEY(permit_type, provided_by)
) ENGINE=InnoDb;

-- An example entry might look like:
INSERT INTO permit_type(permit_type, provided_by, effective_on, expires_on) VALUES
	('Fall 2016', 'San Jose State University', '01-01-2016', '06-01-2016');

-- Or this:
INSERT INTO permit_type(permit_type, provided_by, effective_on, expires_on) VALUES
	('Fall 2016 Weekday Only', 'San Jose State University', '01-01-2016', '06-01-2016');
