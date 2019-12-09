SELECT datediff(max(`date`), min(`date`)) AS `uptime`
FROM `db_dvictor`.member_history;