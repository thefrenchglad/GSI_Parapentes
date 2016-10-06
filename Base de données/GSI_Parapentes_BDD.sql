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
		foreign key (numPersonne)
		references Personne(numPersonne)
);
create table Client(
	numPersonne integer primary key,
	poids integer,
	constraint fk_client
		foreign key (numPersonne)
		references Personne(numPersonne)
);
create table Pilote(
	numLicence integer primary key,
	numPersonne integer,
	constraint fk_pilote
		foreign key (numPersonne)
		references Client(numPersonne)
	
);

create table Passager(
	numPersonne integer primary key,
	constraint fk_passager
		foreign key (numPersonne)
		references Client(numPersonne)
);



create table Service(
	numService integer unsigned not null auto_increment primary key,
	intitule varchar(30)
);



create table Piece(
	numPiece integer unsigned not null auto_increment primary key,
	nomPiece varchar(30)
);

create table ControleTechnique(
	numControleTechnique integer unsigned not null auto_increment primary key,
	dateControle date
);


/*tables Ronan :*/

create table Site(
	numSite integer primary key,
	nom character(30) not null
);

create table Parcours(
	numParcours integer primary key,
	nbHeures integer not null,
	numSiteDepart integer not null,
	constraint parcours_fk1 foreign key(numSiteDepart) references Site(numSite),
	numSiteArrivee integer not null,
	constraint parcours_fk2 foreign key(numSiteArrivee) references Site(numSite)
);

create table Vol(
	numVol integer primary key,
	dateVol date not null,
	heureDepart integer not null,
	numParcours integer not null,
	constraint vol_fk foreign key(numParcours) references Parcours(numParcours)
);

create table Reservation(
	prix integer not null,
	casque boolean not null,
	numPilote integer not null,
	constraint reservation_fk1 foreign key(numPilote) references Pilote(numPersonne),
	numPassager integer,
	constraint reservation_fk2 foreign key(numPassager) references Passager(numPersonne),
	numVol integer not null,
	constraint reservation_fk3 foreign key(numVol) references Vol(numVol),
	constraint reservation_pk primary key(numPilote,numPassager,numVol)
);

create table Modele(
	numModele integer primary key,
	nom character(30) not null,
	nbPlaces integer not null,
	numFournisseur integer not null,
	constraint modele_fk foreign key(numFournisseur) references Fournisseur(numFournisseur)
);

create table Parapente(
	numParapente integer primary key,
	numModele integer not null,
	constraint parapente_heritage foreign key(numModele) references Modele(numModele)
);

create table Fournisseur(
	numFournisseur integer primary key,
	nom character(30) not null
);

create table Location(
	numPilote integer not null,
	numParapente integer not null,
	constraint location_pk primary key(numPilote,numParapente)
);

/*Lien entre les tables*/

create table PiloterPar(
	numLicence integer,
	numParapente integer,
	constraint fk_piloterPar_numLicence
		foreign key (numLicence)
		references Pilote(numLicence),
	constraint fk_piloterPar_numParapente
		foreign key (numParapente)
		references parapente(numParapente)
);

create table Appartient(
	numPersonne integer unique,
	numService integer,
	constraint fk_appartient_numPersonne
		foreign key (numPersonne)
		references Salarie(numPersonne),
	constraint fk_piloterPar_numService
		foreign key (numService)
		references Service(numService)
);


create table EstCompose(
	numPiece integer unique,
	numParapente integer,
	constraint fk_estCompose_numPiece
		foreign key (numPiece)
		references Piece(numPiece),
	constraint fk_estCompose_numParapente
		foreign key (numParapente)
		references Parapente(numParapente)
);

create table Etat(
	numControleTechnique integer,
	numPiece integer,
	etat boolean,
	constraint fk_etat_numControle
		foreign key (numControleTechnique)
		references ControleTechnique(numControleTechnique),
	constraint fk_etat_numPiece
		foreign key (numPiece)
		references Piece(numPiece)
)