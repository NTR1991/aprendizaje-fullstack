# 🦜 parrotTrouble

## 📋 Description

We are in trouble if the parrot is talking and the hour is before 7 or after 20.

**Problem:** [CodingBat - parrotTrouble](https://codingbat.com/prob/p140449)

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if we are in trouble, and `false` otherwise.

The rules are:
- If the parrot is talking (`talking = true`) AND the hour is before 7 (`hour < 7`) OR after 20 (`hour > 20`) → we are in trouble (`true`).
- Otherwise → we are not in trouble (`false`).

**Translation to Java:** `if (talking && (hour < 7 || hour > 20)) { return true; } else { return false; }`

---

## 📝 Code

````java
public class ParrotTrouble {
    public static boolean parrotTrouble(boolean talking, int hour) {
        if (talking && (hour < 7 || hour > 20)) {
            return true;
        }
        return false;
    }
}
````
Alternative (direct return):
````
public static boolean parrotTrouble(boolean talking, int hour) {
    return talking && (hour < 7 || hour > 20);
}
````

---


## 📊 Examples

| n | `Math.abs(n - 21)` | `n > 21` | Result |
| :--- | :--- | :--- | :--- |
| `19` | `2` | `false` | `2` |
| `21` | `0` | `false` | `0` |
| `22` | `1` | `true` | `2` |
| `25` | `4` | `true` | `8` |
| `0` | `21` | `false` | `21` |


---

## 🎯 Learning Objectives

- Working with logical operators (`&&`, `||`)
- Combining multiple conditions in an `if` statement
- Returning boolean values directly (without `if` when not needed)
- Understanding operator precedence (`&&` before `||`)

---

## ⚠️ Common Mistakes

- Using `||` instead of `&&` (the parrot must be talking AND it must be outside the allowed hours)
- Forgetting the parentheses: `(hour < 7 || hour > 20)` is mandatory for correct evaluation
- Returning `true` only for `hour < 7` or only for `hour > 20` instead of both

---

## 🛠️ Technologies Used

- **Java** – Boolean logic, conditionals, return statements, operator precedence

---

## 📂 Folder Structure
````
05-parrotTrouble/
├── ParrotTrouble.java
└── README.md
````

---


## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026

