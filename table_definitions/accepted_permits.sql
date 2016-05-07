use acme;
-- show tables;
/* describe test;
*/
create table accepted_permits (
  permit_type CHAR(25) NOT NULL,
  pay_type varchar(10) NOT NULL,
  FOREIGN KEY(permit_type) REFERENCES permit_type(permit_type),
  FOREIGN KEY(pay_type) REFERENCES pricing_scheme(payment_type)
)ENGINE = InnoDb;