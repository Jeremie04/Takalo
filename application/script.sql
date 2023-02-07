create database takalo;

use takalo;

create table membre(
    id int auto_increment primary key,
    nom varchar(255),
    email varchar(255),
    password varchar(255),
    admin int 
);

create table categorie(
    id int auto_increment primary key,
    categorie varchar(255)
);

create table photo(
    id int auto_increment primary key,
    nom varchar(255),
    idObjet int,
    foreign key (idobjet) references objet(id)
);

create table objet(
    id int auto_increment primary key,
    idMembre int,
    idCategorie varchar(255),
    titre varchar(255),
    description varchar(355),
    prix float,
    foreign key (idMembre) references membre(id),
    foreign key (idcategorie) references categorie(id)
);


create table demande(
    id int auto_increment primary key,
    idObjet1 int,
    idObjet2 int,
    acceptation int,
    foreign key (idobjet1) references objet(id),
    foreign key (idobjet2) references objet(id)
);