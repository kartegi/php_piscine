SELECT COUNT(*) FROM `member_history`
WHERE DATE(`date`) BETWEEN '2006-10-30'
AND '2007-07-27'
OR DATE_FORMAT(`date`, '%m-%d') = '12-24'