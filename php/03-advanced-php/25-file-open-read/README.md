# 📘 PHP File Open/Read

## 📋 Description

A PHP script demonstrating different methods for reading files in real-world business scenarios, including reading entire files, reading line by line, reading specific amounts of data, and processing CSV files for inventory management.

---

## 🎯 Learning Objectives

- Using `fopen()` to open files in read mode
- Using `fgets()` to read files line by line
- Using `feof()` to check the end of a file
- Using `fread()` to read specific amounts of data
- Using `filesize()` to get file size
- Using `file_get_contents()` to read entire files
- Using `file()` to read files into arrays
- Using `fgetcsv()` to read CSV files
- Processing data from files with loops
- Extracting and calculating data from file content

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Sales Report Reader**
   A company needs to read a sales report file and display its content using different methods.

   Tasks to perform:
   - Create a file `ventas.txt` with sales data
   - Read and display the file using `file_get_contents()`
   - Read and display the file line by line using `fopen()`, `fgets()`, and `feof()`
   - Read and display the file using `fread()` and `filesize()`
   - Read and display the file as an array using `file()`

---

### 🟡 Intermediate Level (1 exercise)

1. **Shipping Log Processor**
   A logistics company needs to process a shipping log file and calculate statistics.

   Tasks to perform:
   - Create a file `envios.txt` with shipping data
   - Read and display the complete file content
   - Count the total number of lines
   - Count the number of shipments
   - Calculate the total sum of all shipping prices
   - Find and display the most expensive shipment
   - Find and display the cheapest shipment

---

### 🔴 Difficult Level (1 exercise)

1. **Inventory CSV Analyzer**
   A company needs to read a CSV file with product data and calculate statistics.

   Tasks to perform:
   - Create a file `productos.csv` with product data
   - Read and display all products in a table
   - Calculate and display:
     - Total number of products
     - Average price
     - Most expensive product
     - Cheapest product
     - Total stock

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What function is used to open a file in PHP? | A) `fopen()` |
| 2 | What function reads a single line from a file? | B) `fgets()` |
| 3 | What function checks if the end of a file has been reached? | A) `feof()` |
| 4 | What function reads a specific amount of bytes from a file? | A) `fread()` |
| 5 | What function returns the size of a file in bytes? | A) `filesize()` |
| 6 | What function reads a file into an array where each line is an element? | B) `file()` |
| 7 | What is the correct mode for opening a file in read mode? | A) `"r"` |
| 8 | What function closes an open file? | A) `fclose()` |
| 9 | What is the output with `fread()` and `filesize()`? | A) Reads and displays the entire file |
| 10 | What is the difference between `file_get_contents()` and `file()`? | A) `file_get_contents()` returns string, `file()` returns array |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What function opens a file? | A | A | ✅ |
| 2 | What function reads a line? | B | B | ✅ |
| 3 | What function checks end of file? | A | A | ✅ |
| 4 | What function reads specific bytes? | A | A | ✅ |
| 5 | What function gets file size? | A | A | ✅ |
| 6 | What function reads to an array? | B | B | ✅ |
| 7 | Correct mode for reading? | A | A | ✅ |
| 8 | What function closes a file? | A | A | ✅ |
| 9 | Output with `fread()` and `filesize()`? | A | A | ✅ |
| 10 | Difference between functions? | A | A | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `fopen()`, `fgets()`, `feof()`, `fread()`, `filesize()`, `file_get_contents()`, `file()`, `fgetcsv()`, `fclose()`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
25-file-open-read/
├── css/
│ └── style.css
├── php/
│ └── main.php
├── index.html
└── README.md
````


---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

July 2026