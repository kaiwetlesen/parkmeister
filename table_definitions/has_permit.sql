CREATE TABLE has_permit (
  permit_type CHAR(25) NOT NULL COMMENT 'refers to permit_type table',
  account_num int COMMENT 'refers to account table',
  days_elegible ENUM('SUN','MON','TUE','WED','THU','FRI','SAT'),
  PRIMARY KEY(permit_type, account_num)
)ENGINE = InnoDb;
