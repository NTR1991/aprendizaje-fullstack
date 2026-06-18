# 🔟 makes10

## 📋 Description

Return true if one of the numbers is 10 or if their sum is 10.

**Problem:** [CodingBat - makes10](https://codingbat.com/prob/p157733)

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- Either `a` is 10 (`a == 10`)
- OR `b` is 10 (`b == 10`)
- OR the sum of `a` and `b` is 10 (`a + b == 10`)

**Translation to Java:** `return a == 10 || b == 10 || a + b == 10;`

---

## 📝 Code

```java
public class Makes10 {
    public static boolean makes10(int a, int b) {
        return a == 10 || b == 10 || a + b == 10;
    }
}
````
Alternative (with if):

````java
public static boolean makes10(int a, int b) {
    if (a == 10 || b == 10 || a + b == 10) {
        return true;
    }
    return false;
}
````
