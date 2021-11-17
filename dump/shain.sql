
CREATE DATABASE IF NOT EXISTS shain;
USE shain;
SET NAMES 'utf8mb4';

CREATE TABLE IF NOT EXISTS usuaris (
    id int(4) NOT NULL AUTO_INCREMENT,
    nom varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(80) NOT NULL,
    poblacio varchar(50) NOT NULL,
    adreca varchar(50) NOT NULL,
    codi_postal varchar(5) not null,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS comandes (
    id int(4) NOT NULL AUTO_INCREMENT,
    preu_total float(20,2) NOT NULL,
    data DATE NOT NULL,
    n_producte int(10) NOT NULL,
    id_usuari int(4) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY fk_comandes_usuario (id_usuari) REFERENCES usuaris (id)
);

CREATE TABLE IF NOT EXISTS categories (
    id int(4) NOT NULL AUTO_INCREMENT,
    nom varchar(50) NOT NULL,
    url_image varchar(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS productes (
    id int(4) NOT NULL AUTO_INCREMENT,
    nom varchar(50) NOT NULL,
    preu float(20,2) NOT NULL,
    url_image varchar(100) NOT NULL,
    talla VARCHAR (50) NOT NULL,
    color VARCHAR (50) NOT NULL,
    descripcio varchar(500) NOT NULL,
    id_categoria int(4) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY fk_productes_categories(id_categoria) REFERENCES categories(id)

);

CREATE TABLE IF NOT EXISTS linies_comandes (
    id int(4) NOT NULL AUTO_INCREMENT,
    preu_total_linia float(20,2) NOT NULL,
    quantitat int(10) NOT NULL,
    comanda_id int(4) NOT NULL,
    producte_id int(4) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY fk_linies_comandes_comanda (comanda_id) REFERENCES comandes (id),
    CONSTRAINT FOREIGN KEY fk_linies_comandes_producte (producte_id) REFERENCES productes (id)
);


INSERT INTO usuaris (`nom`, `email`, `password`, `poblacio`, `adreca`, `codi_postal`)
    VALUES
    ('admin', 'admin@admin.com', '$2a$12$a9IYraTIDvJ1FOc3GVdFIe1sjEWsVSXXTYkjfpVWtCWakpgIh1dZ2', 'Barcelona', 'Carrer admin', '08300');

INSERT INTO categories (`nom`, `url_image`)
    VALUES
    ('Sudaderas', '/view/resource/img/categories/sudadera.jpg'),
    ('Pantalones', '/view/resource/img/categories/pantalones.jpg'),
    ('Abrigos', '/view/resource/img/categories/abrigos.jpg'),
    ('Camisetas', '/view/resource/img/categories/camisetas.jpg'),
    ('Camisas', '/view/resource/img/categories/camisas.jpg'),
    ('Zapatos', '/view/resource/img/categories/zapatos.jpg');


INSERT INTO productes(`nom`, `preu`, `url_image`, `descripcio`, `talla`, `color`, `id_categoria`)
    VALUES
        ('Sudadera algodón mensaje', 19.99, '/view/resource/img/products/sudaderaBasica.png', '100% Algodón. Mensaje bordado. Diseño recto. Cuello redondo. Manga larga.', 'S/M/L/XL', 'blanco', 1),
        ('Sudadera capcuha', 15.99, '/view/resource/img/products/sudaderaCapucha.png', 'Tejido mezcla de poliéster reciclado. Diseño oversize. Diseño recto. Cuello redondo. Capucha con cordón ajustable. Manga larga con puños elásticos. Costura del hombro caída. Bolsillo de parche en la parte delantera.', 'S/M/L', 'negro', 1),
        ('Sudadera algodón rayas', 18.99, '/view/resource/img/products/sudaderaRayas.png', '100% Algodón. Estampado de rayas. Diseño recto. Cuello redondo. Manga larga. Detalles bordados. Cierre de botones en el hombro.', 'S/M/L', 'negro', 1),
        ('Sudadera capucha cremallera', 21.99, '/view/resource/img/products/sudaderaCremallera.png', ' Tejido ligero. Diseño recto. Cuello alto con cierre de cremallera. Cierre de cremallera y botón a presión. Manga larga. Capucha ajustable. Bolsillo de parche en la parte delantera.', 'S/M/L', 'Gris claro', 1),
        ('Sudadera oversize algodón', 20.99, '/view/resource/img/products/sudaderaOversize.png', '100% Algodón. Diseño oversize. Cuello redondo. Manga larga.', 'S/M/L', 'azul', 1),
        ('Sudadera algodón estampado', 20.99, '/view/resource/img/products/sudaderaEstampado.png', '100% Algodón. Tejido ligero. Diseño estándar. Mensaje estampado en la parte delantera. Cuello redondo. Manga larga.', 'S/M/L', 'rosa', 1),
        ('Pantalón punto recto', 28.99, '/view/resource/img/products/pantalonPunto.png', 'Tejido de punto fino. Diseño recto. Diseño largo. Tiro alto. Cintura elástica.', 'XS/S/M/L/XL', 'marrón', 2),
        ('Pantalón jogger cordón', 16.99, '/view/resource/img/products/pantalonJogger.png', 'Tejido ligero. Diseño jogger. Tiro alto. Dos bolsillos laterales. Cintura elástica con cordón.', 'XS/S/M', 'verde', 2),
        ('Pantalón pana cintura elástica', 29.99, '/view/resource/img/products/pantalonPana.png', 'Tejido con algodón. Tejido de pana. Bajo semiacampanado. Diseño largo. Tiro medio. Cintura elástica.', 'XS/S/M/L/XL', 'beige', 2),
        ('Pantalón skinny crop', 20.99, '/view/resource/img/products/pantalonSkinny.png', 'Tejido ligero. Diseño estampado. Corte skinny. Tiro alto. Diseño tobillero. Dos bolsillos laterales. Trabillas. Cierre de cremallera y botón.', 'XS/S/M/L/XL', 'gris', 2),
        ('Pantalón algodón acampanado', 24.99, '/view/resource/img/products/pantalonAlgodon.png', 'Tejido con algodón. Diseño largo. Diseño acampanado. Trabillas. Cinco bolsillos. Cierre de cremallera y botón. Forro interior.', 'S/M/L/XL', 'beige', 2),
        ('Pantalón traje aberturas', 20.99, '/view/resource/img/products/pantalonTraje.png', 'Tejido mezcla de lana. Estilo flare. Tiro alto. Trabillas. Dos bolsillos laterales. Aberturas en el bajo. Cierre de cremallera y gancho. Total look.', 'XS/S/M/L/XL', 'crudo', 2),
        ('Abrigo lana botones ', 28.99, '/view/resource/img/products/AbrigoLana.png', 'Tejido mezcla de lana. Diseño recto. Diseño medio. Cuello pico con solapa. Solapas con muesca. Manga larga. Dos bolsillos de solapa en la parte frontal. Forro interior. Cierre de botones en la parte delantera.', 'S/M/L/XL', 'café', 3),
        ('Abrigo pelo maxi solapas ', 38.99, '/view/resource/img/products/abrigoPelo.png', 'Diseño oversize. Diseño largo. Cuello de solapa. Manga larga. Dos bolsillos laterales. Cierre de botón. Forro interior.', 'S/M/L', 'marrón', 3),
        ('Chaqueta piel doble faz ', 48.99, '/view/resource/img/products/chaquetaPiel.png', '100% Piel. Interior de borreguito. Diseño recto. Diseño oversize. Cuello de solapa. Manga larga. Dos bolsillos delanteros. Cierre de botones en la parte delantera.', 'S/M/L/XL', 'marrón', 3),
        ('Abrigo oversize cuadros ', 38.99, '/view/resource/img/products/abrigoOversize.png', 'Diseño de cuadros. Diseño oversize. Cuello de solapa. Manga larga. Cierre de botones en la parte delantera. Forro interior.', 'S/M/L', 'marrón', 3),
        ('Abrigo jaspeado lana ', 28.99, '/view/resource/img/products/abrigoJaspeado.png', 'Tejido de punto jaspeado. Tejido con lana. Diseño recto. Diseño largo. Cuello pico con solapa. Manga larga. Dos bolsillos de solapa. Cierre de botones. Abertura posterior. Forro interior.', 'S/M/L/XL', 'negro', 3),
        ('Abrigo lana solapas ', 39.99, '/view/resource/img/products/abrigoMorado.png', 'Tejido mezcla de lana. Solo forro. Solapas. Diseño cruzado. Diseño largo. Estructura pesada. Diseño recto. Cuello pico con solapa. Solapa peak. Manga larga. Slim fit. Bolsillos de solapa. Abertura posterior en el bajo. Forro interior. Cierre de botones en la parte delantera. Cierre delantero.', 'S/M/L/XL', 'morado', 3),
        ('Top tirantes elástico ', 9.99, '/view/resource/img/products/topTirantes.png', 'Cuello redondo. Sin mangas. Tejido ligero. Diseño estándar. Diseño recto.', 'S/M/L/XL', 'negro', 4),
        ('Top canalé cuello perkins ', 12.99, '/view/resource/img/products/topCanale.png', 'Tejido de punto de canalé. Tejido de punto fino. Diseño recto. Diseño entallado. Cuello perkins. Sin mangas. Terminaciones pespunteadas.', 'S/M/L/XL', 'azul', 4),
        ('Camiseta canalé fruncido ', 9.99, '/view/resource/img/products/camisetaCanale.png', 'Tejido con algodón. Tejido de canalé. Tejido elástico. Cuello pico. Manga corta. Detalle fruncido en el escote. Terminaciones pespunteadas.', 'S/M/L/XL', 'blanco', 4),
        ('Camiseta básica algodón ', 7.99, '/view/resource/img/products/camisetaBasica.png', 'Tejido con algodón. Diseño recto. Cuello redondo. Manga corta.', 'S/M/L/XL', 'blanco', 4),
        ('Camiseta algodón rayas ', 9.99, '/view/resource/img/products/camisetaAlgodon.png', ' 100% Algodón. Diseño de rayas. Diseño recto. Cuello redondo. Diseño largo. Manga corta.', 'S/M/L/XL', 'marrón', 4),
        ('Camiseta 100% lino ', 9.99, '/view/resource/img/products/camisetaLino.png', ' 100% Lino. Diseño recto. Lavado medio. Cuello de solapa. Manga larga con puños abotonados. Bolsillos de solapa con botón. Cierre de dos botones en la parte delantera.', 'S/M/L/XL', 'azul', 4),
        ('Camisa fluida satinada ', 19.99, '/view/resource/img/products/camisaSatinada.png', 'Tejido satinado. Tejido fluido. Diseño recto. Cuello camisero. Cuello pico. Manga larga con puños abotonados.', 'S/M/L', 'negro', 5),
        ('Blusa 100% algodón ', 14.99, '/view/resource/img/products/blusaAlgodon.png', '100% Algodón. Disponible en liso o estampado floral. Diseño recto. Cuello mao. Manga larga. Cierre de botones en la parte delantera.', 'S/M/L', 'blanco', 5),
        ('Camisa denim bolsillos ', 24.99, '/view/resource/img/products/camisaDenim.png', '100% Algodón. Tejido denim. Diseño recto. Cuello clásico. Manga larga abotonada. Dos bolsillos de solapa con botón en la parte delantera. Cierre de botones a presión en la parte delantera.', 'S/M', 'azul', 5),
        ('Blusa cuello babydoll ', 19.99, '/view/resource/img/products/camisaCuello.png', ' 100% Algodón. Diseño recto. Cuello babydoll. Bordado suizo en el cuello. Manga larga abullonada. Puños abotonados. Cierre de botones en el cuello.', 'S/M/L', 'blanco', 5),
        ('Sobrecamisa oversize bolsillos ', 28.99, '/view/resource/img/products/sobrecamisaOversize.png', '100% Algodón. Diseño oversize. Cuello camisero. Manga larga abotonada. Dos bolsillos laterales. Bolsillo de parche. Cierre de botones en la parte delantera. Con relleno. Forro interior.', 'M/L/XL', 'azul', 5),
        ('Blusa lazo cuello ', 19.99, '/view/resource/img/products/camisaLazo.png', 'Tejido fluido. Disponible en liso o estampado. Diseño recto. Escote de pico. Manga larga. Volantes en los puños. Cierre de lazo en el cuello.', 'M/L/XL', 'negro', 5),
        ('Bota piel cordones', 29.99, '/view/resource/img/products/botaCordones.png', 'Piel. Caña media. Punta redonda. Cierre de cordones. Plantilla extraible. Forro interior.', '37/38/39/40/41', 'marrón', 6),
        ('Zapato piel suela track', 39.99, '/view/resource/img/products/zapatoPiel.png', '100% Piel. Punta redonda. Tacón bloque. Cierre de cordones. Forro interior. La plataforma mide 5,5 cm.', '37/38/39/40/41', 'negro', 6),
        ('Botín piel serraje', 24.99, '/view/resource/img/products/botinPiel.png', '100% piel de serraje. Caña media. Punta cuadrada. Tacón bloque. Paneles laterales elásticos.', '37/38/39/40/41', 'marrón', 6),
        ('Deportivas piel cordones', 25.99, '/view/resource/img/products/deportivasPiel.png', 'Piel. Diseño combinado. Punta redonda. Plantilla extraible. Cierre de cordones. Forro interior.', '37/38/39/40/41', 'gris', 6),
        ('Deportivas piel tinte mineral', 29.99, '/view/resource/img/products/deportivas.png', 'Los tintes naturales que contiene esta prenda provienen de pigmentos orgánicos que se extraen de plantas y minerales. Corte de piel . Corte algodón orgánico. Estilo abotinado. Punta redonda. Suela track. Cierre de cordones.', '37/38/39/40/41', 'crudo', 6),
        ('Deportivas básicas cordones', 29.99, '/view/resource/img/products/deportivasCordones.png', 'Punta redonda. Cierre de cordones. Plantilla extraible. Forro interior.', '37/38/39/40/41', 'crudo', 6);
