--
-- Creación de la estructura de base de datos
--
-- Last update : 15/09/2017 (Sayghteight)
-- 



--
-- MODULO LENGUAJE
-- Versión : 0.0.2
--

CREATE TABLE IF NOT EXISTS `translate_panel` (
  `record_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trans_section` varchar(20) CHARACTER SET latin1 NOT NULL,
  `trans_lang` set('sp','en','fr') NOT NULL DEFAULT 'sp',
  `trans_text` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=49 ;


--
-- MODULO TEAMSPEAK 3
-- Versión : 0.0.1
--


CREATE TABLE IF NOT EXISTS `teamspeak_cola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `estado` set('Aprobado','Denegado','En revisión','Sin stock') NOT NULL DEFAULT 'En revisión',
  `revisado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `users_ts3` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL DEFAULT 'ts3.divisionzero.ml',
  `port` varchar(155) NOT NULL,
  `slots` varchar(155) DEFAULT '32',
  `key` varchar(255) NOT NULL,
  `sid` int(155) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;



--
-- MODULO DASHBOARD
-- Versión : 0.0.4 (Recent update)
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `rango` int(2) NOT NULL,
  `fechaderegistro` date NOT NULL,
  `ultimoacceso` date NOT NULL,
  `activo` int(2) NOT NULL,
  `ts3activated` set('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

CREATE TABLE IF NOT EXISTS `configuration`(
  
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_maintenance` set('true','false') NOT NULL DEFAULT 'false',
  `ts3_register` set('true','false') NOT NULL DEFAULT 'false',
  `lang` set('es', 'en') NOT NULL DEFAULT 'es',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `modules_install`(
  
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `enabled` set('true','false') NOT NULL DEFAULT 'true',
  `author` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `themes` (
  `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  `name` VARCHAR(255) NOT NULL, 
  `description` TEXT NOT NULL, 
  `author` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
  
INSERT INTO themes ('name', 'description', 'author') VALUES ('default', 'Theme default CPTS3', 'sayghteight');


