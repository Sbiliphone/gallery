CREATE TABLE `app_user`
(
    `id`       INT          NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `isAdmin`  BOOLEAN,
    `email` VARCHAR(255),
    `name` VARCHAR(255),
    `lastname` VARCHAR(255),

    UNIQUE KEY `id` (`id`) USING BTREE,
    UNIQUE KEY `username` (`username`) USING BTREE
);