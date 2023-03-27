create database Handicrafts;
use Handicrafts;

create table admin (
Id int primary key not null,
Fullname varchar (50),
password varchar (30)
);



create table product( 
Id int primary key not null,
Category varchar(300),
Title varchar(350) ,
Image varchar(500),
Description text
);


insert into product values
	(1,'Trac wooden cigar pipe 4 sizes','1.jpg','wood','wooden pipe and Trac wooden Cigar pipe bring elegant, luxurious and unique beauty. Trac wooden pipe and Trac wooden cigar are made of natural Trac wood material, with hardness. and durable, ensure the safety'),
	(2,'High quality incense wooden tea tray with kneeling shape','2.jpg','wood	The Huong wooden tea tray is carefully completed by Hanoi Fine Arts. From the selection of incense to the finishing stage with varnish, everything is meticulously done. Agarwood is a precious wood with sharp quality, smooth wood grain, beautiful wood grain. The tea tray is made entirely from natural, unadulterated incense wood.'),
	(3,'High-grade pink mussel shell inlaid pen','3.jpg	wood','Pearl inlaid pen was born as a result of the process of hard work and creativity. At each stage, we will feel the talented and skillful hands of the artisan. '),
	(4,'HMS Victory wooden boat model for desk','4.jpg','wood','HMS Victory wooden boat model for desks, office swarms. Finished from High Perfume Wood, with details meticulously crafted to scale like a real boat. Details such as stairs, sails, lifeboats, decks, undercarriages, etc. It is also made very delicately to create a very beautiful Victory ship model'),
	(5,'Small wooden flowerpot','5.jpg','wood','Small wooden flowerpot is made of natural mother-of-pearl wood used for flower arrangement, decoration or decor. New and modern style, Bright colors are very beautiful, Solid wood material is waterproof, Safe products for health'),
	(6,'Thap Dieu Quan Mai chiseled mahogany wood has a sharp bong','6.jpg','wood','Falling apricots also has another beautiful name, collapsing ten birds with apricots. This is the most elaborate wooden crate model of all types because most of its production time is spent on chisels carved into the wood.'),
	(7,'Luc Binh (Loc Binh) High Red Oak','7.jpg','wood','Wooden Luc Binh, also known as wooden Loc Binh, is used for decorative purposes, expressing the nobility and luxury of the owner. Big mouth to suck fortune and luck; belly swells to hold possessions and possessions; Narrow neck to protect property, luck, fortune.'),
	(8,'EUROPEAN WOODEN bowl','8.jpg','wood','European-style wooden cup: The cup is made of European-style ACACIA wood. The product has been tested for food safety. Suitable for any kitchen space. The cup is meticulously made, not scratched. Products have been exported to Europe and America.');


create table contact(
Id int primary key not null,
Firt_name varchar(30),
Last_name varchar(30),
Email varchar(150),
Phone varchar(20),
Address varchar(200),
Note varchar(500)
);

select * from product;
drop table user;
drop table category;
drop table product;
drop table contact;
drop database hadicaraft;

