# Student Registration System

## ITST 302 – Client-Server Technologies
### Week 4 Laboratory Activity – Mini Project 03

A Laravel-based Student Registration System developed for the Week 4 laboratory activity. The system allows students to submit their personal and academic information, validates the submitted data, uploads a profile picture, stores student records in MySQL, and displays the registered student profile.

---

## 1. Introduction

Student registration systems are commonly used by universities and other organizations to collect, manage, and store user information digitally. Instead of relying on paper-based registration, an online registration system allows information to be submitted and processed more efficiently.

This project demonstrates the development of a Student Registration System using Laravel. The application provides a responsive registration form where users can enter their student information, academic details, address, and profile picture.

Data validation is important because it prevents incomplete, incorrect, or invalid information from being stored in the database. Server-side validation provides an additional layer of protection because submitted information is checked by the Laravel application before it is saved.

Registration systems are also important in enterprise applications because organizations need reliable and structured data. Universities, companies, hospitals, banks, and government agencies use similar systems to collect and manage information.

---

## 2. Objectives

The objectives accomplished during this activity are:

- Develop a responsive registration form using Blade templates.
- Process client requests using Laravel controllers.
- Implement server-side validation.
- Apply required and unique validation rules.
- Validate email and numeric fields.
- Validate uploaded profile pictures.
- Store uploaded images using Laravel Storage.
- Store student information in a MySQL database.
- Display flash success messages.
- Display validation error messages.
- Display registered student information.
- Implement student record viewing and deletion.
- Understand the Laravel request lifecycle.
- Practice Git and GitHub version control.
- Document the development process using Markdown.

---

## 3. Technologies Used

- Laravel
- PHP
- MySQL / MariaDB
- Blade Templates
- Bootstrap
- HTML
- CSS
- JavaScript
- Git
- GitHub
- XAMPP

---

## 4. Laravel Request Lifecycle

The registration request follows the Laravel request lifecycle:

```text
User / Browser
      |
      v
Registration Form
      |
      v
Laravel Route
      |
      v
StudentController
      |
      v
Request Validation
      |
   +--+--+
   |     |
 Invalid  Valid
   |     |
   v     v
Display  Student Model
Errors      |
            v
        MySQL Database
            |
            v
     Profile Picture Storage
            |
            v
      Redirect / Response
            |
            v
     Student Profile Page
