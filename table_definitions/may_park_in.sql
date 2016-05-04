CREATE TABLE may_park_in
	(c_type varchar(10) NOT NULL,
    spot_num int NOT NULL,
    FOREIGN KEY (spot_num) REFERENCES parking_spot(spot_number),
    FOREIGN KEY (c_type) REFERENCES Car_Type(car_type) );
