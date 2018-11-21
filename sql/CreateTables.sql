DROP DATABASE WeddingSite;
CREATE DATABASE WeddingSite;

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
	user_id int AUTO_INCREMENT,
	first_name varchar(50) not null,
	surname varchar(50) not null,
	cell int(50),
	mail varchar(150),
	password varchar(255) not null,
	image_name varchar(255),
	join_date date not null,
	bran_acq boolean default false not null,
	kaj_acq boolean default false not null,
	Primary Key (user_id)
);

DROP TABLE IF EXISTS comments;
CREATE TABLE IF NOT EXISTS comments(
	comment_id int AUTO_INCREMENT,
	comment_made varchar(255),
	user_id int not null,
	comment_date date not null,
	Primary Key (comment_id),
	Foreign Key (user_id) REFERENCES users(user_id)
);

DROP TABLE IF EXISTS groups;
CREATE TABLE IF NOT EXISTS groups(
	group_id int AUTO_INCREMENT,
	group_name varchar(50) not null,
	group_size int not null default 0,
	Primary Key (group_id)
);

DROP TABLE IF EXISTS user_groups;
CREATE TABLE IF NOT EXISTS user_groups(
	user_group_id int AUTO_INCREMENT,
	group_id int not null,
	user_id int not null,
	Primary Key (user_group_id),
	Foreign Key (user_id) REFERENCES users(user_id),
	Foreign Key (group_id) REFERENCES groups(group_id)
);