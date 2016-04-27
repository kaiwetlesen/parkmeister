CREATE TABLE permit_days_eligible (
	permit_type CHAR(25) NOT NULL COMMENT 'Refers to permit table.',
	provided_by CHAR(25) COMMENT 'Refers to parking operator table.',
	day_eligible ENUM('SUN','MON','TUE','WED','THU','FRI','SAT'),
	PRIMARY KEY(permit_type, provided_by)
) ENGINE=InnoDb;

-- Example data
INSERT INTO permit_days_eligible (permit_type, provided_by, day_eligible) VALUES
	('Fall 2016 Weekday Only', 'San Jose State University', 'MON'),
	('Fall 2016 Weekday Only', 'San Jose State University', 'TUE'),
	('Fall 2016 Weekday Only', 'San Jose State University', 'WED'),
	('Fall 2016 Weekday Only', 'San Jose State University', 'THU'),
	('Fall 2016 Weekday Only', 'San Jose State University', 'FRI');
