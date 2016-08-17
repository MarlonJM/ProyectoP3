INSERT INTO `enfasis` (`id_enfasis`, `descripcion`) VALUES (NULL,'Dise&ntilde;ador');
INSERT INTO `enfasis` (`id_enfasis`, `descripcion`) VALUES (NULL,'Desarrollador');

INSERT INTO `usuario`(`usuario`, `clave`, `id_persona`)  VALUES ('Pagui', 'paola',1);
INSERT INTO `usuario`(`usuario`, `clave`, `id_persona`)  VALUES ('Kate', 'katherinne',2);
INSERT INTO `usuario`(`usuario`, `clave`, `id_persona`)  VALUES ('MarlonJM', 'marlon',3);
INSERT INTO `usuario`(`usuario`, `clave`, `id_persona`)  VALUES ('Sershock', 'sergio',4);

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `profileImg`, `id_enfasis`, `acerca`) VALUES(1, 'Paola', 'Aguirre', 'M&eacute;ndez', '1997-06-04', 'paguimendez@hotmail.com', 'profile2.png', 1, 'Actualmente estudiante de Ingenieria Informatica en UIA');
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `profileImg`, `id_enfasis`, `acerca`) VALUES(2, 'Katherinne', 'God&iacute;nez', 'D&iacute;az', '1994-12-28', 'kategodinezd@gmail.com', 'profile2.png', 2, 'Actualmente estudiante de Ingenieria de Software en UIA');
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `profileImg`, `id_enfasis`, `acerca`) VALUES(3, 'Marlon', 'Jarqu&iacute;n', 'Mu&ntilde;oz', '1995-08-16', 'marlonjarquin@hotmail.com', 'profile.jpg', 2, 'Actualmente estudiante de Ingenieria en Sistemas en UIA');
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `profileImg`, `id_enfasis`, `acerca`) VALUES(4, 'Sergio', 'Chang', 'Mu&ntilde;oz', '1996-11-25', 'sergioxd@hotmail.com', 'profile.jpg', 1, 'Actualmente estudiante de Ingenieria de Software en UIA');

INSERT INTO `tipotelefono` (`id_tipoTelefono`, `descripcion`) VALUES ('1', 'movil');
INSERT INTO `tipotelefono` (`id_tipoTelefono`, `descripcion`) VALUES ('2', 'trabajo');
INSERT INTO `tipotelefono` (`id_tipoTelefono`, `descripcion`) VALUES ('3', 'casa');

INSERT INTO `telefono`(`telefono`, `id_tipoTelefono`, `id_persona`) VALUES (86155941,1,1);
INSERT INTO `telefono`(`telefono`, `id_tipoTelefono`, `id_persona`) VALUES (85972520,1,2);
INSERT INTO `telefono`(`telefono`, `id_tipoTelefono`, `id_persona`) VALUES (60670585,1,3);
INSERT INTO `telefono`(`telefono`, `id_tipoTelefono`, `id_persona`) VALUES (89563064,1,4);

INSERT INTO `estudios`(`id_persona`, `descripcion`)VALUES (1,'Colegio Maria Inmaculada');
INSERT INTO `estudios`(`id_persona`, `descripcion`)VALUES (2,'Colegio Tecnico Profesional de Puriscal');
INSERT INTO `estudios`(`id_persona`, `descripcion`)VALUES (3,'Liceo Mauro Fernandez');
INSERT INTO `estudios`(`id_persona`, `descripcion`)VALUES (4,'Colegio Ecologico Bilingue San Martin');

INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (1,'Portafolio Profesional','Sitio web para administrar portafolios personales realizado para el curso Programacion 3','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (1,'Pagina Web','Pagina web realizada para la investigacion del Curso Programacion 3','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (1,'Batalla Naval','Juego en Java realizado para el curso de Programacion 1','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (2,'Portafolio Profesional','Sitio web para administrar portafolios personales realizado para el curso Programacion 3','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (2,'Pagina Web','Pagina web realizada para la investigacion del Curso Programacion 3','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (2,'Solitario','Juego en Java realizado para el curso de Programacion 1','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (3,'Portafolio Profesional','Sitio web para administrar portafolios personales realizado para el curso Programacion 3','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (3,'Pagina Web','Pagina web realizada para la investigacion del Curso Programacion 3','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (3,'Sistema Contable','Programa realizado para el curso de Programacion 2','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (4,'Portafolio Profesional','Sitio web para administrar portafolios personales realizado para el curso Programacion 3','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (4,'Pagina Web','Pagina web realizada para la investigacion del Curso Programacion 3','project.png');
INSERT INTO `proyecto`(`id_persona`, `nombre`, `descripcion`, `img`) VALUES (4,'Batalla Naval','Juego en Java realizado para el curso de Programacion 1','project.png');

INSERT INTO `galeria` (`id_galeria`, `id_persona`, `img`) VALUES (NULL, '2', 'img1.jpg');
INSERT INTO `galeria` (`id_galeria`, `id_persona`, `img`) VALUES (NULL, '2', 'img2.jpg');