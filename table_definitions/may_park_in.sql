CREATE TABLE may_park_in (
	car_type varchar(10) NOT NULL,
    spot_num int NOT NULL,
    FOREIGN KEY (spot_num) REFERENCES parking_spot(spot_number),
    FOREIGN KEY (car_type) REFERENCES car_type(car_type_name)
)Engine=InnoDB;
