SELECT REVERSE(REGEXP_REPLACE(`phone_number`, '^0', '')) AS `rebmunenohp` FROM `distrib`
WHERE `phone_number` LIKE '05%'