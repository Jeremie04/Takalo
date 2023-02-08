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


create table photo(
    id int auto_increment primary key,
    nom varchar(255),
    idObjet int,
    foreign key (idobjet) references objet(id),
);


create table demande(
    id int auto_increment primary key,
    idObjet1 int,
    idObjet2 int,
    dateDemande datetime,
    dateAcceptation datetime,
    foreign key (idobjet1) references objet(id),
    foreign key (idobjet2) references objet(id)
);


-----------------insertion de données----------------
insert into membre values(NULL,'bob','bob@gmail.com','banane',0);
insert into membre values(NULL,'rose','rose@gmail.com','poire',1);
insert into membre values(NULL,'jack','jack@gmail.com','anana',0);


insert into categorie values(NULL,'Vetements');
insert into categorie values(NULL,'Utilitaire');
insert into categorie values(NULL,'Electronique');
insert into categorie values(NULL,'Livres');


insert into photo values(NULL,'hlrg.jpg',1);
insert into photo values(NULL,'hrlgB.jpg',1);
insert into photo values(NULL,'télécharger.jpg',2);
insert into photo values(NULL,'nike.jpg',2);
insert into photo values(NULL,'after.jpg',3);
insert into photo values(NULL,'jean.jpg',4);
insert into photo values(NULL,'jb.jpg',4);
insert into photo values(NULL,'jean.jpeg',5);
insert into photo values(NULL,'ip7.jpeg',6);
insert into photo values(NULL,'iphone7.jpg',6);
insert into photo values(NULL,'ip13.jpeg',7);
insert into photo values(NULL,'ip.jpg',7);
insert into photo values(NULL,'13.jpg',7);
insert into photo values(NULL,'lv.jpg',8);
insert into photo values(NULL,'bottes.jpg',9);
insert into photo values(NULL,'niketech.jpg',10);
insert into photo values(NULL,'niketech2.jpg',10);


insert into objet values(NULL,1,6,'Horloge bleu','Horloge murale bleu ideale dans la cuisine',50);
insert into objet values(NULL,2,1,'Pull Nike noir','Haut Nike noir S',150);
insert into objet values(NULL,3,4,'After','Livre After',34);
insert into objet values(NULL,1,1,'Jean bleu','Jean bleu encore en bon etat , Taille L',52);
insert into objet values(NULL,2,1,'Jean delave','Taille M',44);
insert into objet values(NULL,3,3,'Iphone 7+','IPhone 7+ non reconditionne,Batterie 95%',300);
insert into objet values(NULL,1,3,'IPhone 13 Pro','IPhone 13 Pro jamais utilise Modele LL',1200);
insert into objet values(NULL,2,4,'Red Queen & Glass Sword','Si vendu separemment : 50$ chacune',90);
insert into objet values(NULL,2,1,'Boots Palladium','Boots Palladium TBE',27);
insert into objet values(NULL,3,1,'Nike Tech','Nike Tech Blanc',290);



insert into demande values(NULL, 1, 2, "2022-02-12 01:12:41",null);
insert into demande values(NULL, 1, 4, "2022-02-12 01:12:41","2022-02-13 05:12:32");


-- liste de propositions

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

-- nombre echanges

select count(id)
from demande d
where d.dateacceptation is not null;

-- nombre membre

select count(id)
from membre M
where M.admin=0;


-- HIstorique
select m.nom
    from demande d
    join objet o on d.idObjet2=o.id
    join membre m on o.idMembre = m.id
    where d.dateAcceptation not like "null"
    and d.idObjet2 = 4;


-- Selection objet + - 10%

select * from objet
where prix between
(select (prix-(prix*20)/100) from objet 
where id = 1)
and
(select (prix+(prix*20)/100) from objet
where id = 1); 


