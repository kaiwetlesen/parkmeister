-- THIS FILE CONTAINS THREE DIFFERENT SECTIONS, SCROLL DOWN TO SEE DIFFERENT QUERY TYPES



-- QUERIES FOR SOLO TABLES (modify for needed use cases):

-- accepted_permits
SELECT * FROM accepted_permits WHERE permit_type = ? AND pay_type = ?;
INSERT INTO accepted_permits(permit_type, pay_type) VALUES (?, ?);
UPDATE accepted_permits SET permit_type = ?, pay_type = ? WHERE permit_type = ? AND pay_type = ?;

-- account SKIPPED DUE TO MISSING INFORMATION
/*SELECT * FROM account WHERE account_num = ? AND account_name = ?;
INSERT INTO account(account_name) VALUES (?);
UPDATE account SET account_name = ? WHERE account_num = ? AND account_name = ?;*/

-- car_type
SELECT * FROM car_type WHERE car_type_name = ?;
INSERT INTO car_type(car_type_name) VALUES (?);
UPDATE car_type SET car_type_name = ? WHERE car_type_name = ?;

-- has_permit
SELECT * FROM has_permit WHERE permit_type = ? AND account_num = ? AND row_id = ?;
INSERT INTO has_permit(permit_type, account_num) VALUES (?, ?);
UPDATE has_permit SET permit_type = ?, account_num = ? WHERE permit_type = ? AND account_num = ? AND row_id = ?;

-- has_permit_days_eligible SKIPPED DUE TO UNDEFINED FIELDS
/*SELECT * FROM has_permit_days_eligible WHERE ;
INSERT INTO has_permit_days_eligible() VALUES ();
UPDATE has_permit_days_eligible SET  WHERE ;*/

-- may_park_in
SELECT * FROM may_park_in WHERE car_type = ? AND spot_num = ?;
INSERT INTO may_park_in(car_type, spot_num) VALUES (?);
UPDATE may_park_in SET car_type = ?, spot_num = ? WHERE car_type = ? AND spot_num = ?;

-- parking_lot
SELECT * FROM parking_lot WHERE lot_id = ? AND geo_lat = ? AND geo_long = ? AND lot_type = ? AND lot_name = ? AND pay_type = ? AND operator_id = ?;
INSERT INTO parking_lot(geo_lat, geo_long, lot_type, lot_name, pay_type, operator_id) VALUES (?, ?, ?, ?, ?, ?);
UPDATE parking_lot SET geo_lat = ?, geo_long = ?, lot_type = ?, lot_name = ?, pay_type = ?, operator_id = ? WHERE lot_id = ? AND geo_lat = ? AND geo_long = ? AND lot_type = ? AND lot_name = ? AND pay_type = ? AND operator_id = ?;

-- parking_operator SKIPPED DUE TO QUESTIONABLE FIELDS
/*SELECT * FROM parking_operator WHERE ;
INSERT INTO parking_operator() VALUES ();
UPDATE parking_operator SET  WHERE ;*/

-- parking_spot
SELECT * FROM parking_spot WHERE spot_number = ? AND floor_number = ? AND parking_type = ? AND lot_id = ? AND sensor_id = ?;
INSERT INTO parking_spot(spot_number, floor_number, parking_type, lot_id, sensor_id) VALUES (?, ?, ?, ?, ?);
UPDATE parking_spot SET spot_number = ?, floor_number = ?, parking_type = ?, lot_id = ?, sensor_id = ? WHERE spot_number = ? AND floor_number = ? AND parking_type = ? AND lot_id = ? AND sensor_id = ?;

-- permit_type
SELECT * FROM permit_type WHERE permit_type = ? AND provided_by = ? AND effective_on = ? AND expires_on = ?;
INSERT INTO permit_type(permit_type, provided_by, effective_on, expires_on) VALUES (?, ?, ?, ?);
UPDATE permit_type SET permit_type = ?, provided_by = ?, effective_on = ?, expires_on = ? WHERE permit_type = ? AND provided_by = ? AND effective_on = ? AND expires_on = ?;

-- pricing_scheme
SELECT * FROM pricing_scheme WHERE payment_type = ? AND pass_required = ? AND price_per_interval = ? AND parking_interval = ?;
INSERT INTO pricing_scheme(payment_type, pass_required, price_per_interval, parking_interval) VALUES (?, ?, ?, ?);
UPDATE pricing_scheme SET payment_type = ?, pass_required = ?, price_per_interval = ?, parking_interval = ? WHERE payment_type = ? AND pass_required = ? AND price_per_interval = ? AND parking_interval = ?;

-- sensor
SELECT * FROM sensor WHERE serial_num = ? AND sensor_type = ? AND lot_id = ? AND is_occupied = ?;
INSERT INTO sensor(serial_num, sensor_type, lot_id, is_occupied) VALUES (?, ?, ?, ?);
UPDATE sensor SET serial_num = ?, sensor_type = ?, lot_id = ?, is_occupied = ? WHERE serial_num = ? AND sensor_type = ? AND lot_id = ? AND is_occupied = ?;


-- QUERIES FOR JOINED TABLES (modify for needed use cases):




-- QUERIES FOR CUSTOM INFO (modify for needed use cases):

