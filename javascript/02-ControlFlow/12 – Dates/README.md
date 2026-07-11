# 📘 Topic 12 – Dates in JavaScript

## 📋 Description

Working with dates: create Date objects, get and set date components, format dates, and calculate differences between dates.

---

## 🎯 Learning Objectives

- Create Date objects for current and specific dates
- Get and set date components (year, month, day)
- Format dates for display
- Calculate age from birthdate
- Calculate days until next birthday

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Show Current Date in dd/mm/yyyy Format**

   Input:
   ````
   Today's date (e.g., 11/07/2026)
   ````

   Task:
   - Create a Date object for today
   - Extract day, month, and year
   - Display the date as "dd/mm/yyyy" in console

### 🟡 Intermediate Level (1 exercise)

1. **Calculate Age from Birthdate**

   Input: 
   ````
   Birthdate = 15/01/1991
   ````

   Task:
   - Create a Date object for the birthdate
   - Get the current date
   - Calculate age (considering if birthday has passed this year)
   - Show the age in console

### 🔴 Difficult Level (1 exercise)

1. **Days Until Next Birthday**

   Input: 
   
   ````
   Birthdate = 15/01/1991
   ````
   

   Task:
   - Create a Date object for the birthdate
   - Determine the next birthday (this year or next)
   - Calculate the number of days until then
   - Show the result in console

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What method creates a current date? | A |
| 2 | What method returns the full year? | B |
| 3 | What method returns the day of the month? | C |
| 4 | What method returns the month (0-11)? | A |
| 5 | Why add +1 to getMonth() when displaying? | B |
| 6 | What method sets the year? | B |
| 7 | Formula for days between two dates? | A |
| 8 | What does `Math.ceil()` do? | B |
| 9 | When is the next birthday if today is July and birthday is January? | B |
| 10 | What does `getDay()` return? | B |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What method creates a current date? | A | A | ✅ |
| 2 | What method returns the full year? | B | B | ✅ |
| 3 | What method returns the day of the month? | C | C | ✅ |
| 4 | What method returns the month (0-11)? | A | A | ✅ |
| 5 | Why add +1 to getMonth()? | B | B | ✅ |
| 6 | What method sets the year? | B | B | ✅ |
| 7 | Formula for days between two dates? | A | A | ✅ |
| 8 | What does `Math.ceil()` do? | B | B | ✅ |
| 9 | When is the next birthday? | B | B | ✅ |
| 10 | What does `getDay()` return? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
12-dates/
├── css/
│ └── style.css
├── js/
│ └── main.js
├── index.html
└── README.md
```

---

## 👤 Author

*NTR1991 – Full Stack Developer in training | FP DAW Student*

## 📅 Date

July 2026