CREATE DABASE tu_mascota_db
USE tu_mascota_db

Create table PerfilCLIENTE
 (
	Documento_de_identidad Bigint NOT NULL UNIQUE,

	CONSTRAINT PK_Documento_de_identidad PRIMARY KEY
    CLUSTERED(Documento_de_identidad),

	Id_Citas Bigint not null,

	CONSTRAINT fk_Id_Citas FOREIGN KEY (Id_Citas) REFERENCES Citas (Id_Citas),
	
	Nombre varchar(24) not null,
	Apellido varchar(24) not null,
	Telefono_Celular int,
	Username varchar(24) not null UNIQUE,
	E_mail varchar (63),
	Nombre_de_la_mascota varchar (24) not null,
	Contraseña varchar(24) not null UNIQUE,
	Diagnostico varchar(24),
	);


Create table Citas
(
	Id_Citas Bigint NOT NULL ,
	CONSTRAINT PK_Id_Citas PRIMARY KEY
	CLUSTERED(Id_Citas),
	
	tipoCita varchar(20) NOT NULL,
	fecha Date NOT NULL ,
	EstadoCita varchar(12) NOT null

);



/*
Create table Perfil
 (
	Id_Perfil Bigint NOT NULL,
	CONSTRAINT PK_Id_Perfil PRIMARY KEY
    CLUSTERED(Id_Perfil),


	Documento_de_identidad Bigint not null
	CONSTRAINT fk_Documento_de_identidad FOREIGN KEY (Documento_de_identidad) REFERENCES CLIENTE (Documento_de_identidad),
	
	Id_Citas Bigint not null
	CONSTRAINT fk_Id_Citas FOREIGN KEY (Id_Citas) REFERENCES Citas (Id_Citas),
	
	Diagnostico varchar(24),
	Historial_Clinico varchar(24)

	);
*/