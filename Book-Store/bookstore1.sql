-- user table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    address TEXT,
    phone VARCHAR(20),
    email VARCHAR(100),
    level ENUM('admin', 'user') DEFAULT 'user'
);

-- orders table
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    total_price DECIMAL(10, 2),
    status VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- order_details table
CREATE TABLE order_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    price DECIMAL(10, 2),
    FOREIGN KEY (order_id) REFERENCES orders(id)
);

-- products table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(100),
    price DECIMAL(10, 2),
    stock INT,
    image VARCHAR(255)
);

-- user example added
INSERT INTO users (fullname, username, password, address, phone, email, level)
VALUES ('Jordy', 'jordy', SHA2('12345678', 256), 'Unknown Address', '0000000000', 'jordy@gmail.com', 'user');
-- using SHA2 for more secure password hashing