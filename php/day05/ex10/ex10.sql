SELECT `title` AS `Title`,
       `summary` AS `Summary`,
       `prod_year`
FROM `db_pcollio-`.film
INNER JOIN `db_pcollio-`.genre
    ON `db_pcollio-`.film.id_genre = `db_pcollio-`.genre.id_genre
WHERE `db_pcollio-`.genre.name = 'erotic'
ORDER BY  `prod_year` DESC;