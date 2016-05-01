CREATE TABLE parking_lot ( 
	row_id INT UNSIGNED NOT NULL,
	geo_lat FLOAT(10,6) NOT NULL,
	geo_long FLOAT(10,6) NOT NULL,
	lot_type CHAR(25),
	lot_name CHAR(100),
	pricing_scheme_id INT UNSIGNED,
	operator_id INT UNSIGNED,
	PRIMARY KEY(row_id)
) ENGINE=InnoDb;
