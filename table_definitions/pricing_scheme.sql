CREATE TABLE pricing_scheme(
	payment_type varchar(10) NOT NULL,
    pass_required varchar(3),
    price_per_interval integer comment "This field will be represented using fixed integers representing 2 decimal numbers.",
    parking_interval date,
    PRIMARY KEY(payment_type) );
    
