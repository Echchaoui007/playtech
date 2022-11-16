-- Active: 1668524025414@@127.0.0.1@3306@playtech

SELECT * FROM category ;

SELECT * FROM product ;
SELECT * FROM product where prod_lib LIKE '%%';

SELECT * FROM `user` ;

-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

DELETE FROM product ;

-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

SELECT
    prod_lib,
    qtty,
    price,
    cat_lib
FROM product
    JOIN category ON category.id_cat = product.id_cat;

INSERT INTO
    product(prod_lib, price, qtty, id_cat)
VALUES (
        "Logitech G Pro HERO",
        1300,
        15,
        100003
    ), (
        "Keyboard MSI Pro",
        1700,
        15,
        100003
    ), (
        "PlayStation 5 Pro",
        5999.99,
        15,
        100003
    ), (
        "Xbox Series X ",
        4999.99,
        15,
        100003
    );

INSERT INTO
    product(prod_lib, price, qtty, id_cat)
VALUES (
        "Logitech G Pro HERO",
        1300,
        15,
        100003
    );

INSERT INTO product(prod_lib) VALUES ("default");

CREATE Table
    user(
        usr_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        email VARCHAR(50) UNIQUE NOT NULL,
        user_role VARCHAR(40) DEFAULT 'client' NOT NULL,
        pswd VARCHAR(60) NOT NULL
    );

ALTER Table user AUTO_INCREMENT=100000;

INSERT INTO `user`(email,pswd) VALUES ("test@test.t","1234");

INSERT INTO
    `user`(email, pswd, user_role)
VALUES (
        "admin@test.t",
        "1234",
        "admin"
    );

ALTER TABLE
    `user` MODIFY COLUMN pswd varchar(255) NOT NULL ;

ALTER TABLE
    `user` ADD COLUMN f_name varchar(40) NOT NULL after usr_id;

ALTER TABLE `product` ADD COLUMN `prod_img` TEXT NOT NULL AFTER qtty;

UPDATE `product` set prod_img='test.jpg'




