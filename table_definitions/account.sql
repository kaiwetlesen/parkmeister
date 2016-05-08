CREATE TABLE account (
  account_num int unsigned NOT NULL auto_increment,
  account_name CHAR(25),
  account_email varchar(256) comment "email address used for login",
  account_pass varchar(515),
  PRIMARY KEY (account_num)
)ENGINE = InnoDb;
