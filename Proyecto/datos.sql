drop schema if exists `datos`;

create schema  if not exists `datos` default  character set utf8 collate  utf8_spanish2_ci;
USE `datos`; 

CREATE TABLE  `usuarios`(
`nombre_usuario` text not null,
`apellidos_usuario` text not null,
`no_identificacion` int(10) not null,
`direccion` text not null,
`telefono` varchar (8) not null,
`correo` text not null,
`universo` int(10) not null,
`password` varchar (8) not null,
`fecha_registro` datetime not null default current_timestamp
);

ALTER TABLE `usuarios`ADD PRIMARY KEY (`no_identificacion`);



insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Hobie','Brown','1234567890','calle 16','55283948','hob@gmail.com', 138, '12345', NOW());
insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Peter','Benjamin Parker','0987654321','calle 17','55283849','parker@gmail.com', 616,'12345', NOW());
insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Gwen','Stacy','1123456789','calle 19','55283948','hob@gmail.com', 65,'12345', NOW());
insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Wade','Wilson Winston','1223456789','calle 18','55283948','wade@gmail.com', 616,'12345', NOW());
insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Miguel','Ohara','1233456789','calle 20','55283948','miguel@gmail.com', 928,'12345', NOW());
insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Pavitr','Prabhakar','1234456789','calle 21','55283948','pav@gmail.com', 5010, '12345', NOW());
insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Matt','Murdock','1234556789','calle 22','55283948','matt@gmail.com', 616,'12345', NOW());
insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Miles','Morales','1234566789','calle 23','55283948','miles@gmail.com', 1610,'12345', NOW());
insert into `usuarios`(`nombre_usuario`, `apellidos_usuario`,`no_identificacion`,`direccion`,`telefono`,`correo`,`universo`,`password`,`fecha_registro`)values('Tony','Stark','1234567789','calle 24','55283948','tony@gmail.com', 616,'12345', NOW());

SELECT * FROM datos.usuarios;
