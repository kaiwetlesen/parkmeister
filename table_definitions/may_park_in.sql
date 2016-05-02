CREATE TABLE May_Park_In
	(c_type varchar(10) NOT NULL,
    Spot_Num int NOT NULL,
    FOREIGN KEY (Spot_Num) REFERENCES parking_spot(spot_number),
    FOREIGN KEY (c_type) REFERENCES Car_Type(car_type) );
