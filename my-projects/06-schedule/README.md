# 📅 School Schedule - 4th ESO

Web page with a weekly class schedule for 4th year of ESO, designed with an HTML table styled with subject-specific colors.

---

## 🎯 Project Objective

Create a visually attractive and easy-to-read school schedule using an HTML table with differentiated colors by subject and a centered design with shadow.

---

## 📝 Project Content

### HTML Structure
- `<table class="horario">`: Main schedule table
- `<caption>`: Title "School Schedule - 4th ESO"
- `<thead>`: Header with days of the week
- `<tbody>`: Table body with:
  - Times in the first column (`<th scope="row">`)
  - Subjects by day and time
- CSS classes per subject for cell coloring

### CSS Styles (styles.css)
- **Table** (`.horario`):
  - Centered with `margin-left: auto; margin-right: auto`
  - Max width `50%`, responsive
  - Shadow (`box-shadow: 10px 10px 15px rgba(0,0,0,0.603)`)
- **Cells** (`th, td`):
  - Black borders (`border: 1px solid black`)
  - Internal padding of `6px`
- **Subject colors** (more than 10 different classes):
  | Class | Color | Subject |
  | :--- | :--- | :--- |
  | `.tecnologia` | 🔵 Aqua | Technology |
  | `.lengua` | 🩷 Pink | Language |
  | `.educacion-fisica` | ❤️ Red | Physical Education |
  | `.musica-economia` | 🩷 Light Pink | Music / Physics & Chemistry / Economics |
  | `.geografia` | 💙 Blue | Geography and History |
  | `.biologia-latin` | 💛 Yellow | Biology / Applied Sciences / Latin |
  | `.recreo` | 🧡 Melon | Recess |
  | `.filosofia` | 🟠 Orange | Philosophy |
  | `.ingles` | 💜 Purple | English |
  | `.tutoria` | 💚 Teal | Tutoring |
  | `.valores` | 💚 Green | Values |
  | `.matematicas` | 💚 Light Green | Mathematics |
- **Caption**: `serif` font, `2rem` size, `8%` padding

---

## 🛠️ Technologies Used

| Technology | Usage |
| :--- | :--- |
| **HTML5** | Semantic tables (`<table>`, `<thead>`, `<tbody>`, `<th>`, `<td>`, `<caption>`) |
| **CSS3** | Centering with `margin: auto`, `box-shadow`, custom colors, responsive design |

---

## 📂 Folder Structure

```
schedule/
│
├── index.html
└── css/
    └── styles.css
```

---

## 🎨 Key Features

| Feature | Description |
| :--- | :--- |
| **Centered design** | Table centered horizontally with `margin: auto` |
| **Subject colors** | Each subject has a different color for easy identification |
| **Outer shadow** | `box-shadow` on the table for depth effect |
| **Complete schedule** | 7 hours daily, from 9:00 to 14:25 |
| **Recess included** | Special row from 11:30 to 11:55 |

---

## 📅 Schedule Structure

| Time | Monday | Tuesday | Wednesday | Thursday | Friday |
| :--- | :--- | :--- | :--- | :--- | :--- |
| 9:00 - 9:50 | Physical Education | Technology | Language | Music/Physics/Economics | Language |
| 9:50 - 10:40 | Technology | Physical Education | Geography | Biology/Sciences/Latin | English |
| 10:40 - 11:30 | Mathematics | Mathematics | Tutoring | Mathematics | Mathematics |
| 11:30 - 11:55 | RECESS | RECESS | RECESS | RECESS | RECESS |
| 11:55 - 12:45 | Language | Music/Physics/Economics | Technology | Values | Music/Physics/Economics |
| 12:45 - 13:35 | English | Geography | English | English | Biology/Sciences/Latin |
| 13:35 - 14:25 | Geography | Philosophy | Biology/Sciences/Latin | Language | Philosophy |

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

May 2026
