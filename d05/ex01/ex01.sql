CREATE TABLE ft_table (
    id INT(11) UNSIGNED NOT NUll AUTO_INCREMENT PRIMARY KEY,
    login varchar(11) NOT NUll DEFAULT 'toto',
    `group` ENUM('staff', 'student', 'other')  NOT NULL,
    creation_date DATE NOT NULL
    )