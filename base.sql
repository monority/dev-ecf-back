CREATE DATABASE IF NOT EXISTS literie;

USE literie;

CREATE TABLE matelas(
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    marque VARCHAR(20) NOT NULL,
    image VARCHAR(255),
    picture VARCHAR(255),
    type VARCHAR(50),
    largeur SMALLINT,
    longueur SMALLINT,
    prix SMALLINT
);

create TABLE promos(
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    newprice SMALLINT NOT NULL
);

CREATE TABLE matelas_promos(
    matelas_id TINYINT,
    promos_id TINYINT,
    FOREIGN KEY(matelas_id) REFERENCES matelas(id),
    FOREIGN KEY(promos_id) REFERENCES promos(id),
    PRIMARY KEY(matelas_id, promos_id)
);

INSERT INTO
    matelas(
        marque,
        type,
        image,
        largeur,
        longueur,
        prix
    )
VALUES
    (
        "EPEDA",
        "Matelas Pas touché",
        "https://www.lematelas365.com/64-large_default/matelas-premium.jpg",
        90,
        190,
        759
    ),
    (
        "DREAMWAY",
        "Matelas Lapin",
        "https://www.lematelas365.com/71-large_default/matelas-boost.jpg",
        90,
        190,
        809
    ),
    (
        "BULTEX",
        "Matelas Alejandrinho",
        "https://media.lacompagniedulit.com/4296/matelas-la-compagnie-du-lit-confort-paisible.jpg?t=1689694591&width=2000&func=cover",
        140,
        190,
        759
    ),
    (
        "EPEDA",
        "Matelas Papy",
        "https://www.ikea.com/fr/fr/images/products/vesteroey-matelas-a-ressorts-ensaches-mi-ferme-bleu-clair__1150852_pe884907_s5.jpg?f=xl",
        140,
        190,
        1019
    ),
    (
        "Ikea",
        "Matelas doux",
        "https://www.allomatelas.com/USER/img/produits/HD/6341.jpg",
        140,
        190,
        1015
    ),
    (
        "NESS",
        "Matelas confort",
        "https://www.matelas-pas-cher.fr/9-large_default/matelas-epeda-ness-140x190.jpg",
        120,
        180,
        950
    );
INSERT INTO
    promos(newprice)
VALUES
    (896),
    (1433);
INSERT INTO
    matelas_promos(matelas_id, promos_id)
VALUES
    (1, 1),
    (4, 2)