SELECT `floor_number` AS `floor`,
       sum(nb_seats) AS `seats`
FROM `db_dvictor`.cinema
GROUP BY `floor`
ORDER BY  `seats` DESC;
