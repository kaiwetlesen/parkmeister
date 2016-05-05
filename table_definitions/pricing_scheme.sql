CREATE TABLE pricing_scheme(
	payment_type varchar(10) NOT NULL,
    pass_required varchar(3),
    price_per_interval int,
    parking_interval date,
    PRIMARY KEY(payment_type) );
    