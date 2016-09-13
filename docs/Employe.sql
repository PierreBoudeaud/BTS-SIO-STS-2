create table EMPLOYE(
	EMP_Matricule char(5),
	EMP_Nom varchar(50),
	EMP_Prenom varchar(50),
	EMP_rue varchar(100),
	EMP_ville varchar(50),
	EMP_CodePostal varchar(5),
	EMP_tel varchar(10),
	EMP_Portable varchar(10),
	EMP_email varchar(50),
	EMP_DateEmbauche date,
	EMP_quotite decimal(2,2),
	constraint pk_EMP primary key(EMP_Matricule)
)
	