CREATE TABLE may_park_in (
	car_type varchar(10) NOT NULL,
    spot_id int unsigned NOT NULL,
    FOREIGN KEY (spot_id) REFERENCES parking_spot(row_id),
    FOREIGN KEY (car_type) REFERENCES car_type(car_type_name)
)Engine=InnoDB;
