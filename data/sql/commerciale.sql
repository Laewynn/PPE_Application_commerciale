CREATE TABLE CLIENT(
	IDClient serial,
	NomClient varchar(100),
	PrenomClient varchar(100),
	AdresseClient varchar(100),
	CPClient varchar(100),
	VilleClient varchar(100),
	TelephoneClient varchar(10),
	MailClient varchar(100),
	CONSTRAINT pk_client PRIMARY KEY(IDClient)
);
CREATE TABLE CONNEXION(
	IDConnexion serial,
	PseudoEmailConnexion varchar(100),
	MDPConnexion varchar(100),
	IDClient int,
	CONSTRAINT pk_connexion PRIMARY KEY(IDConnexion),
	CONSTRAINT fk_connexion_client FOREIGN KEY(IDClient) REFERENCES CLIENT(IDClient)
);
CREATE TABLE COMMANDE (
	IDCommande serial,
	DateCommande date,
	DateLivraison date,
	AdresseLivraison varchar(100),
	CPLivraison varchar (100),
	FraisDePort varchar(100),
	IDClient int,
	CONSTRAINT pk_commande PRIMARY KEY (IDCommande),
	CONSTRAINT fk_commande_client FOREIGN KEY (IDClient) REFERENCES CLIENT(IDClient)
);
CREATE TABLE CATEGORIE (
	IDCategorie serial,
	LibelleCategorie varchar(100),
	CONSTRAINT pk_categorie PRIMARY KEY (IDCategorie)
);
CREATE TABLE PRODUIT (
	IDProduit serial,
	NomProduit varchar(100),
	Description varchar(100),
	PrixUnitaireHT int,
	TVA int,
	QteEnStock int,
	IDCategorie int,
	Image varchar(100),
	CONSTRAINT pk_produit PRIMARY KEY (IDProduit),
	CONSTRAINT fk_produit_categorie FOREIGN KEY (IDCategorie) REFERENCES CATEGORIE (IDCategorie)
);
CREATE TABLE LIGNE_COMMANDE (
	NumeroLigneCommande serial,
	QteCommandee int,
	PrixUnitaireHT int,
	TVA int,
	IDCommande int,
	IDProduit int,
	CONSTRAINT pk_lignecommande PRIMARY KEY (NumeroLigneCommande),
	CONSTRAINT fk_lignecommande_commande FOREIGN KEY (IDCommande) REFERENCES COMMANDE (IDCommande),
	CONSTRAINT fk_lignecommande_produit FOREIGN KEY (IDProduit) REFERENCES PRODUIT (IDProduit)
);
CREATE TABLE PROMO (
	IDPromo serial,
	DescriptifPromo varchar(100),
	PrixPromo int,
	DateValidite date,
	IDProduit int,
	CONSTRAINT pk_promo PRIMARY KEY (IDPromo),
	CONSTRAINT fk_promo_produit FOREIGN KEY (IDProduit) REFERENCES PRODUIT (IDProduit)
);