use acme;
-- show tables;
/* describe test;
*/
create table parking_operator (
	#operator_information
	operator_id int primary key auto_increment, 
    operator_name varchar (48),
    address varchar (160),
    #contact_information
    contact_num int, 
    contact_site varchar(160),
    #billing_info
    billing_amount int,
    billing_type varchar(48)
    )ENGINE = innoDb;