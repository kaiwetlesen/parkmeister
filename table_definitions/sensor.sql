CREATE TABLE sensor (
	serial INTEGER COMMENT '64 bit serial of the sensor.',
	sensor_type ENUM ( 'PROXIMITY', 'INGRESS', 'EGRESS' ),
	-- TODO: Figure out what the pkey datatype will be for parking lots
	lot_id INTEGER COMMENT 'Associates sensors with a particular lot.',
	is_occupied BOOLEAN COMMENT 'Indicates whether a sensor sees a car. Only referenced for proximity sensors.',
	PRIMARY KEY ( serial )
) ENGINE=InnoDB;
