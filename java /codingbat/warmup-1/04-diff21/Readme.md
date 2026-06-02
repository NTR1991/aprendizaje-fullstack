# Diff21

## Description

Return the absolute difference between n and 21. If n is greater than 21, return double the absolute difference.

**Problem:** CodingBat - diff21

## Technologies Used

- Java

## Project Structure

04-diff21/
├── Diff21.java
└── README.md

## Code

```java
public class Diff21 {
    public static int diff21(int n) {
        if (n > 21) {
            return (n - 21) * 2;
        }
        return 21 - n;
    }
}
````

📊 Examples
n	Result
19	2
21	0
25	8
👨‍💻 Author
NTR1991 - Fullstack Development Student

📅 Date
June 2026
