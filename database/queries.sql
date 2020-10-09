create table cidades (
    id_cidade long primary key not null auto_increment,
    nm_cidade varchar(200),
    id_estado long not null foreign key estados(id_estado);
);

create table unidades_federativas (
    id_uf long primary key not null auto_increment,
    nm_unidade_federativa varchar(200) not null,
    nm_sigla varchar(2) not null,
    id_pais long not null foreign key paises(id_pais);
);

create table paises (
    id_pais long primary key not null auto_increment,
    nm_pais varchar(200),
    nm_sigla varchar(3)
);

create table empresas (
    id_empresa long primary key not null auto_increment,
    nm_fantasia varchar(200) not null,
    nm_razao_social varchar(200) not null,
    tx_cnpj varchar(14) not null,
    id_cidade long not null foreign key cidades(id_cidade),
    tx_endereco text,
    tx_cep text,
    tx_telefone text,
    tx_email text,
);