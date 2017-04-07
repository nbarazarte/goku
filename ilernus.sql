-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-04-2017 a las 23:25:35
-- Versión del servidor: 5.5.54-0+deb8u1
-- Versión de PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ilernus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cursos`
--

CREATE TABLE IF NOT EXISTS `tbl_cursos` (
`id` bigint(20) unsigned NOT NULL COMMENT 'indice de la tabla',
  `str_curso` varchar(255) NOT NULL COMMENT 'nombre del curso',
  `str_titulocorto` varchar(255) NOT NULL COMMENT 'titulo corto del curso',
  `str_contenido` text COMMENT 'de que trata el curso',
  `str_categoria` varchar(255) NOT NULL COMMENT 'categoria a la que pertenece el curso',
  `str_clase` varchar(255) NOT NULL COMMENT 'clase bootstrap que usa la plantilla del diseño web',
  `str_color` varchar(10) NOT NULL COMMENT 'codigo de color de la categoria',
  `str_imagen` varchar(255) NOT NULL COMMENT 'nombre de la imagen asociada al curso',
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'indica si esta eliminado un curso',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_cursos`
--

INSERT INTO `tbl_cursos` (`id`, `str_curso`, `str_titulocorto`, `str_contenido`, `str_categoria`, `str_clase`, `str_color`, `str_imagen`, `bol_eliminado`, `updated_at`, `created_at`) VALUES
(1, 'Bases-legales-del-contrato-laboral-en-Venezuela', 'Bases-legales', 'Conocer y manejar los elementos que definen y caracterizan la generación de un contrato laboral de acuerdo a las especificaciones de la normativa legal venezolana.', 'Negocios', 'col-md-3 col-sm-3 mix negocios', '#35459C', 'cover-negocios-bases.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(3, 'Modalidades-y-elementos-asociados-al-contrato-laboral', 'Contrato-laboral', 'Conocer y manejar cuáles son las modalidades del contrato laboral, así como los elementos a considerar para la redacción de un contrato laboral de acuerdo a las especificaciones de la normativa legal venezolana.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-modalidades.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(4, 'Causas-y-consecuencias-de-la-suspensión-de-la-relación-de-trabajo', 'Relación-de-trabajo', 'Ayuda a conocer y manejar las previsiones del Decreto con Rango, Valor y Fuerza de Ley Orgánica del Trabajo los Trabajadores y las Trabajadoras (LOTTT), en materia de suspensión de la relación de trabajo, así como lo que consagra el Reglamento de la Ley Orgánica del Trabajo sobre este tema y las relaciones del mismo con la Ley del Seguro Social, el Reglamento General de la Ley del Seguro Social y el Decreto con Rango, Valor y Fuerza de Ley del Cestaticket Socialista para los Trabajadores y Trabajadoras.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios destacados', '#35459C', 'cover-negocios-causas.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(5, 'Qué-cambió-en-la-nueva-ISO-9001:2015', 'La-nueva-ISO-9001:2015', 'Aclarar de manera sencilla los cambios ocurridos en la estructura, terminología y conceptos más relevantes de la Norma ISO 9001: 2015, respecto a su predecesora ISO 9001: 2008.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios destacados', '#35459C', 'cover-negocios-cambios.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(6, 'Conceptos-fundamentales-y-principios-de-la-ISO-9001:2015', 'Principios-de-la-ISO-9001:2015', 'Presentar los siete principios que apoyan los conceptos fundamentales de gestión de la calidad contenidos en la norma internacional ISO 9000:2015 “Sistemas de Gestión de la Calidad – Fundamentos y Vocabulario”.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios destacados', '#35459C', 'cover-negocios-conceptos.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(7, 'Customer-development', 'Customer-development', 'Conocer y manejar la metodología Customer development, identificando su utilidad, enfoque, fases y aspectos claves a considerar en su desarrollo dentro de las organizaciones o para emprendimientos.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-customer.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(8, 'El-enfoque-a-procesos-en-la-ISO-9001:2015', 'Procesos-en-la-ISO-9001:2015', 'Fortalecer los conocimientos en relación al enfoque basado en procesos planteado en la ISO 9001:2015 “Sistemas de Gestión de la Calidad-Requisitos”, a partir de los nuevos aportes que esta versión implica.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-enfoque.jpg', 0, '2017-03-24 17:02:30', '0000-00-00 00:00:00'),
(9, 'Estados-financieros', 'Estados-financieros', 'Entender la información financiera básica para la toma de decisiones que impacten favorablemente en la gestión de la organización.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios destacados', '#35459C', 'cover-negocios-estados.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(10, 'La-dirección-estratégica-en-el-marco-de-la-ISO-9001:2015', 'Dirección-de-la-ISO-9001:2015', 'Presentar las fases del ciclo de la Dirección Estrategia y su alineación con los requerimientos de la norma ISO 9001:2015 “Sistemas de Gestión de la Calidad-Requisitos”.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-direccion.jpg', 0, '2017-03-24 17:07:08', '0000-00-00 00:00:00'),
(11, 'Redacción-de-correos-electrónicos-efectivos', 'Correos-electrónicos', 'Brinda estrategias para redactar de manera adecuada correos electrónicos adaptando su contenido, redacción y lenguaje al destinatario del mismo.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-redactar.png', 0, '2017-03-24 16:54:13', '0000-00-00 00:00:00'),
(12, 'La-inamovilidad-y-estabilidad-laboral', 'La-inamovilidad-laboral', 'Conocer y manejar cómo actuar ante una eventual situación que pueda generar un procedimiento de estabilidad o inamovilidad laboral.', 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-estabilidad.png', 0, '2017-03-24 16:52:31', '0000-00-00 00:00:00'),
(13, 'Virus-a-raya', 'Virus-a-raya', 'Se darán a conocer los virus informáticos, elementos para detectarlos y estrategias para prevenirlos.', 'Tecnología', 'col-md-3 col-sm-3 mix	tecnologia destacados', '#F47741', 'cover-tecnologia-virus.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(14, 'Mantenimiento-preventivo-del-computador', 'Mantenimiento-preventivo', 'Se aborda cada una de las herramientas propias de cada sistema operativo y otros aspectos concernientes a permisología, actualizaciones, procesos del disco duro sobre guardar datos, la memoria en los procesos de lectura de datos y el rendimiento del sistema.', 'Tecnología', 'col-md-3 col-sm-3 mix	tecnologia', '#F47741', 'cover-tecnologia-mantenimiento.png', 0, '2017-03-24 17:03:28', '0000-00-00 00:00:00'),
(15, 'Gestión-de-redes-de-computadoras', 'Redes-de-computadoras', 'Dar a conocer los conceptos básicos e importantes que se deben considerar en el uso e implementación de redes de computadoras dentro de una organización o entidad que requiere compartir recursos tecnológicos o tener acceso a internet.', 'Tecnología', 'col-md-3 col-sm-3 mix	tecnologia', '#F47741', 'cover-tecnologia-gestion.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(16, 'Seguridad-Informática', 'Seguridad-Informática', 'Compartir el concepto de seguridad informática, así como buenas prácticas que podrá aplicar en el uso diario de su equipo de cómputo personal o de trabajo, garantizando la disponibilidad, confidencialidad e integridad de la información contenida en estos.', 'Tecnología', 'col-md-3 col-sm-3 mix	tecnologia', '#F47741', 'cover-tecnologia-seguridad.png', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(17, 'Etiqueta-Telefónica', 'Etiqueta-Telefónica', 'El mundo globalizado requiere de mayor inmediatez en las comunicaciones y es que a través de la vía telefónica por la que se mantiene un valor vital dentro de cualquier organización.  Una mala contestación o atención puede hacer que perdamos un cliente o que disminuya nuestra buena reputación.  En este curso aprenderás todo lo relacionado con la etiqueta telefónica, para ponerla en práctica con éxito ofreciendo calidad en el servicio.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-etiqueta.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(18, 'Desarrollo-profesional-en-la-sociedad-del-conocimiento', 'Desarrollo-profesional', 'La idea es que utilizando las herramientas tecnológicas que brinda la sociedad del conocimiento, el participante pueda contar con tips estratégicos que le aydudarán a comprender y manejar los cambios organizacionales, actuar en función de ellos, identificar potencialidades en otros, afianzar el trabajo en red, comprender la necesidad de auto-gestionar su formación profesional para la competitividad y abrirse a nuevos mundos de aprendizajes que le proporcionen valor a su experiencia formativa.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-desarrollo.png', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(19, 'Buenas-prácticas-de-supervisión', 'Prácticas-de-supervisión', 'Brindará herramientas conceptuales de supervisión que articulen los esfuerzos de la gerencia para lograr un mayor acercamiento entre los objetivos de la organización y el proceso continuo de los colaboradores.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-buenas.jpg', 0, '2017-03-24 16:57:09', '0000-00-00 00:00:00'),
(20, 'Aumentado-la-productividad-con-la-psicología-positiva', 'La-psicología-positiva', 'Permite comprender como la felicidad, explicada a partir de la Psicología Positiva, influye de forma directa en la productividad de los colaboradores de una organización.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo destacados', '#41B649', 'cover-desarrollo-psicologia.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(21, 'Qué-debemos-saber-del-beneficio-de-alimentación', 'Beneficio-de-alimentación', 'Abordará elementos relacionados con la entrega del beneficio alimentación respetando normativa legal que rige esta obligación, así como conocer sus implicaciones y sus limitantes legales pudiendo responder de manera efectiva a cualquier interrogante sobre el tema.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-beneficio.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(22, 'Entrando-al-mundo-de-las-drogas', 'El-mundo-de-las-drogas', 'Amplía la conciencia en cuanto a la toma de decisiones respecto al uso inadecuado de drogas, independientemente del nombre de la sustancia o de sus componentes químicos. Permite lograr comprender e identificar con ayuda de los contenidos trabajados que si bien llegar al consumo de drogas no es algo planificado, la dinámica funciona como una ruta elaborada que pareciera evidente la predisposición o la orientación a ello; con lo que resulta sencillo el camino que podemos transitar hasta convertirnos en consumidores dependientes a las drogas (adicción).', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-entrando.jpg', 0, '2017-03-24 17:04:20', '0000-00-00 00:00:00'),
(23, 'Prevención-del-consumo-de-drogas-como-RSE', 'Drogas-como-RSE', 'Dar a conocer el poder de decisión en las líneas de mando organizacional, para iniciar un camino que garantice la salud integral de sus colaboradores y mejoren su productividad e imagen corporativa mostrando su interés en la RSE. Ayuda a comprender e identificar con ayuda de los contenidos trabajados, cuáles son los motivos para activar la prevención del consumo de drogas en la empresa, las consecuencias de su consumo en el ámbito laboral, qué beneficios se generan a partir de la prevención y de qué forma consolidar una acción preventiva en el ámbito laboral. El fin último de este curso, está orientado a que los usuarios se motiven a preparar un Plan de Acción para la Prevención del Consumo de Drogas para sus colaboradores y familiares.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-prevencion.jpg', 0, '2017-03-24 16:58:58', '0000-00-00 00:00:00'),
(24, 'Alerta-con-las-drogas-emergentes', 'Drogas-emergentes', 'Obtendrá un conocimiento amplio de lo que representa para nuestro mundo, sobre todo para los más jóvenes, el consumo de las drogas emergentes, además de cómo se diseñan, elaboran y distribuyen. ', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-drogas.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(25, 'Cómo-actuar-frente-al-consumo-de-drogas-en-la-empresa', 'Drogas-en-la-empresa', 'Contar con las estrategias para hacer, de una manera eficaz y efectiva, frente a una situación de consumo de drogas interno de la empresa, que desde el momento en el cual se descubre un consumo de drogas sepa cómo, paso a paso, solucionar esta problemática.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo destacados', '#41B649', 'cover-desarrollo-como.jpg', 0, '2017-03-24 16:58:28', '0000-00-00 00:00:00'),
(26, 'Manejo-efectivo-del-tiempo', 'Manejo-efectivo-del-tiempo', 'Adquirir estrategias para gestionar su tiempo, lo cual influirá, de manera directa, en cada uno de los colaboradores de la organización en la ejecución de los objetivos establecidos  y el impacto en la gestión.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo destacados', '#41B649', 'cover-desarrollo-manejo.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(27, 'Riesgos-en-tu-trabajo', 'Riesgos-en-tu-trabajo', 'Aporta conocimientos técnicos, habilidades y actitudes necesarias en la prevención de riesgos laborales; y con la adquisición de estas herramientas evitar accidentes de trabajo y/o enfermedades ocupacionales, garantizando la seguridad de lo más importante en nuestra empresa: Nuestros trabajadores.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo destacados', '#41B649', 'cover-desarrollo-riesgos.jpg', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(28, 'Sistema-de-gestión-en-salud-y-seguridad-en-el-trabajo', 'Salud-y-seguridad', 'Ampliar los conocimientos técnicos, destrezas y actitudes necesarias para la ejecución del Sistema de Gestión en Seguridad y Salud en el Trabajo; además de posicionar la empresa como una empresa segura para sus trabajadores y darle fiel cumplimiento a la meta: cero accidentes de trabajo y enfermedades ocupacionales.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo destacados', '#41B649', 'cover-desarrollo-gestion.jpg', 0, '2017-03-24 17:08:01', '0000-00-00 00:00:00'),
(29, 'Autoestima-en-equilibrio', 'Autoestima-en-equilibrio', 'Promover el reconocimiento de la autoestima como un componente socioafectivo esencial para una vida saludable y en equilibrio.', 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-autoestima.png', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(30, 'Endomercadeo', 'Endomercadeo', 'Ayuda a analizas la aplicación concreta del mercadeo en la gestión de los recursos humanos de la empresa, lo que se ha denominado como Endomercadeo. El principio básico de esta nueva especialidad es simple, la empresa, además del cliente externo, tiene un nuevo tipo de cliente, el interno, el propio trabajador al cual hay que vender ideas, culturas, políticas, proyectos, etc.', 'Productividad', 'col-md-3 col-sm-3 mix	productividad', '#7952A1', '	cover-productividad-endomercadeo.jpg	', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00'),
(31, 'La-estrategia-efectiva-del-Community-Manager', 'Community-Manager', 'Familiarizarse con el uso de redes sociales así como de herramientas digitales para la gestión de comunidades online que le permitan desarrollar estrategias en su labor como Community Manager dentro de la empresa.', 'Productividad', 'col-md-3 col-sm-3 mix	productividad destacados', '#7952A1', '	cover-productividad-communityManager.png	', 0, '2017-03-24 16:49:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_equipoilernus`
--

CREATE TABLE IF NOT EXISTS `tbl_equipoilernus` (
`id` bigint(20) NOT NULL COMMENT 'id de la tabla',
  `str_nombre` varchar(255) NOT NULL COMMENT 'nombre de la persona',
  `str_sexo` varchar(15) NOT NULL COMMENT 'genero',
  `str_cargo` varchar(255) NOT NULL COMMENT 'cargo de la persona',
  `str_tipo` varchar(255) NOT NULL COMMENT 'tipo de integrante de ilernus',
  `str_cv_corto` text NOT NULL COMMENT 'reseña corta del cv',
  `str_cv` text NOT NULL COMMENT 'curriculo de la persona',
  `str_imagen` varchar(255) NOT NULL COMMENT 'nombre de la imagen',
  `blb_img` longblob NOT NULL COMMENT 'foto de la persona',
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'eliminado logico',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_equipoilernus`
--

INSERT INTO `tbl_equipoilernus` (`id`, `str_nombre`, `str_sexo`, `str_cargo`, `str_tipo`, `str_cv_corto`, `str_cv`, `str_imagen`, `blb_img`, `bol_eliminado`, `updated_at`, `created_at`) VALUES
(1, 'Clover Brito', 'm', 'Presidente', 'director', 'Es socio fundador de B&G Consultores Corporativos, S.A., creador del concepto ilernus.', 'Es socio fundador de B&G Consultores Corporativos, S.A., creador del concepto ilernus.Licenciado en Contaduría  Pública  (1997) con  Maestría  en Finanzas en IESA  (2004), especialista tributario por la Universidad  Metropolitana (2004-2005) y Maestría  en Administración de Empresas (MBA) en el IESA (2008). Obtuvo dos becas para cursar estudios en el IESA. Logró ubicarse  dentro de los primeros quince estudiantes de la Maestría en el IESA (sobre un total de 72 estudiantes) con un promedio de 18/20 puntos y obtuvo el premio a la excelencia ejecutiva en el año 2007 a nivel empresarial.Actualmente ocupa el rol de CEO en Venezuela, asiste a un grupo exclusivo de clientes mediante su participación en sus consejos consultivos y juntas directivas.', 'clover_brito', '', 0, '2017-04-04 01:40:54', '0000-00-00 00:00:00'),
(2, 'Nohelia Bastidas P.', 'f', 'Director General de ilernus Corp', 'director', 'Cuenta con más de 15 años de experiencia financiera y en distintas áreas de Administración e Impuestos.', 'Cuenta con  más de 15 años de experiencia financiera y en distintas áreas de Administración e Impuestos. Su trayectoria le ha permitido consolidar mejores prácticas de la Gestión Administrativa y Laboral, en áreas como; presupuesto, obligaciones fiscales y parafiscales y de control interno.\r\nLicenciada en Administración de Empresas (1998), egresada de la Universidad Católica Andrés Bello con maestría en Administración, Mención Gerencia de Empresas en la Universidad Metropolitana (2008), aprobado con Mención Meritoria. \r\nMiembro del Comité de Finanzas de la Cámara Venezolana Británica de Comercio y Venamcham.\r\nActualmente, se desempeña como Director General de ilernus Corp.', 'nohelia_bastidas', '', 0, '2017-04-04 01:41:05', '0000-00-00 00:00:00'),
(3, 'Jimena Gracia Misol', 'f', 'Director Comercial', 'gerencial', 'Acumula más de 15 años de experiencia en la dirección de áreas de ventas y mercadeo.', 'Jimena, acumula más de 15 años de experiencia en la dirección de áreas de ventas y mercadeo de productos y servicios de Tecnología, Telecomunicaciones, Retail, Servicios y Salud.  En su trayectoria ha desarrollado estrategias exitosas BTL (Bellow the line) y Trade Marketing para distintos productos y servicios.Posee conocimientos sólidos en control de forecast, presupuestos, lanzamientos y posicionamiento de nuevos productos. Es egresada del Instituto Universitario de Nuevas Profesiones como Administrador de Empresas (1.999).Actualmente se desempeña como Director Comercial en B&G Technologies S.A.', 'jimena_gracia', '', 0, '2017-04-07 00:42:30', '0000-00-00 00:00:00'),
(4, 'Maria Alejandra Aguilar P.', 'f', 'Director General ilernus Venezuela', 'gerencial', 'Posee más de 15 años de exitosa experiencia en el área docente en la Universidad Metropolitana.', 'María Alejandra posee más de 15 años de exitosa experiencia en el área docente en la Universidad Metropolitana, así como también en el área de gerencia, liderazgo y desarrollo de proyectos relacionados con tecnología educativa y formación en línea (e-learning).Es egresada de la Universidad Metropolitana como Licenciada en Educación Preescolar, mención Gerencia. Posee posgrados en Informática Educativa (USB) y Entornos virtuales de aprendizaje (OEA-Virtual Educa). Los proyectos de formación en línea son su pasión y el desarrollarlos, llevándolos a feliz término, es su meta firme.Actualmente se desempeña como Director General de ilernus Venezuela.', 'maria_aguilar', '', 0, '2017-04-07 00:43:16', '0000-00-00 00:00:00'),
(5, 'Oscar Rojas', 'm', 'Director de Desarrollo', 'gerencial', 'Oscar, tiene más de 12 años de experiencia en la área de tecnología de la información.', 'Oscar, tiene más de 12 años de experiencia en la área de tecnología de la informaciónEn su carrera profesional obtuvo el título de T.S.U en Informática en el I.U.T.V año 2003, luego el título de Ingeniero en Informática en la Universidad Alejandro de Humboldt año 2011, actualmente cursa tesis en la Maestría en Gobierno Electrónico en la Universidad Nacional Experimental Politécnica de la Fuerza Armada.Sólida experiencia en el despliegue de proyectos de tecnología, habilidad para conformar equipo de trabajo, colaboración  y disciplina operativa.Actualmente se desempeña como Director de Desarrollo ILERNUS en B&G Technologies S.A.', 'oscar_rojas', '', 0, '2017-04-04 14:45:07', '0000-00-00 00:00:00'),
(6, 'Francis Cova', 'f', 'Director', 'director', 'Ejecutiva con amplia experiencia como Gerente General de Desarrollo de Negocios y Gerencia de Proyectos.', 'Ejecutiva con amplia experiencia como Gerente General de Desarrollo de Negocios y Gerencia de Proyectos en el sector de Ingeniería, EPC y EPCM. Amplia trayectoria en Desarrollo de Negocios, Negociación de contratos, Operaciones y Administración de proyectos para los sectores de O & G y Energía enfocados principalmente en LatAm.\r\n \r\nCuenta con estudios superiores de la EOI-España (2005) como Magister Executive International Business. Programa Avanzado de Gerencia del IESA (2001), Especialista en Programa de Marketing del IUFAN (2000), Programa de Gestión de Logistica de la Universidad Central de Venezuela (1993) y Arquitecto de la misma casa de estudio (1980).\r\n \r\nActualmente es miembro de la Junta Directiva de B&G Technologies (Ilernus).', 'francis_cova', '', 0, '2017-04-04 01:41:38', '0000-00-00 00:00:00'),
(7, 'Alexander Elorriaga', 'm', 'Director', 'director', 'Ejecutivo y Director de Negocios Internacionales en la industria de telecomunicaciones.', 'Ejecutivo y Director de Negocios Internacionales en la industria de telecomunicaciones, liderando operaciones a gran escala con un crecimiento sin precedentes.\r\n \r\nAsumió la Vicepresidencia de Marketing, Ventas y Desarrollo de Negocios para Digitel, ha desempeñado posiciones de alta dirección en AT & T-DIRECTV LATAM responsable de la estrategia de desarrollo de negocios para el Caribe, Puerto Rico y Venezuela haciendo énfasis en ventas publicitarias, desarrollo de programación deportiva y derechos de eventos deportivos mundiales para la programación de DIRECTV incluyendo relaciones institucionales, gubernamentales, regulatorias y corporativas para toda la región.\r\n \r\nLideró toda la operación como CEO en DIRECTV de Venezuela, incluyendo la programación deportiva local para la región LATAM. También dirigió la Unidad de Negocios Eventos, responsable de proyectos como la Copa EuroAmericana y Altius.\r\n \r\nEs egresado como Magister Ejecutivo en Administración de Empresas (MBA) de Universidad Simón Bolívar (2006) y Licenciado en Ingeniería Electrónica de la misma casa de estudio (1980).', 'alexander_elorriaga', '', 0, '2017-04-04 01:41:47', '0000-00-00 00:00:00'),
(8, 'Antonella Lobosco', 'f', 'Consultoría Jurídica', 'gerencial', 'Más de 20 años de experiencia en las áreas del Derecho Mercantil, Laboral y Corporativo.', 'Antonella cuenta con más de 20 años de experiencia en las áreas del Derecho Mercantil, Laboral y Corporativo, así como, en  la Dirección de negocios en el sector de consultoría y servicios.Fue socio en firmas de consultores y abogados, desempeñando posiciones de dirección y  asesoría a clientes de diversos sectores industriales, implementado nuevos instrumentos legales, asegurando el cumplimiento del ordenamiento jurídico organizacional y estableciendo mecanismos que facilitan las relaciones comerciales. Abogado egresado de la Universidad Santa María (1990) y Especialista en Derecho Laboral de la misma casa de estudios (1993).En su trayectoria ha asumido la dirección de gerencias administrativas a cargo de asegurar las mejores prácticas y controles internos de los procesos administrativos, legales y operativos.', 'antonella_lobosco', '', 0, '2017-04-07 00:44:29', '0000-00-00 00:00:00'),
(9, 'Nailis Blandín', 'f', 'Informática', 'gerencial', 'Nailis, es Ingeniera en Sistemas, egresada del Instituto Universitario Santiago Mariño.', 'Nailis, es Ingeniera en Sistemas, egresada del Instituto Universitario Santiago Mariño, cuenta con una Especialización en Marketing Digital,  acumula más de 10 años de experiencia en el Liderazgo de Servicios de Tecnologías de la Información, especializándose en Administración de Redes IP con Plataforma  CISCO, administración de infraestructura con plataforma Microsoft Windows, Exchange, Windows Azure, office365, fortinet, watchguard.En los últimos años se ha desempeñado como Gerente de Operaciones, formándose en control de forecast, presupuestos, lanzamientos y estrategias de ventas , posicionamiento de nuevos productos.  Desde el 2016, se ha estado formando y desarrollando en el área Comercial, asumiendo nuevos retos y logrando los objetivos de ventas.', 'nailis_blandin', '', 0, '2017-04-07 00:34:39', '0000-00-00 00:00:00'),
(10, 'Romina Iaconelli', 'f', 'Gestión de Talentos', 'gerencial', 'Es lcda. en Administración de Empresas con Diplomado en Desarrollo Organizacional', 'Es licenciada en Administración de Empresas con Diplomado en Desarrollo Organizacional con más de 10 años de experiencia laboral.Ha sido líder de proyectos como la implementación de software de Administración de Personal y Control de Asistencia, levantamiento de esquemas de evaluación de desempeño, descripciones de cargo y Medición de Clima Organizacional. En su trayectoria ha implementado manuales, políticas y procedimientos en el área de Gestión de Talentos que permitieron a la organización elevar su nivel de cumplimiento laboral del 60% al 95% en el primer año, desarrollo mecanismos de comunicación y bienestar social que han permitido mantener la satisfacción de los colaboradores en un promedio del 90% y disminuir los índices de rotación de personal a un 5%.En los últimos 5 años se ha formado como líder integral de los diferentes subsistemas que conforman el área de Gestión de Talentos adquiriendo nuevos retos y logrando con éxito el alcance de sus objetivos.', 'romina_laconelli', '', 0, '2017-04-07 00:34:43', '0000-00-00 00:00:00'),
(11, 'Liener Martínez', 'f', 'Administración', 'gerencial', 'Liener, es Contador Público egresada de la Universidad Santa María', 'Liener, es Contador Público egresada de la Universidad Santa María, acumula más de 9 años de experiencia en el área de administración y contabilidad en general, tesorería, cuentas por cobrar, cuentas por pagar, reportes, inventarios, depuración de cuentas, amarres de cuentas, conciliaciones bancarias, cierres mensuales y anuales.\r\nSe especializa en el manejo de la plataforma de Profit Plus y tiene la capacidad de organizar equipos, liderarlos hasta el cumplimiento de metas.\r\nEn los últimos años se  ha desempeñado  en cargos de Gerente de administración y tesorería. Desde el 2016 está con nosotros como Gerente de Administración del Grupo B&G.', 'liener_martinez', '', 0, '2017-04-07 00:34:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_instructores`
--

CREATE TABLE IF NOT EXISTS `tbl_instructores` (
`id` bigint(20) NOT NULL,
  `str_nombre` varchar(255) NOT NULL COMMENT 'nombre del instructor',
  `str_sexo` varchar(15) NOT NULL COMMENT 'genero',
  `str_profesion` varchar(255) NOT NULL COMMENT 'carrera del instructor',
  `str_cv` text NOT NULL COMMENT 'curriculo del instructor',
  `blb_img` longblob NOT NULL COMMENT 'foto del instructor',
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_instructores`
--

INSERT INTO `tbl_instructores` (`id`, `str_nombre`, `str_sexo`, `str_profesion`, `str_cv`, `blb_img`, `bol_eliminado`, `created_at`, `updated_at`) VALUES
(1, 'María Jesús Pidal', 'f', 'Finanzas', 'María es profesora titular de la Universidad Metropolitana. Profesora de Matemática Financiera y Finanzas Corporativas. Directora de Postgrado del Área de Estudios Gerenciales, Económicos y Sociales. Doctor en Ciencias Economías y Empresariales de la Universidad de Almería, España .Magister en Finanzas de la Universidad Metropolitana. Magister Scientiarum, mención Matemática de la UCV. Licenciada en Matemática de la UCV.', '', 0, '2017-03-29 02:37:13', '0000-00-00 00:00:00'),
(2, 'Anafina Vargas', 'f', 'Innovación – Emprendimiento', 'Posee un Master en Creación y Gestión de Empresas Innovadoras y de Base Tecnológica (Universidad de Valencia-España), Master en Administración Mención Gerencia de Empresas (Universidad Metropolitana). Licenciada en Sociología (Universidad Central de Venezuela). Coordinadora de la Maestría en Administración (Mención Gerencia de Empresas) en la Universidad Metropolitana. Profesora e investigadora en el área de emprendimiento. Profesora en la Maestría de Gestión y Política Cultural de la UCV.', '', 0, '2017-03-29 02:49:23', '0000-00-00 00:00:00'),
(3, 'Liliana Vaudo', 'f', 'Derecho', 'Doctora en ciencias mención derecho UCV abogado, doctor en derecho UCV, Esp. en ciencias penales, en criminología, procesal, docencia policial. Docente de la universidad metropolitana. Jefe Departamento de Estudios Jurídicos de la Universidad Metropolitana.', '', 0, '2017-03-29 02:49:23', '0000-00-00 00:00:00'),
(4, 'Ma. Eugenia Perfetti', 'f', 'Letras', 'Licenciada en Letras de la Universidad Católica Andrés Bello (UCAB); Magister en Historia de Las Américas de la UCAB; cursante del Doctorado en Ciencias Sociales y Humanidades de la Universidad Simón Bolívar. - Profesora “Asociado” adscrita al Departamento de Humanidades de la Universidad Metropolitana (UNIMET).', '', 0, '2017-03-29 02:50:54', '0000-00-00 00:00:00'),
(5, 'Francisco Rodríguez', 'm', 'Gestión de la calidad – Productividad', 'Presidente del Fondo para la Investigación y Mejoramiento de la Productividad – FIM PRODUCTIVIDAD AC y Director General fundador del Instituto Internacional de Formación Empresarial –INFOEM AC. Tiene un Doctorado en Ingeniería de Proyectos en la Universidad Politécnica de Valencia, España, y más de 30 años de experiencia profesional como Ingeniero Industrial con énfasis en calidad, productividad e innovación.\r\nEs profesor del Postgrado de Ingeniería Industrial y Productividad de la Universidad Católica Andrés Bello.', '', 0, '2017-03-29 03:14:16', '0000-00-00 00:00:00'),
(6, 'Alejandro Sosa', 'm', 'Administración y Finanzas', 'Director de Administración y Finanzas del GRUPO PARQUE JUNKO. Fue Director de Administración y Finanzas del Grupo S&N Global Corp. Director de Presupuestos, Administración y Servicios en la Contraloría Municipal de Baruta.', '', 0, '2017-03-29 02:52:22', '0000-00-00 00:00:00'),
(7, 'Eduardo Jasso', 'm', 'Sistemas - Gestión de RRSS', 'Ciencias Computacionales, especialidad en Redes del ITESM (México). Licenciado en Ciencias de la Informática. Sub director de TI en la Corporación Interamericana de Entretenimiento (compuesta por 180n empresas). Gerente de tecnología de información con más de 18 años experiencia en centros de cómputo, infraestructura, redes y telefonía.', '', 0, '2017-03-29 03:13:56', '0000-00-00 00:00:00'),
(8, 'María Elena Del Valle', 'f', 'Educadora', 'Doctora Suman Cum Laude en Educación con posdoctorado en Semiótica y Pragmática de la Universidad Complutense de Madrid. Profesora a tiempo completo y profesor investigador de la Universidad Metropolitana. Posee amplia experiencia en el campo de la investigación. Pertenece a la Red Concilium de España. Sus áreas de acción están orientadas a la comunicación, análisis del discurso, Diseño Instruccional, Competencias, entre otras.', '', 0, '2017-03-29 02:53:16', '0000-00-00 00:00:00'),
(9, 'Tomás Padovani', 'm', 'Seguridad y Salud Laboral', 'Ingeniero en Producción de Sistemas, experto en el diseñar, implantar e implementar Sistemas de Gestión en Seguridad y Salud en el Trabajo, programas de seguridad y salud en el trabajo, auditorias, investigaciones de accidentes y enfermedades ocupacionales, adiestramientos, evaluaciones y recomendaciones técnicas en el ámbito de la Seguridad y Salud en el Trabajo, estableciendo mecanismos y controles enmarcado en la normativa legal vigente que aseguren su cumplimento por parte de la población laboral en las Organizaciones Empresariales.', '', 0, '2017-03-29 02:53:16', '0000-00-00 00:00:00'),
(10, 'Nancy Alfonzo', 'f', 'Farmacia – Coaching', 'Licenciado en Farmacia Universidad Central de Venezuela. Diplomado Gestión Estratégica de Capacitación de la Universidad Simón Bolívar, México. Diplomado en Desarrollo Gerencial UCAB. Coach Organizacional Certificado, GSP de Venezuela. Coordinador de Entrenamiento Sanofi de Venezuela.', '', 0, '2017-03-29 02:54:13', '0000-00-00 00:00:00'),
(11, 'Miguel Galindo', 'm', 'Normas ISO', 'Ingeniero Industrial con Maestría en Administración, Mención Gerencia de Empresas. Cuenta con amplia experiencia en las áreas de: dirección estratégica, organización y métodos, atención al cliente, gerencia de proyectos y la certificación de sistemas de gestión de la calidad ISO 9001. Ha participado en proyectos dirigidos a la implementación de estos sistemas en diferentes sectores económicos, tales como: ingeniería, consultoría gerencial, tecnología de información, gerencia delegada de procesos, plásticos y artes gráficas.', '', 0, '2017-03-29 02:54:13', '0000-00-00 00:00:00'),
(12, 'Klarimer Rojas', 'f', 'Abogado - Lic. Idiomas', 'Abogado. Instructora de Inglés de Negocios In-Company y Online, con certificación Business English  Brisbane,  Australia. \r\nProfesora de inglés como segunda lengua ESL (English as a Second Language) e  Inglés con fines específicos ESP (English for Specific Purposes). Preparadora para los exámenes TOEFL/IELTS/FCE/CAE.', '', 0, '2017-03-29 02:55:20', '0000-00-00 00:00:00'),
(13, 'Rosa Benítez', 'f', 'Nutricionista', 'Licenciada en Nutrición y Dietética de la Universidad Central de Venezuela. Diplomado en Psicología Positiva en la Universidad Metropolitana.\r\nHa sido nutricionista en diversas escuelas. Actualmente es líder del proyecto de promoción de la cocina venezolana y de proyecto Mi lonchera. Miembro de la Fundación Armando Scannone Tempone.', '', 0, '2017-03-29 02:55:20', '0000-00-00 00:00:00'),
(14, 'José de Jesús Blanca', 'm', 'Abogado', 'Especialista en Derecho Laboral y en Derecho Administrativo de la Universidad Central de Venezuela.\r\nAsesor del Consejo Nacional para la Defensa de los Derechos de los Afrodescendientes de Venezuela (CONADECAFRO) y del Consejo de Derecho de Niños, Niñas y Adolescentes del Municipio Libertador del Distrito Capital.  Ha sido asesor del Ministerio del Poder Popular para Relaciones Interiores, Justicia y Paz y del Instituto Metropolitano para la Promoción y Desarrollo del Poder Popular.', '', 0, '2017-03-29 02:56:16', '0000-00-00 00:00:00'),
(15, 'Jairo Troconis', 'm', 'Geólogo', 'Presidente de la Fundación Vida Saludable (FUNDAVISA) en donde se ha desarrollado como experto en el tema, específico, de la prevención en el consumo de drogas. Igualmente tiene amplia experiencia en la Gerencia de Programas Sociales y en el tema asociado a la Responsabilidad Social Empresarial. Docente. Instructor Free Lance.', '', 0, '2017-03-29 02:56:16', '0000-00-00 00:00:00'),
(16, 'Alberto Pastrano', 'm', 'Abogado', 'Abogado de la Universidad Metropolitana, encargado de la Coordinación General de la Unidad de Servicios Legales Integrados de la UNIMET.\r\nIgualmente, dirige el Centro de Derechos Humanos. El CDH UNIMET, investiga, acusa y hace seguimiento a todo tipo de violaciones de Derechos Humanos en la República Bolivariana de Venezuela. Realiza cursos de enseñanza y actualización de Derechos Humanos y realiza informes a todas las instancias pertinentes en el territorio nacional e internacional. Somos parte de la RED de defensa de Derechos Humanos en el país.', '', 0, '2017-03-29 02:57:05', '0000-00-00 00:00:00'),
(17, 'Miriana Bello', 'f', 'Psicología', 'Licenciada en Psicología, mención industrial  en la Universidad Central de Venezuela, Especialista en Recursos Humanos en la Universidad Metropolitana. Conferencista certificada por la Universidad Metropolitana, Red Internacional IDEAR y Stephan Kaiser, Locutora Certificada por la Universidad Central de Venezuela, actriz y presentadora de televisión.  \r\nDirectora General de la empresa consultora de Gestión de Talento Humano “PSICOLOGIA AL DIA” y es productora y locutora de los micros “Psicología al Día” para el circuito radial Kys FM.', '', 0, '2017-03-29 02:57:05', '0000-00-00 00:00:00'),
(18, 'Luis Vicente García', 'm', 'Coaching', 'Coach Gerencial de Rendimiento y Entrenador Corporativo de FocalPoint Coaching. Además es Conferencista internacional en temas gerenciales, de motivación y actitud, éxito y liderazgo.\r\nEs Co-autor de los siguientes libros best-sellers:\r\n- Dare to Succeed, con Jack Canfield\r\n- The Ultimate Success Guide, con Brian Tracy\r\n- Ready, Aim, Influence, con Carlos Slim y Marshall Goldsmith\r\n- Ready, Aim, Inspire!, con Joe Vitale\r\n\r\nAutor de los libros:\r\n- 101 Preguntas y respuestas sobre las Franquicias\r\n- Motivando al Futro Franquiciado\r\nY es Productor Ejecutivo del Documental"ARMONIA: Together changing Poverty into LIFE"', '', 0, '2017-03-29 02:57:37', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cursos`
--
ALTER TABLE `tbl_cursos`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tbl_equipoilernus`
--
ALTER TABLE `tbl_equipoilernus`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_instructores`
--
ALTER TABLE `tbl_instructores`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_cursos`
--
ALTER TABLE `tbl_cursos`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'indice de la tabla',AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `tbl_equipoilernus`
--
ALTER TABLE `tbl_equipoilernus`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id de la tabla',AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tbl_instructores`
--
ALTER TABLE `tbl_instructores`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
