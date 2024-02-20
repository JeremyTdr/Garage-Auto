CREATE DATABASE IF NOT EXISTS garage_auto DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;

USE garage_auto;

CREATE TABLE IF NOT EXISTS employees
(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_admin INT NOT NULL
) engine=INNODB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS rates
(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    comment TEXT NOT NULL,
    score INT NOT NULL,
    id_employee INT,
    FOREIGN KEY (id_employee) REFERENCES employees(id)
) engine=INNODB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS offers
(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(255),
    price INT NOT NULL,
    year INT NOT NULL,
    kms INT NOT NULL,
    description TEXT,
    options TEXT,
    img VARCHAR(255),
    id_employee INT,
    FOREIGN KEY (id_employee) REFERENCES employees(id)
) engine=INNODB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS schedules
(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    day VARCHAR(20) NOT NULL,
    open_am VARCHAR(20) NOT NULL,
    close_am VARCHAR(20) NOT NULL,
    open_pm VARCHAR(20) NOT NULL,
    close_pm VARCHAR(20) NOT NULL
) engine=INNODB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS services
(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
) engine=INNODB DEFAULT CHARSET=utf8;


INSERT INTO employees (username, email, password, is_admin) VALUES
    ('admin', 'admin@garage-parrot.fr', '$2y$10$RyXz6zsLvkzCEFHqNZFF9Oxw4Xo5K3knCt7QWKK9/mf4zjpS6K4P6', '1'),
    ('user1', 'user1@garage-parrot.fr', 'bc7SEkHDX7dC2', '0');


INSERT INTO services (title, description) VALUES
    ('Carosserie', "Un impact sur votre carrosserie ? Nos carrosiers sauront réajuster comme neuf l'habillage de vote véhicule"),
    ('Mécanique', "Si des voyant moteurs inhabituels vous inquiêtes, n'ayez craintes, nos mécaniciens sauront réparer n'importe quel organe de votre véhicule"),
    ('Entretien', "Venez effectuer l'entretien de votre véhicule dans nos ateliers");

INSERT INTO offers (title, price, year, kms, description, options, img, id_employee) VALUES
    ('Ford Focu 4 RS', '22000', '2020', '60000', '2.0 Litres EcoBoost | 180ch 7CV | Gamme RS', 'Boite : manuelle, Couleur : gris métallisé, Portes : 5, Sellerie : tissu, Phares : Led Auto, CarPlay/Apple Car : inclus', 'src/assets/uploads/ford1.jpg', '2'),
    ('BMW M4', '42000', '2020', '96000', 'Serie 4 | 230ch | DKG7', 'Boite : auto, Couleur : bleu métallisé, Portes : 5, Sellerie : cuir sport, Phares : Led Auto, Jantes : alu 20 pouces', 'src/assets/uploads/bmw1.jpg', '2'),
    ('Range Rover Evoque', '36000', '2019', '45000', '2.0 Litres | 180ch 7CV | R-Dynamic', 'Couleur : blanc perle, Portes : 5, Sellerie : alcantara, Phares : Led Auto, CarPlay/Apple Car : inclus', 'src/assets/uploads/range_rover1.jpg', '2');

INSERT INTO schedules (day, open_am, close_am, open_pm, close_pm) VALUES
    ('Lundi','10h','12h30','14h','18h'),
    ('Mardi','10h','12h30','14h','18h'),
    ('Mercredi','10h','12h30','14h','18h'),
    ('Jeudi','10h','12h30','14h','18h'),
    ('Vendredi','10h','12h30','14h','18h'),
    ('Samedi','10h','12h30','Fermé','Fermé'),
    ('Dimanche','Fermé','Fermé','Fermé','Fermé');
