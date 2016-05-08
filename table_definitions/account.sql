CREATE TABLE account (
  account_id int unsigned NOT NULL auto_increment,
  account_name CHAR(25),
  account_email varchar(256) NOT NULL UNIQUE comment "email address used for login",
  account_password varchar(515),
  PRIMARY KEY (account_num)
)ENGINE = InnoDb;
