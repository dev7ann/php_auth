CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20)  NOT NULL,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    age INT,
    id_no VARCHAR(20),
    gender VARCHAR(20)
);

ALTER TABLE users
ADD COLUMN middle_name VARCHAR(20);



