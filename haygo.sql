CREATE DATABASE haygo;

CREATE TABLE if NOT EXISTS haygo_admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_username VARCHAR(255) UNIQUE NOT NULL,
    admin_pwd VARCHAR(255) NOT NULL,
    adminProfile VARCHAR(255) NOT NULL
);

CREATE TABLE if NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    f_name VARCHAR(255) NOT NULL,
    l_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(20) NOT NULL,
    date_of_birth DATE NOT NULL
);

CREATE TABLE if NOT EXISTS vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    car_name VARCHAR(255) NOT NULL,
    car_model VARCHAR(255) NOT NULL,
    car_price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE if NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    customer_id INT NOT NULL,
    vehicle_id INT NOT NULL,
    booking_date DATE NOT NULL,
    return_date DATE NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customers(id),
    FOREIGN KEY (vehicle_id) REFERENCES vehicles(id)
);

CREATE TABLE if NOT EXISTS transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT NOT NULL,
    transaction_date DATE NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (booking_id) REFERENCES bookings(id)
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