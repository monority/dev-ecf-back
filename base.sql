CREATE DATABASE IF NOT EXISTS literie;

USE literie;

CREATE TABLE brands (
	id TINYINT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL
);

CREATE TABLE dimensions (
	id TINYINT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL
);

CREATE TABLE products (
	id SMALLINT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	image VARCHAR(255),
	price DECIMAL(6,2) NOT NULL,
	discount DECIMAL(6,2),
	id_dimension TINYINT,
	id_brand TINYINT,
	FOREIGN KEY (id_brand) REFERENCES brands(id),
	FOREIGN KEY (id_dimension) REFERENCES dimensions(id)
);

INSERT INTO brands 
(name) 
VALUES
("IKEA"),
("BEDCOVER"),
("OYERA"),
("PULRE"),
("FLAT5");

INSERT INTO dimensions
(name)
VALUES
("90x190"),
("140x190"),
("160x200"),
("180x200"),
("200x200");

INSERT INTO `products` (`id`, `name`, `image`, `price`, `discount`, `id_dimension`, `id_brand`)
VALUES
    (
        "Matelas Confort",
        "https://www.lematelas365.com/64-large_default/matelas-premium.jpg",
        709.99,
        200.99,
        1,
        1
    ),
    (

        "Matelas Confort",
        "https://www.lematelas365.com/71-large_default/matelas-boost.jpg",
        900.00,
        0.00,
        2,
        1

    ),
    (

        "Matelas Premium",
        "https://media.lacompagniedulit.com/4296/matelas-la-compagnie-du-lit-confort-paisible.jpg?t=1689694591&width=2000&func=cover",
        999.99,
        100.00,
        1,
        3
    ),
    (

        "Matelas Robuste",
        "https://www.ikea.com/fr/fr/images/products/vesteroey-matelas-a-ressorts-ensaches-mi-ferme-bleu-clair__1150852_pe884907_s5.jpg?f=xl",
        699.99,
        50.00,
        2,
        4
    ),
    (

        "Matelas Doux",
        "https://www.allomatelas.com/USER/img/produits/HD/6341.jpg",
       1288.99,
        0.00,
        2,
        1
    ),
    (

        "Matelas Naturel",
        "https://www.matelas-pas-cher.fr/9-large_default/matelas-epeda-ness-140x190.jpg",
        999.99,
        0.00,
        1,
        3
    ),
    (

        "Matelas Solide",
        "https://www.ikea.com/ch/fr/images/products/mausund-matelas-latex-naturel-mi-ferme-naturel__0559075_pe665217_s5.jpg?f=s",
     588.99,
        200.00,
        1,
        2
    );
