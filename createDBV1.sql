drop database if exists database1;
create database database1;
use database1;
create table MyGuests (
    id int auto_increment primary key,
    firstname varchar(30),
    surname varchar(30),
    email varchar(30)

);