use acme;
-- show tables;
/* describe test;
*/
create table parking_spot (
	-- parking spot
	spot_number int,
    floor_number int,
    parking_type varchar(16),
    lot_id int NOT NULL,
    sensor_id int,
    FOREIGN KEY(lot_id) REFERENCES parking_lot(lot_id),
    FOREIGN KEY(sensor_id) REFERENCES sensor(serial_num)
)ENGINE = innoDb;
