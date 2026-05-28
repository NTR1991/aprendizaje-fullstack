# SleepIn

## 📋 Description

We sleep in if it is not a weekday or we're on vacation.

**Problem:** [CodingBat - sleepIn](https://codingbat.com/prob/p187868)

## 🛠️ Technologies Used

- **Java**

## 📁 Project Structure
01-sleep-in/
├── SleepIn.java
└── README.md

## 🧮 Code

```java
public class SleepIn {
    public static boolean sleepIn(boolean weekday, boolean vacation) {
        return !weekday || vacation;
    }
}
📊 Examples
weekday	vacation	Result
true	false	false
false	true	true
false	false	true
👨‍💻 Author
NTR1991 - Fullstack Development Student

📅 Date
May 2026
