create database takalo;

use takalo;

create table membre(
    id int auto_increment primary key,
    nom varchar(255),
    email varchar(255),
    password varchar(255),
    admin int 
);
insert into membre values('','bob','bob@gmail.com','banane',0);
insert into membre values('','rose','rose@gmail.com','poire',1);
insert into membre values('','jack','jack@gmail.com','anana',0);

create table categorie(
    id int auto_increment primary key,
    categorie varchar(255)
);
insert into categorie values('','Vetements');
insert into categorie values('','Utilitaire');
insert into categorie values('','Electronique');
insert into categorie values('','Livres');


create table photo(
    id int auto_increment primary key,
    nom varchar(255),
    idObjet int 
);
insert into photo values('','hlrg.jpg',1);
insert into photo values('','hrlgB.jpg',1);
insert into photo values('','télécharger.jpg',2);
insert into photo values('','nike.jpg',2);
insert into photo values('','after.jpg',3);
insert into photo values('','jean.jpg',4);
insert into photo values('','jb.jpg',4);
insert into photo values('','jean.jpeg',5);
insert into photo values('','ip7.jpeg',6);
insert into photo values('','iphone7.jpg',6);
insert into photo values('','ip13.jpeg',7);
insert into photo values('','ip.jpg',7);
insert into photo values('','13.jpg',7);
insert into photo values('','lv.jpg',8);
insert into photo values('','bottes.jpg',9);
insert into photo values('','niketech.jpg',10);
insert into photo values('','niketech2.jpg',10);

create table objet(
    id int auto_increment primary key,
    idMembre int,
    idCategorie varchar(255),
    titre varchar(255),
    description varchar(255),
    prix float,
    foreign key (idMembre) references membre(id),
    foreign key (idcategorie) references categorie(id)
);
insert into objet values('',1,2,'Horloge bleu','Horloge murale bleu ideale dans la cuisine',50);
insert into objet values('',2,1,'Pull Nike noir','Haut Nike noir S',150);
insert into objet values('',3,4,'After','Livre After',34);
insert into objet values('',1,1,'Jean bleu','Jean bleu encore en bon etat , Taille L',52);
insert into objet values('',2,1,'Jean delave','Taille M',44);
insert into objet values('',3,3,'Iphone 7+','IPhone 7+ non reconditionne,Batterie 95%',300);
insert into objet values('',1,3,'IPhone 13 Pro','IPhone 13 Pro jamais utilise Modele LL',1200);
insert into objet values('',2,4,'Red Queen & Glass Sword','Si vendu separemment : 50$ chacune',90);
insert into objet values('',2,1,'Boots Palladium','Boots Palladium TBE',27);
insert into objet values('',3,1,'Nike Tech','Nike Tech Blanc',290);



create table demande(
    id int auto_increment primary key,
    idObjet1 int,
    idObjet2 int,
    dateDemande datetime,
    dateAcceptation datetime,
    foreign key (idobjet1) references objet(id),
    foreign key (idobjet2) references objet(id)
);

insert into demande values('', 1, 2, "2022-02-12 01:12:41",null);
insert into demande values('', 1, 4, "2022-02-12 01:12:41","2022-02-13 05:12:32");



// liste de propositions

select d.id, op.titre Objetproposé, op.idmembre, om.titre Objetmiproposé, om.idmembre  
from demande d 
join objet op on d.idObjet2=op.id 
join objet om on d.idObjet1=om.id 
where op.idmembre=2
and d.dateacceptation is null;

select d.id, op.titre proposé, op.idmembre, om.titre miproposé, d.dateacceptation  
from demande d 
join objet op on d.idObjet2=op.id 
join objet om on d.idObjet1=om.id
where op.idmembre=2
and d.dateacceptation is not null;

// nombre echanges

select count(id)
from demande d
where d.dateacceptation is not null;

// nombre membre

select count(id)
from membre M
where M.admin=0;