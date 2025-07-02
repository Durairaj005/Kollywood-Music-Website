# SoundSculpt

A web-based music player application with user authentication, session protection, and a collection of top Kollywood songs. Built using PHP, MySQL, HTML, CSS, and JavaScript.

---

## Table of Contents

- [About The Project](#about-the-project)
- [Features](#features)
- [Built With](#built-with)
- [Setup & Installation](#setup--installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [Contact](#contact)
- [License](#license)

---

## About The Project

**SoundSculpt** is a semester project that allows users to sign up, log in, and enjoy a curated list of Kollywood hit songs. The app features secure user authentication, session-based access control, and a visually appealing, responsive interface.

---

## Features

- User Signup and Login (with password hashing)
- Session protection for main content (`index.php`)
- Logout functionality
- Song selection and playback
- Responsive design with attractive backgrounds
- Download option for songs
- Progressive Web App (PWA) support
- Clean and organized code structure

---

## Built With

- ![HTML5][html]
- ![CSS3][css]
- ![JavaScript][javascript]
- PHP
- MySQL

---

## Setup & Installation

1. **Clone or Download the Repository**
   ```
   git clone https://github.com/yourusername/SoundSculpt.git
   ```

2. **Move the Project to XAMPP's `htdocs` Directory**
   ```
   C:\xampp\htdocs\music2\SoundSculpt-master
   ```

3. **Start XAMPP**
   - Start Apache and MySQL from the XAMPP Control Panel.

4. **Create the Database**
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a database named `soundsculpt`
   - Import the `users.sql` file or run:
     ```sql
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL UNIQUE,
         email VARCHAR(100) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL
     );
     ```

5. **Configure Database Connection**
   - Check `db.php` for correct MySQL credentials (default: `root` with no password).

6. **Access the Application**
   - Open [http://localhost/music2/SoundSculpt-master/signup.php](http://localhost/music2/SoundSculpt-master/signup.php) to register a new user.
   - Log in at [http://localhost/music2/SoundSculpt-master/login.php](http://localhost/music2/SoundSculpt-master/login.php)
   - After login, you will be redirected to the protected main page.

---

## Usage

- **Sign Up:** Create a new account with username, email, and password.
- **Log In:** Enter your username and password to access the main page.
- **Play Songs:** Select and play your favorite Kollywood hits.
- **Logout:** Click the logout button in the navbar to end your session.

---

## Screenshots

> *(Add screenshots of your signup, login, and main music page here for better presentation)*

---

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request.

---

## Contact

- **Your Name**
- Email: your.email@example.com
- [LinkedIn](https://www.linkedin.com/)
- [GitHub](https://github.com/yourusername)

---

## License

This project is for educational purposes.

---

<!-- MARKDOWN LINKS & IMAGES -->
[html]: https://img.shields.io/badge/html-e34c26?style=for-the-badge&logo=html5&logoColor=white
[css]: https://img.shields.io/badge/css-264de4?style=for-the-badge&logo=css3&logoColor=white
[javascript]: https://img.shields.io/badge/js-f7df1e?style=for-the-badge&logo=javascript&logoColor=black