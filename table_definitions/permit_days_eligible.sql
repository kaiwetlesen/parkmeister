/*
 Inspired by the UNIX permission mask, where the field names represent
 maskable days of eligibility. The default is to open the pass for all
 days.
 */
CREATE TABLE permit_days_eligible (
	permit_type CHAR(25) NOT NULL COMMENT 'Refers to permit table.',
	provided_by CHAR(25) COMMENT 'Refers to parking operator table.',
	eligible_on_sun BOOLEAN DEFAULT TRUE,
	eligible_on_mon BOOLEAN DEFAULT TRUE,
	eligible_on_tue BOOLEAN DEFAULT TRUE,
	eligible_on_wed BOOLEAN DEFAULT TRUE,
	eligible_on_thu BOOLEAN DEFAULT TRUE,
	eligible_on_fri BOOLEAN DEFAULT TRUE,
	eligible_on_sat BOOLEAN DEFAULT TRUE,
	PRIMARY KEY(permit_type, provided_by)
) ENGINE=InnoDb;
