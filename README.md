# SoundSculpt

A web-based music player application with user authentication, session protection, and a collection of top Kollywood songs. Built using PHP, MySQL, HTML, CSS, and JavaScript.

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


## About The Project

**SoundSculpt** is a semester project that allows users to sign up, log in, and enjoy a curated list of Kollywood hit songs. The app features secure user authentication, session-based access control, and a visually appealing, responsive interface.



## Features

- User Signup and Login (with password hashing)
- Session protection for main content (`index.php`)
- Logout functionality
- Song selection and playback
- Responsive design with attractive backgrounds
- Download option for songs
- Progressive Web App (PWA) support
- Clean and organized code structure


## Built With

- ![HTML5][html]
- ![CSS3][css]
- ![JavaScript][javascript]
- PHP
- MySQL


## Setup & Installation

1. **Clone or Download the Repository**

git clone https://github.com/Durairaj005/Kollywood-Music-Website.git
  

2. **Move the Project to XAMPP's `htdocs` Directory**

   C:\xampp\htdocs\music2\SoundSculpt-master
   

3. **Start XAMPP**
   - Start Apache and MySQL from the XAMPP Control Panel.

4. **Create the Database**
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a database named `soundsculpt`
   - Import the `users.sql` file or run:
     sql
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL UNIQUE,
         email VARCHAR(100) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL
     );
     

5. **Configure Database Connection**
   - Check `db.php` for correct MySQL credentials (default: `root` with no password).

6. **Access the Application**
   - Open [http://localhost/music2/SoundSculpt-master/signup.php](http://localhost/music2/SoundSculpt-master/signup.php) to register a new user.
   - Log in at [http://localhost/music2/SoundSculpt-master/login.php](http://localhost/music2/SoundSculpt-master/login.php)
   - After login, you will be redirected to the protected main page.

## Usage

- **Sign Up:** Create a new account with username, email, and password.
- **Log In:** Enter your username and password to access the main page.
- **Play Songs:** Select and play your favorite Kollywood hits.
- **Logout:** Click the logout button in the navbar to end your session.

## Screenshots

LOGIN PAGE
![Screenshot 2025-05-19 175116](https://github.com/user-attachments/assets/dc47a59d-937e-4566-bc5c-0d930645fff1)

SIGNUP PAGE
![Screenshot 2025-05-19 175226](https://github.com/user-attachments/assets/0e03c980-2752-4236-89cc-bfc9c3e5e5d7)

HOME PAGE
![Screenshot 2025-05-20 113654](https://github.com/user-attachments/assets/3009ca5e-32ee-4341-be65-5fa58f3b0cc5)

SONGS LIST LAYOUT
![Screenshot 2025-05-19 172618](https://github.com/user-attachments/assets/a33c2bc6-7809-4d77-9767-0b32640cf62b)

PLAY SONGS LAYOUT 
![Screenshot 2025-05-19 175600](https://github.com/user-attachments/assets/68fb6e28-030c-4b70-9617-e27c52c71c05)

ABOUT SONGS LAYOUT
![Screenshot 2025-05-19 175810](https://github.com/user-attachments/assets/9235eb3e-731b-481f-aabc-3a3a61b6f845)

CONNECT WITH SOCIAL MEDIA LAYOUT
![Screenshot 2025-05-20 113716](https://github.com/user-attachments/assets/c779be82-38be-4c9e-b86a-1ad8061ae798)

> 


## Contributing

Contributions are welcome! Please fork the repository and submit a pull request.

## Contact

- **Your Name**
- Email: duraipathmasri007@gmail.com
- [LinkedIn](https://www.linkedin.com/in/durai-rajan-846a39291/)
- [GitHub](https://github.com/Durairaj005)


## License

This project is for educational purposes.

<!-- MARKDOWN LINKS & IMAGES -->
[html]: https://img.shields.io/badge/html-e34c26?style=for-the-badge&logo=html5&logoColor=white
[css]: https://img.shields.io/badge/css-264de4?style=for-the-badge&logo=css3&logoColor=white
[javascript]: https://img.shields.io/badge/js-f7df1e?style=for-the-badge&logo=javascript&logoColor=black
