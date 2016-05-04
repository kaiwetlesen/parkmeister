CREATE TABLE parking_lot ( 
	lot_id INT UNSIGNED NOT NULL,
	geo_lat FLOAT(10,6) NOT NULL,
	geo_long FLOAT(10,6) NOT NULL,
	lot_type CHAR(25),
	lot_name CHAR(100),
	pay_type varchar(10),
	operator_id INT UNSIGNED,
	PRIMARY KEY(lot_id),
	FOREIGN KEY (pay_type) REFERENCES pricing_scheme(payment_type),
    FOREIGN KEY (operator_id) REFERENCES parking_operator(operator_id)
) ENGINE=InnoDb;
