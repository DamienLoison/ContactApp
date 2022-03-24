# ContactApp

**Une application permettant de gérer des contacts, des organisations et des logins**

## Framework :

CodeIgniter, est un framework PHP full-stack web.[site officiel](http://codeigniter.com)<br>
[User Guide](https://codeigniter4.github.io/userguide/) |
[here](https://codeigniter4.github.io/CodeIgniter4/) |
[API documentation](https://codeigniter4.github.io/api/)<br>

## Base de donnée nécessaire : 

-----------------------------------------------------------------------------------------------------------

```sql
CREATE TABLE IF NOT EXISTS `contact` (
  `ID_Contact` bigint(20) NOT NULL AUTO_INCREMENT,
  `Nom_Contact` varchar(50) NOT NULL DEFAULT '0',
  `Prenom_Contact` varchar(50) NOT NULL DEFAULT '0',
  `numeroTel_Contact` char(10) NOT NULL DEFAULT '0',
  `mail_Contact` varchar(100) NOT NULL DEFAULT '0',
  `ID_Organisation` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Contact`) USING BTREE,
  KEY `ID_organisation` (`ID_Organisation`) USING BTREE,
  CONSTRAINT `ID_organisation_contact` FOREIGN KEY (`ID_Organisation`) REFERENCES `organisation` (`ID_Organisation`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='ID ,Nom, Prenom, Numero telephone, mail';
```

-----------------------------------------------------------------------------------------------------------

```sql
CREATE TABLE IF NOT EXISTS `login` (
  `ID_Login` int(11) NOT NULL AUTO_INCREMENT,
  `Utilisateur_Login` varchar(50) NOT NULL,
  `Password_Login` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Login`) USING BTREE,
  UNIQUE KEY `Utilisateur_login` (`Utilisateur_Login`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='ID_login, Utilisateur_login, password';
```

-----------------------------------------------------------------------------------------------------------

```sql
CREATE TABLE IF NOT EXISTS `organisation` (
  `ID_Organisation` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Organisation` varchar(100) NOT NULL COMMENT 'Longueur de 100 caracteres',
  `Adresse_Organisation` varchar(100) NOT NULL COMMENT 'Longueur de 100 caracteres',
  `Ville_Organisation` varchar(50) NOT NULL,
  `Mail_Organisation` varchar(100) NOT NULL COMMENT 'Longueur de 100 caracteres',
  `Site_Organisation` varchar(200) NOT NULL COMMENT 'Longeur de 200 caracteres pour le site internet',
  `Telephone_Organisation` char(10) NOT NULL,
  `Logo_Organisation` text NOT NULL COMMENT 'Logo de l''entreprise',
  PRIMARY KEY (`ID_Organisation`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='ID_Organisation, Nom_Organisation, Adresse_Organisation, mail_Organisation, Site_Organisation, telephone_Organisation, Logo_Organisation';
```

-----------------------------------------------------------------------------------------------------------

```sql
CREATE TABLE users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(100),
    user_email VARCHAR(100),
    user_password VARCHAR(200),
    user_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;
```

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