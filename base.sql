CREATE DATABASE IF NOT EXISTS literie;




USE literie;


CREATE TABLE matelas(
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    marque VARCHAR(20) NOT NULL,
    image VARCHAR(255),
    type VARCHAR(50),
    largeur SMALLINT,
    longueur SMALLINT,
    prix SMALLINT
);


create TABLE promos(
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    promo SMALLINT NOT NULL
);

CREATE TABLE matelas_promos(
    matelas_id TINYINT,
    promos_id TINYINT,
    FOREIGN KEY(matelas_id) REFERENCES matelas(id),
    FOREIGN KEY(promos_id) REFERENCES promos(id),
    PRIMARY KEY(matelas_id,promos_id)
);


INSERT INTO matelas(
    marque,
    type,
    image,
    largeur,
    longueur,
    prix
)
VALUES
(
    "365",
    "Premium",
    "https://www.lematelas365.com/64-large_default/matelas-premium.jpg",
    90,
    190,
    960
),
(
    "365",
    "Boost",
    "https://www.lematelas365.com/71-large_default/matelas-boost.jpg",
    120,
    170,
    1450
),
(
    "La compagnie",
    "Confort",
    "https://media.lacompagniedulit.com/4296/matelas-la-compagnie-du-lit-confort-paisible.jpg?t=1689694591&width=2000&func=cover",
    140,
    190,
    2189
),
(
    "Ikea",
    "Ensaches",
    "https://www.ikea.com/fr/fr/images/products/vesteroey-matelas-a-ressorts-ensaches-mi-ferme-bleu-clair__1150852_pe884907_s5.jpg?f=xl",
    140,
    190,
    1500
)