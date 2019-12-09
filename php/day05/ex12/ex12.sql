SELECT `last_name`,
       `first_name`
FROM `db_dvictor`.user_card
WHERE `db_dvictor`.user_card.last_name LIKE '%-%'
      OR `db_dvictor`.user_card.first_name LIKE '%-%'
ORDER BY  `db_dvictor`.user_card.last_name ASC, `db_dvictor`.user_card.first_name ASC;