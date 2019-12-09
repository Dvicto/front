SELECT upper(`last_name`) AS `NAME`,
       `first_name`,
       `db_dvictor`.subscription.price
FROM `db_dvictor`.user_card
INNER JOIN `db_dvictor`.member
    ON `db_dvictor`.member.id_user_card = `db_dvictor`.user_card.id_user
INNER JOIN `db_dvictor`.subscription
    ON `db_dvictor`.subscription.id_sub = `db_dvictor`.member.id_sub
WHERE `db_dvictor`.subscription.price > 42
ORDER BY  `db_dvictor`.user_card.last_name ASC, `db_dvictor`.user_card.first_name ASC;