SELECT `db_pcollio-`.film.id_genre,
       `db_pcollio-`.genre.name AS `name_genre`,
       `db_pcollio-`.film.id_distrib,
       `db_pcollio-`.distrib.name AS `name_distrib`,
       `title` AS `title_film`
FROM `db_pcollio-`.film
LEFT JOIN `db_pcollio-`.genre
    ON `db_pcollio-`.genre.id_genre = `db_pcollio-`.film.id_genre
LEFT JOIN `db_pcollio-`.distrib
    ON `db_pcollio-`.distrib.id_distrib = `db_pcollio-`.film.id_distrib
WHERE `db_pcollio-`.film.id_genre
    BETWEEN 4
        AND 8;