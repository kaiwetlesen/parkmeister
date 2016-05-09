create table parking_operator (
	-- operator_information
	operator_id int unsigned primary key auto_increment, 
    operator_name varchar (48),
    address varchar (160),
    account_email varchar(256) NOT NULL UNIQUE,
    account_password varchar(515),
    -- contact_information
    contact_num varchar(11), 
    contact_site varchar(160),
    -- billing_info
    billing_amount int,
    billing_type varchar(48),
    lot_id int NOT NULL
    )ENGINE = innoDb;
