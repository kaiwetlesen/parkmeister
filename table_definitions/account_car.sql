CREATE TABLE account_car (
  license_plate CHAR(12),
  account_num int,
  PRIMARY KEY (account_num, license_plate)
)ENGINE = InnoDb;
