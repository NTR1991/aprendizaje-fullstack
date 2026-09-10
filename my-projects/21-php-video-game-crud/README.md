# 🎮 PHP Video Game CRUD

## 📋 Description

A full CRUD application built with PHP and MySQL to manage a video game catalog. It allows users to add, view, edit, and delete video games, with a clean and user-friendly interface. It also includes a REST API for programmatic access.

---

## 🎯 Project Objective

Build a complete CRUD (Create, Read, Update, Delete) application using PHP and MySQL, following best practices such as PDO for database connection and prepared statements to prevent SQL injection.

---

## ✨ Features

| Feature | Description |
| :--- | :--- |
| **List games** | Displays all games in a table (READ) |
| **Add game** | Form to create a new game (CREATE) |
| **Edit game** | Form to update an existing game (UPDATE) |
| **Delete game** | Deletes a game with confirmation (DELETE) |
| **REST API** | Provides JSON endpoints for integration (GET, POST, PUT, DELETE) |
| **Input validation** | Validates required fields and year range |
| **Success/error messages** | Feedback to the user after each operation |

---

## 🛠️ Technologies Used

- **PHP** – Backend logic
- **MySQL** – Database
- **PDO** – Secure database connection
- **HTML5** – Structure
- **CSS3** – Styling
- **Git** – Version control
- **GitHub** – Repository hosting

---

## 📂 Folder Structure

````
21-php-video-game-crud/
├── api/
│   └── juegos.php          # REST API (GET, POST, PUT, DELETE)
├── css/
│   └── style.css           # Styles (dark background, colored buttons)
├── conexion.php            # Database connection (PDO)
├── index.php               # Game list (READ)
├── crear.php               # Create form (CREATE)
├── editar.php              # Edit form (UPDATE)
├── eliminar.php            # Delete logic (DELETE)
├── videojuegos.sql         # Database export (structure + data)
└── README.md
````

---

## 🗄️ Database Setup

Import the `videojuegos.sql` file using phpMyAdmin or the command line:

```bash
mysql -u root -p < videojuegos.sql
```

Or copy the SQL script manually:

```sql
CREATE DATABASE IF NOT EXISTS videojuegos
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE videojuegos;

CREATE TABLE IF NOT EXISTS juegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    desarrollador VARCHAR(100) NOT NULL,
    plataforma VARCHAR(50) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    anio INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO juegos (titulo, desarrollador, plataforma, genero, anio) VALUES
('Red Dead Redemption 2', 'Rockstar Game', 'PS5', 'Acción', 2025),
('Furia de Titanes', 'Santa Monica Studio', 'PS4', 'Aventura', 2006),
('The Legend of Zelda', 'Nintendo', 'Nintendo Switch', 'Aventura', 2017),
('Minecraft', 'Mojang', 'PC', 'Sandbox', 2011),
('God of War Ragnarok', 'Santa Monica Studio', 'PS5', 'Acción', 2022),
('Red Dead Redemption 2', 'Rockstar Games', 'PS4', 'Aventura', 2018),
('The Witcher 3', 'CD Projekt Red', 'PC', 'RPG', 2015),
('Elden Ring', 'FromSoftware', 'PS5', 'RPG', 2022),
('Cyberpunk 2077', 'CD Projekt Red', 'PC', 'RPG', 2020),
('Super Mario Odyssey', 'Nintendo', 'Nintendo Switch', 'Plataformas', 2017),
('The Last of Us Part II', 'Naughty Dog', 'PS4', 'Aventura', 2020),
('Horizon Forbidden West', 'Guerrilla Games', 'PS5', 'Acción', 2022);
```

---

## 🚀 How to Run

1. Clone the repository or download the files.
2. Place the project folder in your local server (e.g., `htdocs` for XAMPP).
3. Start Apache and MySQL in XAMPP.
4. Import the `videojuegos.sql` file using phpMyAdmin.
5. Open `index.php` in your browser.

---

## 🔌 REST API Endpoints

| Method | Endpoint | Description | Response |
| :--- | :--- | :--- | :--- |
| GET | `/api/juegos.php` | Get all games | 200 + JSON array |
| GET | `/api/juegos.php?id=1` | Get a single game | 200 + JSON object |
| POST | `/api/juegos.php` | Create a new game | 201 + JSON object |
| PUT | `/api/juegos.php?id=1` | Update a game | 200 + JSON object |
| DELETE | `/api/juegos.php?id=1` | Delete a game | 204 No Content |

### Example: Create a game (POST)

```json
{
    "titulo": "The Legend of Zelda",
    "desarrollador": "Nintendo",
    "plataforma": "Nintendo Switch",
    "genero": "Aventura",
    "anio": 2023
}
```

---

## 📚 Concepts Learned

- CRUD operations with PHP and MySQL
- PDO connection and prepared statements
- Input validation and sanitization
- REST API basics (GET, POST, PUT, DELETE)
- HTTP status codes (200, 201, 204, 400, 404, 405)
- JSON encoding and decoding
- Separation of concerns (files for each action)

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

September 2026
