create database hadicaraft;
use hadicaraft;



create table admin(
id int primary key not null,
name varchar(50),
pass varchar(30)
);

create table user (
Id int primary key not null,
Fullname varchar (50),
Email varchar(150),
Phone varchar(20),
Address varchar(200),
Password varchar(32)
);

create table category (
Id int primary key not null,
Category_name varchar(100)
);

create table product( 
Id int primary key not null,
Category_id int,
Title varchar(350) ,
Image varchar(500),
FOREIGN KEY (Category_id) REFERENCES category(Id)
);


create table product_detail(
Id int primary key not null,
product_id int ,
Description text,
Created_at datetime,
Updated_at datetime,
picture1 varchar(200),
picture2 varchar(200),
picture3 varchar(200),
picture4 varchar(200),
FOREIGN KEY (product_id) REFERENCES product(Id)
);

create table feedback(
Id int primary key not null,
Firt_name varchar(30),
Last_name varchar(30),
Email varchar(150),
Phone varchar(20),
Title varchar(200),
Feedback varchar(500)
);

