SELECT `last_name`, `first_name`, DATE(`birthdate`) AS `birthdate` FROM `user_card`
WHERE YEAR(`birthdate`) = '1998'
ORDER BY `last_name`;