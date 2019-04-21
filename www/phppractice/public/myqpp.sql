drop table if exists users;
create table users (
  id int unsigned primary key auto_increment,
  name varchar(20),
  -- score float not null
  score float
);

insert into users (name, score) values ('taguchi', 5.8);
insert into users (name, score) values ('fkoji', 8.2);
insert into users (name, score) values ('dotinstall', 6.1);
insert into users (name, score) values ('Tanaka', 4.2);
insert into users (name, score) values ('yamada', null);
insert into users (name, score) values ('tashiro', 7.9);

-- 文字列抽出
-- ％は0文字以上の任意の文字列という意味のワイルドカード
-- select * from users where name = 'taguchi';
-- tから始まるって書く時はt%
-- select * from users where name like 't%';
-- aが含まれるというときは%a%とする
-- select * from users where name like '%a%';
-- aで終わるときは%aとする
-- sqlは大文字小文字を区別しないが厳密に区別してほしい時は、binaryをつける
-- select * from users where name like binary 'T%';
-- 文字数で抽出したいときはアンダーバーで表示するex.6文字,2文字目がaである。
-- select * from users where name like '______';
-- select * from users where name like '_a%';