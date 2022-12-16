-- Active: 1668524884613@@127.0.0.1@3306@playtech

SELECT * FROM category ;

SELECT * FROM product ;
SELECT * FROM product where prod_lib LIKE '%%';

SELECT * FROM `user` ;

-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

DELETE FROM product WHERE id_prod =100009 ;

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
        "Logitech D Pro HERO",
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

INSERT INTO `user`(email,pswd) VALUES ("test2@test.t","1234");

INSERT INTO
    `user`(email, pswd, user_role)
VALUES (
        "admin_2@test.t",
        "1234",
        "admin"
    );

ALTER TABLE
    `user` MODIFY COLUMN pswd varchar(255) NOT NULL ;

ALTER TABLE
    `user` ADD COLUMN f_name varchar(40) NOT NULL after usr_id;

ALTER TABLE `product` ADD COLUMN `prod_img` TEXT NOT NULL AFTER qtty;

UPDATE `product` set prod_img='test.jpg';

DROP PROCEDURE `getCurrId`;
CREATE PROCEDURE getCurrId()
BEGIN
SELECT `AUTO_INCREMENT` as curr_id FROM INFORMATION_SCHEMA.TABLES WHERE `TABLE_SCHEMA` = DATABASE() AND `TABLE_NAME` = 'product';
END;

call getCurrId();
select * from product where id_prod = 100006;


UPDATE product SET prod_img ="test2.jpg",prod_lib ="test2.jpg" WHERE id_prod =12;

select * from user where email = "admin@test.t" and pswd = "1234";