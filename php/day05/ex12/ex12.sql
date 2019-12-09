SELECT `last_name`,
       `first_name`
FROM `db_pcollio-`.user_card
WHERE `db_pcollio-`.user_card.last_name LIKE '%-%'
      OR `db_pcollio-`.user_card.first_name LIKE '%-%'
ORDER BY  `db_pcollio-`.user_card.last_name ASC, `db_pcollio-`.user_card.first_name ASC;