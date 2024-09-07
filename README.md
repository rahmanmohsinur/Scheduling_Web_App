# Task Management Web App
This project is a Task Management Web Application built using PHP and MySQL. It allows users to create, manage, and track the status of their tasks. 
It includes a to-do list with features like task completion, task removal, and task addition. 
The project is designed to be responsive and works seamlessly across various modern devices and browsers.

## Steps
### 1. Clone the repository
bash

```
git clone https://github.com/rahmanmohsinur/Scheduling_Web_App.git
cd task-management-web-app
```

### 2. Create the MySQL Database
Run the following script on your MySQL database **Query editor**

```
# Add New Database "eubd"          
DROP DATABASE IF EXISTS yoga;
CREATE DATABASE IF NOT EXISTS yoga;
USE yoga;

# Add table "Customers" 
DROP TABLE IF EXISTS Customers;
CREATE TABLE IF NOT EXISTS tasks (
  taskID int(11) PRIMARY KEY AUTO_INCREMENT,
  taskDesc varchar(255) NOT NULL,
  completed tinyint(1) DEFAULT 0
);

# Add info into "tasks" 
INSERT INTO tasks (taskID, taskDesc, completed) VALUES
(1, 'Take the bins out', 0),
(2, 'Mow the lawn', 1),
(3, 'Walk the dog', 0);
```

### 3. Configure the Application

Edit the **config/config.php** file to match your database connection settings:

```
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');   # your MySQL DB username, by default 'root'
define('DB_PASSWORD', '');       # your MySQL DB password, by default ''
define('DB_NAME', 'yoga');       
```

Database Structure: The tasks table contains:
* taskID: Primary key (Auto Increment)
* taskDesc: Description of the task
* completed: Status of the task (0 for incomplete, 1 for complete)

### 4. Set up the Server
*   Place the project files in the server root directory (C:\wamp64\www\ for Wamp Server C:\inetpub\wwwroot\ for IIS or /var/www/html for Apache).
*   Start your server and navigate to the project URL (e.g., http://localhost).


## Usage
### Task Management
1. Homepage: The homepage displays a list of tasks from the database.
2. Task Actions: Users can add a task, mark it as complete/incomplete, or remove it from the list.
### Dynamic Meta Tags
*   Meta tags such as title, description, and keywords are dynamically set for each page through a custom implementation in the header.php file.

## File Structure
```
/your-project-root (C:\wamp64\www\)
│
├── assets/
│   ├── css/
│   │   └── styles.css
│   ├── js/
│   │   └── scripts.js
├── config/
│   └── config.php          # Configuration settings
├── includes/
│   ├── footer.php          # Common footer for all pages
│   ├── functions.php       # Common footer for all pages
│   ├── header.php          # Common header for all pages
│   ├── header_function.php # Common footer for all pages
│   ├── navbar.php          # Common footer for all pages
├── templates/
│   ├── 404.php             # Homepage template
│   ├── home.php            # Homepage template
│   ├── about.php           # About page template
│   ├── contact.php         # Contact page template
│   └── todo.php            # Booking page template
├── process/
│   ├── process_todo.php    # Contact form handler
└── .htaccess               # Main entry point
└── index.php               # Main entry point
```

## Contribution
### Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (```git checkout -b feature-branch```).
3. Make your changes and commit them (```git commit -m 'Add some feature'```).
4. Push to the branch (```git push origin feature-branch```).
5. Open a pull request.

## Features
*   Add Task: Users can add tasks to the to-do list.
*   Mark Task as Complete: Tasks can be marked as complete or incomplete by toggling their status.
*   Delete Task: Tasks can be removed from the list.
*   Responsive Design: The web app is fully responsive and works on both desktop and mobile devices.
*   Mobile Navigation: The navigation bar adapts to mobile screens with a collapsible menu.
*   Database Integration: All tasks are stored in a MySQL database.
  
## Technologies Used
*   Frontend: HTML5, CSS3, Bootstrap 4, JavaScript
*   Backend: PHP
*   Database: MySQL
*   Server: Apache or IIS (on Windows)
*   Version Control: Git and GitHub
  
## Installation
### Prerequisites
*   PHP >= 7.0
*   MySQL >= 5.7
*   Apache or IIS Server
*   Composer (optional)
