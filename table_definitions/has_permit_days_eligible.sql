CREATE TABLE has_permit_days_eligible (
	has_permit_row_id INT UNSIGNED UNIQUE NOT NULL AUTO_INCREMENT,
	day_eligible ENUM('SUN','MON','TUE','WED','THU','FRI','SAT'),
	PRIMARY KEY(permit_type, provided_by),
) ENGINE=InnoDb;
