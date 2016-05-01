CREATE TABLE has_permit (
	permit_type CHAR(25) NOT NULL COMMENT 'refers to permit_type table',
	account_num int COMMENT 'refers to account table',
	row_id UNSIGNED INTEGER AUTO_INCREMENT COMMENT "Unique identifier for each permit type owned",
	PRIMARY KEY(permit_type, account_num),
	UNIQUE KEY(id)
)ENGINE = InnoDb;
