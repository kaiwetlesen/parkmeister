create table account_has_cartype (
	row_id integer unsigned auto_increment not null unique,
	account_id integer unsigned not null references account(account_id),
	car_type varchar(10) not null references car_type(car_type_name),
	primary key (account_id, car_type)
) ENGINE = InnoDb;
