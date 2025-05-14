CREATE DATABASE booking;

USE booking;

CREATE TABLE tbl_booking (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    contact_number VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    event_title TEXT NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    alt_date DATE,
    alt_time TIME,
    add_service TEXT,
    add_info LONGTEXT,
    custom LONGTEXT,
    files MEDIUMBLOB
);

CREATE TABLE tbl_events {
    id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    event_title TEXT NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
}