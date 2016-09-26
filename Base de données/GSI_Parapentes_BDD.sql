create table Personne(
	numPersonne integer unsigned not null auto_increment primary key,
	nom varchar(30),
	prenom varchar(30),
	dateNaissance date
);
create table Salarie(
	numPersonne integer primary key,
	salaire integer,
	dateEmbauche date,
	constraint fk_salarie
		foreign key client
		references Personne(nomPersonne)
);
create table Client(
	numPersonne integer primary key,
	poids integer,
	constraint fk_salarie
		foreign key client
		references Personne(nomPersonne)
);
create table Pilote(
	
);
