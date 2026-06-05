# Topic 2: Variables in JavaScript
📋 Practice with let (reassign), const (error), const with objects (modify properties), undefined, and naming rules.


📁 Folder Structure
02-variables/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── README.md
📊 Exercises & Results
| Exercise | Code | Console Output / Effect |
|----------|------|--------------------------|
| 1: let and reassign | `let edad = 25; console.log(edad); edad = 30; console.log(edad);` | `25`<br>`30` |
| 2: const error (commented) | `const nacimiento = 1991; console.log(nacimiento);` | `1991` (error commented) |
| 3: const with object | `const persona = { nombre: "Luis" }; console.log(persona.nombre); persona.nombre = "Ana"; console.log(persona.nombre);` | `Luis`<br>`Ana` |
🧪 Key Learnings
- `let` allows reassignment
- `const` does NOT allow reassignment
- `const` with objects allows modifying properties
- Variable without value → `undefined`
- Strings need quotes: `"rojo"`
- Comments: `//` and `/* */`
✅ Self‑Assessment Test (Answers)
1. `let` allows reassign; `const` does not.
2. Error: `Assignment to constant variable`
3. `let color = "rojo";`
4. Yes, because `const` protects the variable, not the object content.
5. `undefined`
👨‍💻 Author
NTRJ1991 – Full Stack Development (in training)
📅 Date
June 2026
