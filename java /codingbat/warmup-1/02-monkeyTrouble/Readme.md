# 🐒 monkeyTrouble

## 📋 Description

We are in trouble if both monkeys are smiling **or** if neither is smiling.

**Problem:** [CodingBat - monkeyTrouble](https://codingbat.com/prob/p181646)

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if we are in trouble, and `false` otherwise.

The rules are:

| Condition | In trouble? |
| :--- | :--- |
| Both are smiling (`aSmile = true`, `bSmile = true`) | ✅ Yes |
| Neither is smiling (`aSmile = false`, `bSmile = false`) | ✅ Yes |
| Only one is smiling (`aSmile != bSmile`) | ❌ No |

**Translation to Java:** `aSmile == bSmile`

---

## 📝 Code

````
java
public class MonkeyTrouble {
    public static boolean monkeyTrouble(boolean aSmile, boolean bSmile) {
        return aSmile == bSmile;
    }
}
````

````

public static boolean monkeyTrouble(boolean aSmile, boolean bSmile) {
    if (aSmile == bSmile) {
        return true;
    }
    return false;
}
````

----

## 📊 Examples

| aSmile | bSmile | aSmile == bSmile | In trouble? |
| :--- | :--- | :--- | :--- |
| `true` | `true` | `true` | ✅ `true` |
| `false` | `false` | `true` | ✅ `true` |
| `true` | `false` | `false` | ❌ `false` |
| `false` | `true` | `false` | ❌ `false` |


---


## 🎯 Learning Objectives
Working with boolean equality (==)

Returning boolean values directly (without if when possible)

Understanding the difference between == and = (assignment vs comparison)

---

## ⚠️ Common Mistakes
Using && (AND) instead of == – The problem requires equality, not both being true.

Using || (OR) instead of == – The condition is "both same", not "at least one".

Confusing assignment (=) with comparison (==) – aSmile = bSmile would not work as expected.

---

## 🛠️ Technologies Used
Java – Boolean expressions, equality operators, return statements

---

## 📂 Folder Structure
````
02-monkeyTrouble/
├── MonkeyTrouble.java
└── README.md
````

---

👤 Author
*NTR1991 – Full Stack in training | FP DAW Student*

📅 Date
June 2026


