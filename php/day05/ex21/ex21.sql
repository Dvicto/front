SELECT MD5(REPLACE(CONCAT(`phone_number`, 42), 7, 9)) AS `ft5`
FROM `db_pcollio-`.distrib
WHERE `id_distrib` = 84;