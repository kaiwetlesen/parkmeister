use acme;
-- show tables;
/* describe test;
*/
create table asccepted_permits(
	permit_type CHAR(25) NOT NULL,
	provided_by CHAR(25) COMMENT 'Refers to parking operator table.',
	effective_on DATE DEFAULT NULL COMMENT 'Date that the parking pass is effective.',
	expires_on DATE DEFAULT NULL COMMENT 'Date that the parking pass expires.'	
    )ENGINE = innoDb;