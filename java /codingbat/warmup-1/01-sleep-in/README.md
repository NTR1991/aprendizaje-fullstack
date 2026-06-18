# 🛏️ sleepIn

## 📋 Description

We sleep in if it is **not a weekday** **or** we're **on vacation**.

**Problem:** [CodingBat - sleepIn](https://codingbat.com/prob/p187868)

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if we sleep in, and `false` otherwise.

The rules are:

| Condition | Sleep in? |
| :--- | :--- |
| It is a weekday (`weekday = true`) and we are not on vacation (`vacation = false`) | ❌ No |
| It is NOT a weekday (`weekday = false`) | ✅ Yes (regardless of vacation) |
| We are on vacation (`vacation = true`) | ✅ Yes (regardless of weekday) |

**Translation to Java:**

- We sleep in if `!weekday` (not a weekday) **or** `vacation` (on vacation).
- This is exactly: `!weekday || vacation`.

---

## 📝 Code
````
java
public class SleepIn {
    public static boolean sleepIn(boolean weekday, boolean vacation) {
        return !weekday || vacation;
    }
}
````
---
````

public static boolean sleepIn(boolean weekday, boolean vacation) {
    if (!weekday || vacation) {
        return true;
    }
    return false;
}
````

## 📊 Examples
| weekday | vacation | !weekday | !weekday || vacation | Sleep in? |
| :--- | :--- | :--- | :--- | :--- |
| true | false | false | false | ❌ false |
| false | true | true | true | ✅ true |
| false | false | true | true | ✅ true |
| true | true | false | true | ✅ true |

---


## 🎯 Learning Objectives
Working with boolean logic (||, !)

Returning boolean values directly (without if when not needed)

Understanding short-circuit evaluation (|| stops when first condition is true)

---
## ⚠️ Common Mistakes
Using if with return true and return false → The return version is cleaner.

Writing weekday == false instead of !weekday → Both work, but ! is more concise.

Confusing || (OR) with && (AND) → || means "at least one is true".

---

## 🛠️ Technologies Used
Java – Boolean expressions, methods, return statements

---
📂 Folder Structure
````
01-sleep-in/
├── SleepIn.java
└── README.md
````


---


## 👤 Author
*NTR1991 – Full Stack in training | FP DAW Student*

📅 Date
May 2026



