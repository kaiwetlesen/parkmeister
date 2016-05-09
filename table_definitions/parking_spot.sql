create table parking_spot (
	-- parking spot
    row_id int unsigned unique auto_increment primary key, 
	spot_number int,
    floor_number int,
    parking_type varchar(16),
    lot_id int unsigned NOT NULL,
	is_used boolean default false,
    FOREIGN KEY(lot_id) REFERENCES parking_lot(lot_id)
)ENGINE = innoDb;
