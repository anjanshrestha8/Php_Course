create table quotes (
	id int primary key auto_increment,
    title varchar(25) not null,
    created_at timestamp default CURRENT_TIMESTAMP,
    updated_at timestamp default CURRENT_TIMESTAMP
);

insert into quotes (title) values ("test");