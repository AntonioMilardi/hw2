create DATABASE thetruth;
use thetruth;

CREATE TABLE users
( Nome VARCHAR(256) NOT NULL ,
 Cognome VARCHAR(256) NOT NULL , 
 Username VARCHAR(256) primary KEY , 
 Password VARCHAR(256) NOT NULL,
 updated_at DATE,
 created_at DATE
 ) ENGINE = InnoDB;

CREATE TABLE favorites
( user VARCHAR(256) NOT NULL ,
 autore VARCHAR(256) NOT NULL ,
  titolo VARCHAR(256) NOT NULL ,
   immagine BLOB NOT NULL,
   updated_at DATE,
   created_at DATE
   index idx_user(user),
   FOREIGN KEY (user) REFERENCES users(Username) 
   ) ENGINE = InnoDB;

