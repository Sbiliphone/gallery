CREATE TABLE `immagine`
(
    `id`       INT          NOT NULL AUTO_INCREMENT,
    `src` VARCHAR(255) NOT NULL,
    `titolo` VARCHAR(255) NOT NULL,
    `utente` VARCHAR(255) NOT NULL,
    UNIQUE KEY `id` (`id`) USING BTREE,
);