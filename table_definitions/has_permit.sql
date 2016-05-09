CREATE TABLE has_permit (
	permit_type CHAR(25) NOT NULL COMMENT 'refers to permit_type table',
	account_num int unsigned COMMENT 'refers to account table',
	row_id INT UNSIGNED AUTO_INCREMENT COMMENT 'Unique identifier for each permit type owned',
	FOREIGN KEY(permit_type) REFERENCES permit_type(permit_type),
    FOREIGN KEY(account_num) REFERENCES account(account_num),
	primary KEY(row_id)
)ENGINE = InnoDb;
