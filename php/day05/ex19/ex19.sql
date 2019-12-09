SELECT datediff(max(`date`), min(`date`)) AS `uptime`
FROM `db_pcollio-`.member_history;