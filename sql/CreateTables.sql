DROP DATABASE faulingi_wedding_database;
CREATE DATABASE faulingi_wedding_database;
DROP TABLE IF EXISTS comments;
DROP TABLE IF EXISTS plusones;
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
	user_id int AUTO_INCREMENT,
	first_name varchar(50) not null,
	surname varchar(50) not null,
	cell varchar(13),
        attending boolean not null default false,
	mail varchar(150),
	password varchar(255),
	image_name varchar(255),
	join_date date not null,
	bran_acq boolean default false not null,        
	kaj_acq boolean default false not null,
        family boolean default false not null,
        number_children int default 0,
	Primary Key (user_id)
);

CREATE TABLE IF NOT EXISTS comments(
	comment_id int AUTO_INCREMENT,
	comment_made varchar(255),
	user_id int not null,
	comment_date date not null,
	Primary Key (comment_id),
	Foreign Key (user_id) REFERENCES users(user_id)
);

CREATE TABLE IF NOT EXISTS plusones(
	plusones_id int AUTO_INCREMENT,
        user_id int not null,
	plusones_first_name varchar(50) not null,
	plusones_surname varchar(50) not null,
	plusones_cell varchar(13),
        plusones_mail varchar(150),
	Primary Key (plusones_id),
        Foreign Key (user_id) REFERENCES users(user_id)
);