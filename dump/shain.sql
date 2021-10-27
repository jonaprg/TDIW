
DROP TABLE shain;
CREATE DATABASE IF NOT EXISTS shain;
USE shain;

CREATE TABLE IF NOT EXISTS usuaris (
    id int(4) NOT NULL AUTO INCREMENT,
    nom varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(20) NOT NULL,
    poblacio varchar(50) NOT NULL,
    adreça varchar(50) NOT NULL,
    codi_postal varchar(5) not null,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS comandes (
    id int(4) NOT NULL AUTO INCREMENT,
    preu_total float(20,2) NOT NULL,
    data DATE NOT NULL,
    n_producte int(10) NOT NULL,
    id_usuari int(4) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY fk_comandes_usuario (id_usuari) REFERENCES usuaris (id)
);

CREATE TABLE IF NOT EXISTS categories (
    id int(4) NOT NULL AUTO INCREMENT,
    nom varchar(20) NOT NULL,
    url_image varchar(10) NOT NULL,
    PRIMARY KEY (id),
);

CREATE TABLE IF NOT EXISTS productes (
    id int(4) NOT NULL AUTO INCREMENT,
    nom varchar(20) NOT NULL,
    preu float(20,2) NOT NULL,
    url_image varchar(10) NOT NULL,
    descripcio varchar(100) NOT NULL,
    id_categoria int(4) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY fk_productes_categories(id_categoria) REFERENCES categories(id)

);

CREATE TABLE IF NOT EXISTS linies_comandes (
    id int(4) NOT NULL AUTO INCREMENT,
    preu_total_linia float(20,2) NOT NULL,
    quantitat int(10) NOT NULL,
    comanda_id int(4) NOT NULL,
    producte_id int(4) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY fk_linies_comandes_comanda (comanda_id) REFERENCES comandes (id),
    CONSTRAINT FOREIGN KEY fk_linies_comandes_producte (producte_id) REFERENCES productes (id)
);


INSERT INTO usuaris (`nom`, `email`, `password`, `poblacio`, `adreça`, `codi_postal`)
    VALUES
    ('admin', 'admin@admin.com', 'admin', 'Barcelona', 'Carrer admin', '08300');

INSERT INTO categories (`nom`, `url_image`)
    VALUES
    ('Sudaderas', '/src/img/categories/sudadera.png'),
    ('Pantalones', '/src/img/categories/pantalones.png'),
    ('Abrigos', '/src/img/categories/abrigos.png'),
    ('Camisetas', '/src/img/categories/camisetas.png'),
    ('Camisas', '/src/img/categories/camisas.png'),
    ('Zapatos', '/src/img/categories/zapatos.png');
