Drop DATABASE if exists BDDPortfolio;

create database BDDPortfolio;

use BDDPortfolio;

Create table utilisateur (
    idu int(11) auto_increment,
    pseudo varchar (80),
    prenomu varchar(80),
    nomu varchar(80),
    mdp varchar (50),
    primary key(idu)
) ENGINE=InnoDB;