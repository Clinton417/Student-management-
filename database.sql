CREATE DATABASE IF NOT EXISTS student_management;
USE student_management;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO students (name, email, phone, address) VALUES
('Emily Carter', 'emily.carter@example.com', '555-0101', '101 Maple Street'),
('Michael Brooks', 'michael.brooks@example.com', '555-0123', '202 Oak Avenue'),
('Sofia Martinez', 'sofia.martinez@example.com', '555-0187', '33 Elm Drive'),
('Daniel Kim', 'daniel.kim@example.com', '555-0254', '78 Pine Lane'),
('Aisha Patel', 'aisha.patel@example.com', '555-0329', '56 Cedar Court');
