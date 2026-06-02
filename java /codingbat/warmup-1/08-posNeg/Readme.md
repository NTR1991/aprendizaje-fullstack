# PosNeg ➕➖

## 📋 Description

Return true if one is negative and one is positive. If negative is true, return true only if both are negative.

**Problem:** CodingBat - posNeg

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

08-posNeg/  
PosNeg.java  
README.md

---

## 🧮 Code

public class PosNeg {
    public static boolean posNeg(int a, int b, boolean negative) {
        if (negative) {
            return a < 0 && b < 0;
        }
        return (a < 0 && b > 0) || (a > 0 && b < 0);
    }
}

---

## 📊 Examples

| a | b | negative | Result |
|---|---|----------|--------|
| 1 | -1 | false | true |
| -1 | 1 | false | true |
| -4 | -5 | true | true |

---

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
