drop table if exists users;
create table users (
  id int unsigned primary key auto_increment,
  name varchar(20) unique,
  -- score float not null
  score float default 0.0
);
-- alter table users add column email varchar(255);
alter table users add column email varchar(255) after name;
-- こうするとnameの後に挿入される
-- カラム削除はdrop column カラム名;
alter table users drop column score;
-- データ型を変更したい時は alter table users changeを使えばOK
alter table users name user_name varchar(80) default 'nobody';

desc users;

-- テーブル名の変更
alter table users rename persons;
show tables;
drop table if exists persons;