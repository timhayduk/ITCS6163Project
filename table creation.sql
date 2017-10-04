create table customer(
Customer_id varchar(20) primary key,
First_name varchar(20),
Last_name varchar(20)
);

create table products(
Product_id varchar(20) primary key,
Product_type varchar(20)
);

create table orders(
Order_id varchar(20) primary key,
Customer_id varchar(20),
Product_id varchar(20),
Order_date date,
Order_amount integer,
Payment_type varchar(20)
);

create table CDTitles(
Product_id varchar(20) primary key,
Title varchar(20),
Artist varchar(20),
Price varchar(20)
);

create table DVDTitles(
Product_id varchar(20) primary key,
Title varchar(20),
Director varchar(20),
Price varchar(20)
);

create table DigitalDownload(
Product_id varchar(20) primary key,
Title varchar(20),
Location varchar(20),
Price varchar(20)
);