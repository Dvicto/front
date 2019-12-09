SELECT `title` AS `Title`,
       `summary` AS `Summary`,
       `prod_year`
FROM `db_dvictor`.film
INNER JOIN `db_dvictor`.genre
    ON `db_dvictor`.film.id_genre = `db_dvictor`.genre.id_genre
WHERE `db_dvictor`.genre.name = 'erotic'
ORDER BY  `prod_year` DESC;