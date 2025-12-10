DROP DATABASE IF EXISTS gp_surgery;
CREATE DATABASE gp_surgery;
USE gp_surgery;

CREATE TABLE patient (
    id INT AUTO_INCREMENT,
    Firstname VARCHAR(30),
    Surname VARCHAR(30),
    DateOfBirth DATETIME,
    HealthPlan VARCHAR(30),
    PRIMARY KEY (id)
);

CREATE TABLE doctor (
    id INT AUTO_INCREMENT,
    Firstname VARCHAR(30),
    Surname VARCHAR(30),
    Specialism VARCHAR(30),
    HoursPerWeek INT,
    PRIMARY KEY (id)
);

CREATE TABLE visit (
    id INT AUTO_INCREMENT,
    visit_date DATE,
    visit_time TIME,
    doctor_id INT,
    patient_id INT,
    cost DECIMAL(18,3),
    overtime BIT,
    PRIMARY KEY (id),
    FOREIGN KEY (doctor_id) REFERENCES doctor(id),
    FOREIGN KEY (patient_id) REFERENCES patient(id)
);

INSERT INTO patient (Firstname, Surname, DateOfBirth, HealthPlan)
VALUES 
('John', 'Smith', '1972-10-30', 'Basic'),
('Matt', 'Jones', '1960-02-20', 'Comprehensive'),
('Mary', 'O''Neill', '1975-09-25', 'Basic'),
('Peter', 'O''Shea', '1980-07-31', 'Comprehensive'),
('Jane', 'Ryan', '1975-02-12', 'Comprehensive');

INSERT INTO doctor (Firstname, Surname, Specialism, HoursPerWeek)
VALUES
('Fred', 'Jones', 'Cardiology', 40),
('Patrick', 'Smith', 'Neurology', 50),
('Mary', 'McFadden', 'Endocrinology', 37),
('Claire', 'Long', 'Neurology', 50),
('Joan', 'McDonnell', 'Cardiology', 40);

INSERT INTO visit (visit_date, visit_time, doctor_id, patient_id, cost)
VALUES
('2004-02-20', '15:00', 3, 1, 40),
('2004-02-20', '16:00', 3, 2, 60),
('2004-02-21', '10:00', 5, 4, 40),
('2004-02-21', '11:00', 5, 3, 45),
('2004-02-25', '11:00', 2, 5, 100),
('2004-02-26', '14:00', 5, 1, 35),
('2004-03-01', '14:00', 1, 2, 50);
