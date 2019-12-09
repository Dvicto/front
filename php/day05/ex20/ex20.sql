SELECT `db_dvictor`.film.id_genre,
       `db_dvictor`.genre.name AS `name_genre`,
       `db_dvictor`.film.id_distrib,
       `db_dvictor`.distrib.name AS `name_distrib`,
       `title` AS `title_film`
FROM `db_dvictor`.film
LEFT JOIN `db_dvictor`.genre
    ON `db_dvictor`.genre.id_genre = `db_dvictor`.film.id_genre
LEFT JOIN `db_dvictor`.distrib
    ON `db_dvictor`.distrib.id_distrib = `db_dvictor`.film.id_distrib
WHERE `db_dvictor`.film.id_genre
    BETWEEN 4
        AND 8;