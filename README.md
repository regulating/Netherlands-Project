
# Green Future Website - Web Development Project for Leiden College

## Overview

This repository contains the source code for my "Green Future" website, a fictional non-profit organization promoting sustainability and eco-friendly initiatives. This project was developed as part of a web development assignment for Leiden College in the Netherlands.

The project showcases front end and back end web development skills, including responsive design, interactive features, user authentication, and database integration.

## Project Purpose

The purpose of this project is to create a website that serves as a central platform for environmental resources. Users can:
- Learn about Green Future’s mission.
- Calculate their carbon footprint.
- Register for sustainability events.
- Create and manage personal profiles.

The project demonstrates proficiency in web technologies such as HTML, CSS, JavaScript, PHP, and SQL.

## Features

### 1. Home Page
- **Description**: Introduces Green Future's mission and provides easy navigation to other sections of the site.
- **Files**: `index.html`, `CSS/index.css`

### 2. Carbon Footprint Calculator
- **Description**: An interactive tool where users input data like energy usage and transportation methods to calculate their carbon footprint. Results are dynamically updated using JavaScript.
- **Files**: `calculator.html`, `CSS/calculator.css`, `JS/script.js`

### 3. User Registration and Login
- **Description**: Users can create accounts, log in, and manage their profiles. PHP is used for authentication, and SQL is used to store user data.
- **Files**: 
  - Registration: `register.html`, `register.php`, `user_reg_success.html`
  - Login: `login.html`, `login.php`
  - Logout: `logout.php`
  - **CSS**: `CSS/styles.css`

### 4. Event Sign-Up
- **Description**: Allows users to view upcoming events and sign up. The form submission is handled by PHP.
- **Files**: `events.html`, `events.php`, `CSS/events.css`

### 5. User Dashboard
- **Description**: After logging in, users can access their dashboard, which provides an overview of their activities and registered events.
- **Files**: `dashboard.html`, `dashboard.php`, `CSS/styles.css`

### 6. Blog (Optional Feature)
- **Description**: Green Future can post sustainability-related articles, and users can read them. (Optional if time allows).
- **Files**: `blog.html`, `CSS/blog.css`

### 7. Responsive Design
- **Description**: The website is fully responsive, ensuring usability on different screen sizes (desktop, tablet, mobile).
- **Files**: `CSS/styles.css`

## File Structure

```bash
.
├── .vscode/                 # VS Code settings
├── assets/
│   └── icons/
│       └── favicon.ico       # Favicon for the site
├── CSS/
│   ├── blog.css              # Styles for the blog page
│   ├── calculator.css        # Styles for the carbon footprint calculator page
│   ├── events.css            # Styles for the events page
│   ├── index.css             # Styles for the home page
│   └── styles.css            # General/global styles for the entire site
├── HTML/
│   ├── blog.html             # Blog page
│   ├── calculator.html       # Carbon footprint calculator page
│   ├── dashboard.html        # User dashboard page
│   ├── events.html           # Events page
│   ├── login.html            # User login page
│   ├── register.html         # User registration page
│   └── user_reg_success.html # Success page after registration
├── JS/
│   └── script.js             # JavaScript for dynamic functionalities (carbon calculator)
├── PHP/
│   ├── config.php            # Configuration for database connection
│   ├── dashboard.php         # Back-end for user dashboard
│   ├── index.php             # PHP version of the homepage
│   ├── login.php             # Handles user login process
│   ├── logout.php            # Handles user logout
│   ├── phpinfo.php           # PHP info page (for debugging)
│   └── register.php          # Handles user registration process
├── .gitignore                # Specifies files to ignore in version control
├── index.html                # Main homepage for the website
└── LICENSE                   # Project license file
```

## Installation and Setup

1. **Clone the repository**:
   ```bash
   git clone https://github.com/regulating/Netherlands-Project
   ```

2. **Set up a local server**: 
   - Use a local development environment such as XAMPP or WAMP to run PHP files and manage the SQL database.

3. **Database Setup**:
   - Setup the relevant tables for Users.

4. **Run the project**:
   - Navigate to `index.html` or `index.php` in your browser using your local server.

## Technologies Used

- **HTML5**: For structuring the website.
- **CSS3**: For styling and making the website responsive.
- **JavaScript**: For interactive features like the carbon footprint calculator.
- **PHP**: For server-side functionality (user authentication, event registration).
- **MySQL**: For database management (storing user data and event sign-ups).
- **Git**: For version control.

## Contact

For any questions or feedback, please contact me at 1395479@cityplym.ac.uk or open an issue in this repository.