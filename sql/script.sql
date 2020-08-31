CREATE DATABASE mailer;

CREATE TABLE users(
    idUser INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nameUser VARCHAR(35) NOT NULL,
    emailUser VARCHAR(50) NOT NULL,
    passwordUser VARCHAR(35) NOT NULL
);

CREATE TABLE recipients(
    idRecipient INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nameRecipient VARCHAR(35) NOT NULL,
    emailRecipient VARCHAR(50) NOT NULL,
    tagRecipient VARCHAR(25) NOT NULL
);

CREATE TABLE templates(
    idTemplate INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nameTemplate VARCHAR(35) NOT NULL,
    pathTemplate VARCHAR(100) NOTNULL,
    typeTemplate VARCHAR(5)NOTNULL
);