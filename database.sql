CREATE SCHEMA `tbmotors_db`;

CREATE TABLE tbmotors_db.admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username varchar(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role varchar(25) NOT NULL default 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

SELECT * FROM tbMotors_db.admin;
