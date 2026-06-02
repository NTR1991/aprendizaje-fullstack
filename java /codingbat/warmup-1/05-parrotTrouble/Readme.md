# ParrotTrouble 🦜

## 📋 Description

We are in trouble if the parrot is talking and the hour is before 7 or after 20.

**Problem:** CodingBat - parrotTrouble

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

05-parrotTrouble/
├── ParrotTrouble.java
└── README.md

---

## 🧮 Code

public class ParrotTrouble {
    public static boolean parrotTrouble(boolean talking, int hour) {
        return talking && (hour < 7 || hour > 20);
    }
}

---

## 📊 Examples

| talking | hour | Result |
|---------|------|--------|
| true | 6 | true |
| true | 7 | false |
| false | 6 | false |

---

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
