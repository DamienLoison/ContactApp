# ContactApp

#Une application permettant de gérer des contacts, des organisations et des logins

##Framework :

CodeIgniter, est un framework PHP full-stack web.[site officiel](http://codeigniter.com)<br>
[User Guide](https://codeigniter4.github.io/userguide/)
[here](https://codeigniter4.github.io/CodeIgniter4/)
[API documentation](https://codeigniter4.github.io/api/)<br>

## Base de donnée nécessaire : 

CREATE TABLE IF NOT EXISTS `contact` (<br>
  `ID_Contact` int(11) NOT NULL AUTO_INCREMENT,<br>
  `Nom_Contact` varchar(50) NOT NULL DEFAULT '0',<br>
  `Prenom_Contact` varchar(50) NOT NULL DEFAULT '0',<br>
  `numeroTel_Contact` char(10) NOT NULL DEFAULT '0',<br>
  `mail_Contact` varchar(100) NOT NULL DEFAULT '0',<br>
  `ID_Organisation` int(11) DEFAULT NULL,<br>
  `Nom_Organisation_Contact` varchar(100) DEFAULT NULL,<br>
  PRIMARY KEY (`ID_Contact`) USING BTREE,<br>
  KEY `ID_organisation` (`ID_Organisation`) USING BTREE,<br>
  KEY `Nom_Organisation_Contact` (`Nom_Organisation_Contact`),<br>
  CONSTRAINT `ID_organisation_contact` FOREIGN KEY (`ID_Organisation`) REFERENCES `organisation` (`ID_Organisation`),<br>
  CONSTRAINT `Nom_Organisation_Contact` FOREIGN KEY (`Nom_Organisation_Contact`) REFERENCES `organisation` (`Nom_Organisation`)<br>
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='ID ,Nom, Prenom, Numero telephone, mail';<br>
-----------------------------------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `login` (<br>
  `ID_login` int(11) NOT NULL AUTO_INCREMENT,<br>
  `Utilisateur_login` varchar(50) NOT NULL,<br>
  `password` varchar(50) NOT NULL,<br>
  PRIMARY KEY (`ID_login`),<br>
  UNIQUE KEY `Utilisateur_login` (`Utilisateur_login`)<br>
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='ID_login, Utilisateur_login, password';<br>

-----------------------------------------------------------------------------------------------------------

 TABLE IF NOT EXISTS `organisation` (<br>
  `ID_Organisation` int(11) NOT NULL AUTO_INCREMENT,<br>
  `Nom_Organisation` varchar(100) NOT NULL COMMENT 'Longueur de 100 caracteres',<br>
  `Adresse_Organisation` varchar(100) NOT NULL COMMENT 'Longueur de 100 caracteres',<br>
  `Mail_Organisation` varchar(100) NOT NULL COMMENT 'Longueur de 100 caracteres',<br>
  `Site_Organisation` varchar(200) NOT NULL COMMENT 'Longeur de 200 caracteres pour le site internet',<br>
  `Telephone_Organisation` char(10) NOT NULL,<br>
  `Logo_Organisation` text NOT NULL COMMENT 'Logo de l''entreprise',<br>
  PRIMARY KEY (`ID_Organisation`),<br>
  KEY `Nom_Organisation` (`Nom_Organisation`)<br>
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='ID_Organisation, Nom_Organisation, Adresse_Organisation, mail_Organisation, Site_Organisation, telephone_Organisation, Logo_Organisation';<br>

-----------------------------------------------------------------------------------------------------------

##Requis pour fonctionner :

PHP version 7.3 ou supérieur, avec les extensions : 
- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) 
- [mbstring](http://php.net/manual/en/mbstring.installation.php)<br>

Extension nécessaire qui soit activé dans PHP :

- json (activé par défaut)
- xml (activé par défaut)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)