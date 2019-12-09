SELECT upper(`last_name`) AS `NAME`,
       `first_name`,
       `db_pcollio-`.subscription.price
FROM `db_pcollio-`.user_card
INNER JOIN `db_pcollio-`.member
    ON `db_pcollio-`.member.id_user_card = `db_pcollio-`.user_card.id_user
INNER JOIN `db_pcollio-`.subscription
    ON `db_pcollio-`.subscription.id_sub = `db_pcollio-`.member.id_sub
WHERE `db_pcollio-`.subscription.price > 42
ORDER BY  `db_pcollio-`.user_card.last_name ASC, `db_pcollio-`.user_card.first_name ASC;