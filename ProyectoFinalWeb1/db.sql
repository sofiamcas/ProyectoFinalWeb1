create database proyectoweb1;
use proyectoweb1;
create table usuarios(
    id int not null auto_increment primary key,		
    nombre varchar(50) not null,
    usuario varchar(50) not null,
    pass varchar(20) not null, 
    cellnum varchar(12), 
    email varchar(50)
)

select * from usuarios;