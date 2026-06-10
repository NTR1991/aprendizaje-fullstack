# Terminal To-Do App

---

## 📋 Description

Interactive task manager that runs in the browser console. Allows adding, viewing, completing, deleting, and counting pending tasks.

---

## 📁 Folder Structure

````
01-todo-list/
├── index.html
├── css/
│ └── style.css
├── js/
│ └── main.js
└── README.md
````

---

## 📊 Exercises & Results

**Exercise 1 (Add task)**  
Ask the user for a task description. Validate that it is not empty (cancel or spaces). Save the task as an object with `{ texto, completada: false }`. Show confirmation or error message.

**Exercise 2 (View tasks)**  
If there are no tasks, show a message. Otherwise, display all tasks with their number (starting from 1), status (`[ ]` for pending, `[✓]` for completed), and description.

**Exercise 3 (Complete task)**  
Show the list of tasks with numbers. Ask the user which task number to complete. Validate that the number exists. Mark the task as `completada: true`. Show confirmation or error message.

**Exercise 4 (Delete task)**  
Show the list of tasks with numbers. Ask the user which task number to delete. Validate that the number exists. Remove the task from the array using `.splice()`. Show confirmation or error message.

**Exercise 5 (Count pending tasks)**  
If there are no tasks, show a message. Otherwise, count how many tasks have `completada === false`. Show the result.

**Exercise 6 (Exit)**  
Show a goodbye message and exit the program.

---

## 🧪 Key Learnings

- Arrays with objects to store tasks
- `.push()` to add tasks
- `.splice()` to delete tasks
- `.trim()` to validate input
- `for` loop to display tasks
- `do...while` to keep menu active
- `switch` for menu options
- Unicode characters: `\u2713` (✓) and `\u2717` (✗)

---


## 👨‍💻 Author

NTRJ1991 – Full Stack Development (in training)

---

## 📅 Date

June 2026
