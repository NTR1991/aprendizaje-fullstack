# 🍽️ Lomo Saltado Recipe Page

Personal project: a recipe webpage for the traditional Peruvian dish **Lomo Saltado**.

---

## 🎯 Project Objective

Create a clean, centered recipe webpage displaying an image of the dish, ingredient list, and preparation instructions.

---

## 📝 Project Content

### HTML Structure
- `<header>`: Main title "HOME-COOKED RECIPES"
- `<section>`: Dish image (`lomo.jpg`)
- `<article class="recipe-card">`: Recipe container card
  - `<section>`: Title "Lomo Saltado"
  - `<section class="section-ingredients">`: Ingredient list
  - `<section class="section-instructions">`: Ordered instruction list

### CSS Styles (styles.css)
- **General background**: Light gray (`rgb(214, 214, 214)`)
- **Recipe card** (`.recipe-card`):
  - White background, centered with `margin: auto`
  - Shadow (`box-shadow: 5px 5px 5px 0 rgba(0,0,0,0.418)`)
  - Rounded borders (`border-radius: 10px`)
  - Max width `400px`, responsive
- **Image** (`.photo`):
  - Centered with `margin: auto`
  - Max size `500px x 300px`
  - Shadow and rounded borders
  - Responsive (`width: 100%; height: auto`)
- **Typography**:
  - `h1` with `oblique` style
  - `h2` and `.ingredients` with `Franklin Gothic Medium` font

---

## 🛠️ Technologies Used

| Technology | Usage |
| :--- | :--- |
| **HTML5** | Semantic structure (`<header>`, `<section>`, `<article>`, `<ul>`, `<ol>`) |
| **CSS3** | Centering with `margin: auto`, `box-shadow`, `border-radius`, responsive design |

---

## 📂 Folder Structure

```
recipe-lomo-saltado/
│
├── index.html
├── css/
│   └── styles.css
└── images/
    └── lomo.jpg
```

---

## 🎨 Key Features

| Feature | Description |
| :--- | :--- |
| **Centered design** | All content centered with `margin: auto` |
| **Recipe card** | White container with shadow and rounded borders |
| **Responsive image** | `width: 100%; height: auto` adapts to any screen |
| **Organized lists** | Ingredients (`<ul>`) and instructions (`<ol>`) |

---

## 🍲 Recipe Content

### Ingredients
- potato
- onion
- tomato
- meat
- cilantro
- garlic
- soy sauce
- salt, pepper, MSG

### Instructions
1. Sear the meat
2. Season with salt and pepper, add garlic
3. Add and sauté tomato with onion
4. Add soy sauce, adjust seasoning, add cilantro

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

May 2026
