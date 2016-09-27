create table EMPLOYE(
	EMP_Matricule char(5),
	EMP_Nom varchar(50),
	EMP_Prenom varchar(50),
	EMP_Rue varchar(100),
	EMP_Ville varchar(50),
	EMP_CodePostal varchar(5),
	EMP_Tel varchar(10),
	EMP_Portable varchar(10),
	EMP_Email varchar(50),
	EMP_DateEmbauche date,
	EMP_Quotite decimal(3,2),
	constraint pk_EMP primary key(EMP_Matricule)
);
	
insert into EMPLOYE values ('A01','Boudeaud','Pierre','7 boulevard du 8 mai 1985','Loudun', '86200','0546054605','0607080910','boudeaudpierre@gmail.com','13/09/2016',1);