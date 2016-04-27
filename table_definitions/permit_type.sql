CREATE TABLE permit_type ( 
	permit_type char(25) NOT NULL,
	provided_by char(25) comment "This parking pass is provided by operator ___.",
	effective_on date default NULL comment "Date that the parking pass is effective.",
	expires_on date default NULL comment "Date that the parking pass expires.",
	primary key(permit_type, provided_by)
) ENGINE=InnoDb;

-- An example entry might look like:
insert into permit_type(permit_type, provided_by, effective_on, expires_on) values
	('Fall 2016', 'San Jose State University', '01-01-2016', '06-01-2016');
