CREATE TABLE sensor_group (
	serial INTEGER COMMENT '64 bit serial number of the sensor.',
	sensor_type ENUM ( 'PROXIMITY', 'INGRESS', 'EGRESS' ),
	-- TODO: Figure out what the pkey datatype will be for parking lots
	lot_id INTEGER COMMENT 'Associates sensors with a particular lot.',
	PRIMARY KEY ( serial )
) ENGINE=InnoDB;
