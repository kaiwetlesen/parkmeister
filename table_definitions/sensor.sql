CREATE TABLE sensor (
	serial_num INTEGER COMMENT '64 bit serial number of the sensor.',
	sensor_type ENUM ( 'PROXIMITY', 'INGRESS', 'EGRESS' ),
	-- TODO: Figure out what the pkey datatype will be for parking lots
	pspot_id INTEGER UNSIGNED,
	lot_id INTEGER UNSIGNED COMMENT 'Associates sensors with a particular lot.',
	is_occupied BOOLEAN COMMENT 'Indicates whether a sensor sees a car. Only referenced for proximity sensors.',
	PRIMARY KEY (serial_num),
    FOREIGN KEY (lot_id) REFERENCES parking_lot(lot_id),
	FOREIGN KEY (pspot_id) REFERENCES parking_spot(row_id)
) ENGINE=InnoDB;
