//CreateTable

CREATE TABLE `users2`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `roman` VARCHAR(100) NOT NULL,
    `prenom` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `ville` VARCHAR(100) DEFAULT NULL,
    `age` INT(3) DEFAULT NULL,
    `commentaire` TEXT(1000) DEFAULT NULL,
    `verified` TINYINT(1) NOT NULL DEFAULT '0',
    `token` VARCHAR(255) DEFAULT NULL,
    `date` DATE DEFAULT NULL,
    PRIMARY KEY(`id`)
)

////////////////////////////

//countVilles

SELECT
    ville,
    COUNT(ville) AS VILLE
FROM
    users2
GROUP BY
    ville

////////////////////////////

//countAge
SELECT
    age,
    COUNT(age) AS AGE
FROM
    users2
GROUP BY
    age
    
////////////////////////////

//selectDate

SELECT
    date,
FROM
    users2
WHERE
    verified = 1;