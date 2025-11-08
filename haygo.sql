CREATE DATABASE haygo;

CREATE TABLE if NOT EXISTS haygo_admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_username VARCHAR(255) UNIQUE NOT NULL,
    admin_pwd VARCHAR(255) NOT NULL,
    admin_profile VARCHAR(255) NOT NULL
);

CREATE TABLE if NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(20) NOT NULL, 
    date_of_birth DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    car_name VARCHAR(255) NOT NULL,
    car_type VARCHAR(255) NOT NULL,
    car_description VARCHAR(255) NOT NULL,
    seats INT NOT NULL,
    bags INT NOT NULL,
    transmission VARCHAR(50) NOT NULL,
    car_price DECIMAL(10,2) NOT NULL,
    car_image VARCHAR(250) NOT NULL,
    status ENUM('available', 'unavailable') NOT NULL DEFAULT 'available'
);


CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_num VARCHAR(20) NOT NULL,
    lic_id VARCHAR(255),
    vehicle_id INT NOT NULL,
    booking_date DATE NOT NULL,
    return_date DATE NOT NULL,
    total_price DECIMAL(10,2) NOT NULL,
    status ENUM('pending', 'confirmed', 'completed', 'cancelled') NOT NULL DEFAULT 'pending',
    FOREIGN KEY (vehicle_id) REFERENCES vehicles(id)
);

CREATE TABLE IF NOT EXISTS blog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    blog_title VARCHAR(255) NOT NULL,
    blog_category VARCHAR(255) NOT NULL,
    content_snipp VARCHAR(255) NOT NULL,
    blog_image VARCHAR(255) NOT NULL.
    craeted_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    author_name VARCHAR(255) NOT NULL
);


-- Sample query to retrieve booking details along with customer and vehicle information
SELECT
    b.id AS booking_id,
    c.f_name,
    c.l_name,
    b.booking_date,
    b.return_date,
    v.car_name,
    v.car_model
FROM
    bookings b
INNER JOIN
    customers c ON b.customer_id = c.id
INNER JOIN
    vehicles v ON b.vehicle_id = v.id;