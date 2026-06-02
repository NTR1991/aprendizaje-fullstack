# NearHundred 🎯

## 📋 Description

Return true if n is within 10 of 100 or within 10 of 200.

**Problem:** CodingBat - nearHundred

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

07-nearHundred/  
NearHundred.java  
README.md

---

## 🧮 Code

public class NearHundred {
    public static boolean nearHundred(int n) {
        return Math.abs(n - 100) <= 10 || Math.abs(n - 200) <= 10;
    }
}

---

## 📊 Examples

| n | Result |
|---|--------|
| 93 | true |
| 90 | true |
| 89 | false |

---

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
