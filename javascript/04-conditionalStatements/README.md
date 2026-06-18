# 4️⃣ Conditional Statements in JavaScript

## 📋 Description

Practice with conditional statements: `if`, `if/else`, `else if`, `switch`, nested `if`, and logical operators.

---

## 📂 Folder Structure

```
04-conditional-statements/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── README.md
```

---

## 📊 Exercises & Results

### `if` Statements (5 exercises)

#### Exercise 1
**Description:** If temperature > 25, display "Hace calor".

```javascript
let temperatura = 30;
if (temperatura > 25) {
    console.log("Hace calor");
}
```

| Output |
| :--- |
| `Hace calor` |

---

#### Exercise 2
**Description:** If `totalCompra >= 100`, display "Tienes descuento".

```javascript
let totalCompra = 120;
if (totalCompra >= 100) {
    console.log("Tienes descuento");
}
```

| Output |
| :--- |
| `Tienes descuento` |

---

#### Exercise 3
**Description:** If number is even, display "Es par".

```javascript
let numero = 8;
if (numero % 2 === 0) {
    console.log("Es par");
}
```

| Output |
| :--- |
| `Es par` |

---

#### Exercise 4
**Description:** If user is logged in, display "Bienvenido".

```javascript
let logueado = true;
if (logueado === true) {
    console.log("Bienvenido");
}
```

| Output |
| :--- |
| `Bienvenido` |

---

#### Exercise 5
**Description:** If stock is 0, display "Producto agotado".

```javascript
let stock = 0;
if (stock === 0) {
    console.log("Producto agotado");
}
```

| Output |
| :--- |
| `Producto agotado` |

---

### `if/else` Statements (5 exercises)

#### Exercise 1
**Description:** If `edad >= 18`, display "Eres mayor de edad", else "Eres menor de edad".

```javascript
let edad = 16;
if (edad >= 18) {
    console.log("Eres mayor de edad");
} else {
    console.log("Eres menor de edad");
}
```

| Output |
| :--- |
| `Eres menor de edad` |

---

#### Exercise 2
**Description:** If `nota >= 60`, display "Aprobado", else "Suspenso".

```javascript
let nota = 65;
if (nota >= 60) {
    console.log("Aprobado");
} else {
    console.log("Suspenso");
}
```

| Output |
| :--- |
| `Aprobado` |

---

#### Exercise 3
**Description:** If `numero >= 0`, display "Positivo o cero", else "Negativo".

```javascript
let numerox = -5;
if (numerox >= 0) {
    console.log("Positivo o cero");
} else {
    console.log("Negativo");
}
```

| Output |
| :--- |
| `Negativo` |

---

#### Exercise 4
**Description:** If `dinero >= 12`, display "Puedes entrar al cine", else "No tienes suficiente dinero".

```javascript
let dinero = 15;
if (dinero >= 12) {
    console.log("Puedes entrar al cine");
} else {
    console.log("No tienes suficiente dinero");
}
```

| Output |
| :--- |
| `Puedes entrar al cine` |

---

#### Exercise 5
**Description:** If `temp > 20`, display "Hace calor", else "Hace frío o templado".

```javascript
let temp = 15;
if (temp > 20) {
    console.log("Hace calor");
} else {
    console.log("Hace frio o templado");
}
```

| Output |
| :--- |
| `Hace frio o templado` |

---

### `else if` Statements (5 exercises)

#### Exercise 1 – Age Range
**Description:** Age categories: `< 13` → "Niño", `< 20` → "Adolescente", `< 65` → "Adulto", else → "Adulto mayor".

```javascript
let edad = 25;
if (edad < 13) {
    console.log("Niño");
} else if (edad < 20) {
    console.log("Adolescente");
} else if (edad < 65) {
    console.log("Adulto");
} else {
    console.log("Adulto mayor");
}
```

| Output |
| :--- |
| `Adulto` |

---

#### Exercise 2 – Letter Grade
**Description:** Score grading: `>= 90` → "A", `>= 80` → "B", `>= 70` → "C", `>= 60` → "D", else → "F".

```javascript
let puntaje = 85;
if (puntaje >= 90) {
    console.log("A");
} else if (puntaje >= 80) {
    console.log("B");
} else if (puntaje >= 70) {
    console.log("C");
} else if (puntaje >= 60) {
    console.log("D");
} else {
    console.log("F");
}
```

| Output |
| :--- |
| `B` |

---

#### Exercise 3 – BMI Classification
**Description:** BMI categories: `< 18.5` → "Bajo peso", `< 25` → "Normal", `< 30` → "Sobrepeso", else → "Obesidad".

```javascript
let imc = 26;
if (imc < 18.5) {
    console.log("Bajo peso");
} else if (imc < 25) {
    console.log("Normal");
} else if (imc < 30) {
    console.log("Sobrepeso");
} else {
    console.log("Obesidad");
}
```

| Output |
| :--- |
| `Sobrepeso` |

---

#### Exercise 4 – Price Range
**Description:** Price categories: `< 50` → "Económico", `< 100` → "Normal", `< 200` → "Caro", else → "Muy caro".

```javascript
let precio = 75;
if (precio < 50) {
    console.log("Economico");
} else if (precio < 100) {
    console.log("Normal");
} else if (precio < 200) {
    console.log("Caro");
} else {
    console.log("Muy caro");
}
```

| Output |
| :--- |
| `Normal` |

---

#### Exercise 5 – Negative, Zero, or Positive
**Description:** Check if number is negative, zero, or positive.

```javascript
let num = 0;
if (num < 0) {
    console.log("Negativo");
} else if (num === 0) {
    console.log("Cero");
} else if (num > 0) {
    console.log("Positivo");
} else {
    console.log("Error");
}
```

| Output |
| :--- |
| `Cero` |

---

### `switch` Statements (5 exercises)

#### Exercise 1 – Days of the Week
**Description:** Monday → "Inicio de semana", Tuesday/Wednesday → "Mitad de semana", Friday → "Fin de semana laboral", Saturday/Sunday → "Fin de semana".

```javascript
let dia = "miercoles";
switch (dia) {
    case "lunes":
        console.log("Inicio de semana");
        break;
    case "martes":
    case "miercoles":
        console.log("Mitad de semana");
        break;
    case "viernes":
        console.log("Fin de semana laboral");
        break;
    case "sabado":
    case "domingo":
        console.log("Fin de semana");
        break;
    default:
        console.log("Dia no valido");
}
```

| Output |
| :--- |
| `Mitad de semana` |

---

#### Exercise 2 – Months of the Year
**Description:** Group months by quarter.

```javascript
let mes = "abril";
switch (mes) {
    case "enero":
    case "febrero":
    case "marzo":
        console.log("Trimestre 1");
        break;
    case "abril":
    case "mayo":
    case "junio":
        console.log("Trimestre 2");
        break;
    case "julio":
    case "agosto":
    case "septiembre":
        console.log("Trimestre 3");
        break;
    case "octubre":
    case "noviembre":
    case "diciembre":
        console.log("Trimestre 4");
        break;
    default:
        console.log("Mes no valido");
}
```

| Output |
| :--- |
| `Trimestre 2` |

---

#### Exercise 3 – Access Level
**Description:** Access based on role: admin → "Acceso total", editor → "Puede editar", visitor → "Solo lectura".

```javascript
let rol = "admin";
switch (rol) {
    case "admin":
        console.log("Acceso total");
        break;
    case "editor":
        console.log("Puede editar");
        break;
    case "visitante":
        console.log("Solo lectura");
        break;
    default:
        console.log("Acceso denegado");
}
```

| Output |
| :--- |
| `Acceso total` |

---

#### Exercise 4 – Shirt Size
**Description:** XS → "Extra pequeño", S → "Pequeño", M → "Mediano", L → "Grande", XL → "Extra grande".

```javascript
let talla = "M";
switch (talla) {
    case "XS":
        console.log("Extra pequeno");
        break;
    case "S":
        console.log("Pequeno");
        break;
    case "M":
        console.log("Mediano");
        break;
    case "L":
        console.log("Grande");
        break;
    case "XL":
        console.log("Extra grande");
        break;
    default:
        console.log("Talla no valida");
}
```

| Output |
| :--- |
| `Mediano` |

---

#### Exercise 5 – Basic Calculator
**Description:** Perform operations based on the value of `operacion`.

```javascript
let operacion = "suma";
let a = 10;
let b = 5;
switch (operacion) {
    case "suma":
        console.log(a + b);
        break;
    case "resta":
        console.log(a - b);
        break;
    case "multiplicacion":
        console.log(a * b);
        break;
    case "division":
        console.log(a / b);
        break;
    default:
        console.log("Operacion no valida");
}
```

| Output |
| :--- |
| `15` |

---

### Additional Exercises (5 exercises)

#### Exercise 6 – Driving with Logical Operators
**Description:** Driving eligibility based on age and license.

```javascript
let edadn = 25;
let tieneCarnet = true;
if (edadn >= 18 && tieneCarnet === true) {
    console.log("Puede conducir");
} else if (edadn >= 18 && tieneCarnet === false) {
    console.log("Necesita carnet");
} else if (edadn < 18) {
    console.log("Muy joven para conducir");
}
```

| Output |
| :--- |
| `Puede conducir` |

---

#### Exercise 7 – Nested `if`
**Description:** Access based on registration, email verification, and payment.

```javascript
let usuarioRegistrado = true;
let emailVerificado = false;
let tienePago = true;
if (usuarioRegistrado === true) {
    if (emailVerificado === true && tienePago === true) {
        console.log("Acceso completo");
    } else if (emailVerificado === true && tienePago === false) {
        console.log("Acceso limitado (falta pago)");
    } else if (emailVerificado === false) {
        console.log("Verifica tu email");
    }
} else {
    console.log("Registrate primero");
}
```

| Output |
| :--- |
| `Verifica tu email` |

---

#### Exercise 8 – Complex Ranges
**Description:** Score validation with boundary checks.

```javascript
let puntajex = 105;
if (puntajex > 100) {
    console.log("Puntaje invalido (maximo 100)");
} else if (puntajex >= 90) {
    console.log("Excelente");
} else if (puntajex >= 70) {
    console.log("Bueno");
} else if (puntajex >= 50) {
    console.log("Suficiente");
} else if (puntajex >= 0) {
    console.log("Insuficiente");
} else {
    console.log("Puntaje invalido (negativo)");
}
```

| Output |
| :--- |
| `Puntaje invalido (maximo 100)` |

---

#### Exercise 9 – HTTP Status Codes
**Description:** HTTP status codes using `switch`.

```javascript
let codigo = 403;
switch (codigo) {
    case 200:
        console.log("OK");
        break;
    case 201:
        console.log("Creado");
        break;
    case 400:
        console.log("Solicitud incorrecta");
        break;
    case 401:
        console.log("No autorizado");
        break;
    case 403:
        console.log("Prohibido");
        break;
    case 404:
        console.log("No encontrado");
        break;
    case 500:
        console.log("Error interno del servidor");
        break;
    default:
        console.log("Codigo desconocido");
}
```

| Output |
| :--- |
| `Prohibido` |

---

#### Exercise 10 – Multiple Logical Conditions
**Description:** Plan selection based on temperature, rain, and holiday.

```javascript
let temp = 28;
let lloviendo = true;
let diaFestivo = false;
if (temp > 25 && lloviendo === false) {
    console.log("Piscina");
} else if (temp > 25 && lloviendo === true) {
    console.log("Cine");
} else if (temp <= 25 && lloviendo === false && diaFestivo === true) {
    console.log("Parque");
} else if (temp <= 25 && !lloviendo && diaFestivo === false) {
    console.log("Trabajo/estudio");
} else if (temp <= 25 && lloviendo === true) {
    console.log("Casa");
}
```

| Output |
| :--- |
| `Cine` |

---

## 🧪 Key Learnings

- `if` executes code if the condition is `true`.
- `else` executes if the previous condition was `false`.
- `else if` allows testing multiple conditions in order.
- `switch` is cleaner for comparing a variable against many fixed values.
- Use `break` in `switch` to prevent fall-through to the next `case`.
- Nested `if` statements are conditionals inside other conditionals.
- Use `&&` (AND) and `||` (OR) to combine conditions.

---

## ✅ Self-Assessment Test (Answers)

| Question | Answer |
| :--- | :--- |
| 1. What is the difference between `else if` and `else`? | `else if` tests another condition if the previous one was `false`; `else` executes if all were `false` (it has no condition). |
| 2. What happens if you forget `break` in a `switch`? | The code continues executing the following `case`s (fall-through). |
| 3. Write a condition to check if `numero` is between 10 and 20 (inclusive). | `if (numero >= 10 && numero <= 20) { }` |
| 4. When should you use `switch` instead of `if/else`? | When comparing the same variable against many fixed values. |
| 5. What is a nested `if` statement? | A conditional (`if`) inside another conditional. |

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
