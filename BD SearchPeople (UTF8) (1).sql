create database searchpeople CHARACTER SET utf8 COLLATE utf8_general_ci;

use searchpeople;


create table TipoPessoa(
	id_PF_PJ int (2) primary key auto_increment,
	descricao_tPessoa varchar (30)
	);

create table pessoa(
	id_Pessoa int (20) primary key auto_increment,
	cpf_cnpj varchar(18),
	nome varchar(50),
	telefone varchar (15),
	RG varchar(15),
	inscricao_est varchar(30),
	razao_social varchar(50),
	data_nascimento date,
	data_registro date,
	email varchar(40),
	senha varchar(255),
	id_pf_pj int(2),
	foreign key (id_pf_pj) references TipoPessoa (id_PF_PJ)
	);

create table statusdesaparecido(
	id_Status int (2) primary key auto_increment,
	descricao_status varchar (30)
	);

create table desaparecido(
	id_Desaparecido int (20) primary key auto_increment,
	nome_desaparecido varchar(50),
	data_nascimentoDesaparecido date,
	cpf_desaparecido varchar(16),
	data_desaparecimento date,
	foto varchar(255),
	id_pessoa int (20),
	id_status int (2),
	foreign key (id_pessoa) references pessoa (id_Pessoa),
	foreign key (id_status) references statusdesaparecido (id_Status)
	);

create table tipocaracter(
	id_Tipo int (20) primary key auto_increment,
	descricao varchar (50)
	);

create table  caracteristicapadrao(
	id_CaracDefault int (20) primary key auto_increment,
	nome_CaracDefault varchar (50),
	id_referenciaTipo int(20),
	foreign key (id_referenciaTipo) references tipocaracter (id_Tipo)
	);	


create table caracteristica(
	id_Caracteristicas int (20) primary key auto_increment,
	comentarios varchar (255),
	id_desaparecido int (20),
	id_refTipo int(20),
	id_caracDes int (20),
	foreign key (id_caracDes) references   caracteristicapadrao (id_CaracDefault),
	foreign key (id_refTipo) references tipocaracter (id_Tipo),
	foreign key (id_desaparecido) references desaparecido (id_Desaparecido) 
	);

create table ocorrencia(
	id_Ocorrencia int (20) primary key auto_increment,
	ultimo_local varchar(40),
	ultima_hora varchar (40),
	data date,
	hora time,
	observacao text,
	id_desaparecido int (20),
	id_pessoa int (20),
	foreign key (id_pessoa) references pessoa (id_Pessoa),
	foreign key (id_desaparecido) references desaparecido (id_Desaparecido) 
	);



-- Insert tipo de Pessoa (Fisica / Juridica)
insert into TipoPessoa values (NULL, 'Pessoa Fisica');
insert into TipoPessoa Values (NULL, 'Pessoa Juridica');

-- Insert de tipo de Status 
insert into statusdesaparecido values (NULL, 'Ativo');
insert into statusdesaparecido values (NULL, 'Inativo');

-- Insert Dos tipos de Caracteristicas existentes no sistema
insert into tipocaracter values (NULL, 'Altura');
insert into tipocaracter values (NULL, 'Cicatrizes');
insert into tipocaracter values (NULL, 'Cor de Olho');
insert into tipocaracter values (NULL, 'Cor de Cabelo');
insert into tipocaracter values (NULL, 'Deficiência Fisica');
insert into tipocaracter values (NULL, 'Definição de Peso');
insert into tipocaracter values (NULL, 'Etnia');
insert into tipocaracter values (NULL, 'Tatuagem');
insert into tipocaracter values (NULL, 'Manchas');
insert into tipocaracter values (NULL, 'Tipo de Cabelo');

insert into	 caracteristicapadrao values ( NULL, 'Abaixo de 1,50' , 1);             
insert into	 caracteristicapadrao values ( NULL, 'Entre 1,50 a 1,60' , 1);                       
insert into	 caracteristicapadrao values ( NULL, 'Entre 1,61 a 1,70' , 1);                        
insert into	 caracteristicapadrao values ( NULL, 'Entre 1,71 a 1,80' , 1);                          
insert into	 caracteristicapadrao values ( NULL, 'Entre 1,81 a 1,90' , 1);                         
insert into	 caracteristicapadrao values ( NULL, 'Entre 1,91 a 2,00' , 1);             
insert into	 caracteristicapadrao values ( NULL, 'Entre 2,01 a 2,10' , 1);              
insert into	 caracteristicapadrao values ( NULL, 'Acima de 2,11' , 1);               

insert into	 caracteristicapadrao values ( NULL, 'Não Possui Cicatriz' , 2);
insert into	 caracteristicapadrao values ( NULL, 'Possui Cicatriz' , 2);

insert into	 caracteristicapadrao values ( NULL, 'Olho Azul' , 3);
insert into	 caracteristicapadrao values ( NULL, 'Olho Azul-Esverdeado' , 3);
insert into	 caracteristicapadrao values ( NULL, 'Olho Castanho' , 3);
insert into	 caracteristicapadrao values ( NULL, 'Olho Caramelo' , 3);
insert into	 caracteristicapadrao values ( NULL, 'Olho Verde' , 3);
insert into	 caracteristicapadrao values ( NULL, 'Olho Preto' , 3);

insert into	 caracteristicapadrao values ( NULL, 'Cabelo Castanho escuro' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Castanho médio' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Castanho claro ' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Louro escuro' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Louro claro' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Preto azulado' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Preto' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Ruivo' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Colorido' , 4);
insert into	 caracteristicapadrao values ( NULL, 'Não Aplicavel' , 4);

insert into	 caracteristicapadrao values ( NULL, 'Não Possui Deficiencia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Paraplegia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Paraparesia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Monoplegia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Monoparesia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Tetraplegia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Tetraparesia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Triplegia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Triparesia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Hemiplegia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Hemiparesia' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Amputação' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Paralisia Cerebral' , 5);
insert into	 caracteristicapadrao values ( NULL, 'Ostomia' , 5);

insert into	 caracteristicapadrao values ( NULL, 'Abaixo do Peso' , 6);
insert into	 caracteristicapadrao values ( NULL, 'Magro' , 6);
insert into	 caracteristicapadrao values ( NULL, 'Normal' , 6);
insert into	 caracteristicapadrao values ( NULL, 'Acima do Peso' , 6);

insert into	 caracteristicapadrao values ( NULL, 'Branco' , 7);
insert into	 caracteristicapadrao values ( NULL, 'Negro' , 7);
insert into	 caracteristicapadrao values ( NULL, 'Indigena' , 7);
insert into	 caracteristicapadrao values ( NULL, 'Pardo' , 7);
insert into	 caracteristicapadrao values ( NULL, 'Asiatico' , 7);
insert into	 caracteristicapadrao values ( NULL, 'Europeu' , 7);

insert into	 caracteristicapadrao values ( NULL, 'Não Possui Tatuagem' , 8);
insert into	 caracteristicapadrao values ( NULL, 'Uma Tatuagem' , 8);
insert into	 caracteristicapadrao values ( NULL, 'Duas Tatuagens' , 8);
insert into	 caracteristicapadrao values ( NULL, 'Três Tatuagens' , 8);
insert into	 caracteristicapadrao values ( NULL, 'Mais de 4 Tatuagens' , 8);

insert into	 caracteristicapadrao values ( NULL, 'Não Possui Manchas' , 9);
insert into	 caracteristicapadrao values ( NULL, 'Possui Manchas' , 9);

insert into	 caracteristicapadrao values ( NULL, 'Cabelo Longo' , 10);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Curto' , 10);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Cacheado' , 10);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Careca' , 10);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Calvo' , 10);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Social' , 10);
insert into	 caracteristicapadrao values ( NULL, 'Cabelo Afro' , 10);

insert into pessoa (id_Pessoa, cpf_cnpj, nome, telefone, RG, data_nascimento, email, senha, id_pf_pj) values(NULL, '472.931.338-04', 'Rildo Damasceno do Nascimento Cunha Claro', '(19) 99745-2533',
							'45.368.338-1', 1999-10-04, 'searchpeople@gmail.com', '98fbc344e5bba6fbdf48b0af5b084c06eeeafa78', 1 );

