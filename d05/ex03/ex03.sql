INSERT INTO `ft_table` (`login`, `group`, `creation_date`)
SELECT `last_name` AS `login`, 'other' AS `group`, `birthdate` AS `creation_date`
FROM `user_card`
WHERE `last_name` LIKE '%a%' and LENGTH(`last_name`) < 9
ORDER BY `last_name`
LIMIT 10;