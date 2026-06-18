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
| talking | hour | `talking && (hour < 7 || hour > 20)` | In trouble? |
| :--- | :--- | :--- | :--- |
| `true` | `6` | `true` | ✅ `true` |
| `true` | `7` | `false` | ❌ `false` |
| `true` | `21` | `true` | ✅ `true` |
| `false` | `6` | `false` | ❌ `false` |
| `false` | `21` | `false` | ❌ `false` |

---

