drop table if exists users;
create table users (
  id int unsigned primary key auto_increment,
  name varchar(20) unique,
  -- score float not null
  score float default 0.0
);
desc users;

insert into users (name, score) values ('taguchi', 5.8);
insert into users (name, score) vaules ('fkoji', 8.2);

-- insert into users (id, name, score) values (1, 'taguchi', 5.8);
-- insert into users (id, name, score) values (2, 'fkoji', 8.2);
-- insert into users (id, name, score) values (3, 'dotinstall', 6.1);
-- insert into users (id, name, score) values (4, 'yamada', null);
-- insert into users (id, name, score) values (5, 'tanaka');

select * from users;