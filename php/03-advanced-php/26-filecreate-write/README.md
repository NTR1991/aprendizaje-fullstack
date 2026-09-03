# 📘 PHP File Create/Write

## 📋 Description

A PHP script demonstrating how to create and write files in real-world business scenarios, including generating employee records, managing product inventories with CSV files, and creating automated invoice systems.

---

## 🎯 Learning Objectives

- Creating files with fopen() and "w" mode
- Writing to files with fwrite()
- Creating and writing with file_put_contents()
- Appending to files with FILE_APPEND and "a" mode
- Writing CSV files with fputcsv()
- Creating directories with mkdir()
- Checking if a file exists with file_exists()
- Generating unique filenames with date()
- Applying file writing in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. Employee Records System
   A company needs to create a file to store employee records.

   Tasks to perform:
   - Create a file empleados.txt with the following content:
     === REGISTRO DE EMPLEADOS ===
     Fecha: 29/07/2026
     Empleado: Ana Perez - Puesto: Desarrollador - Salario: 2500 €
     Empleado: Carlos Gomez - Puesto: Disenador - Salario: 2200 €
     Empleado: Elena Ruiz - Puesto: Gerente - Salario: 3500 €
     Total empleados: 3
   - Use fopen() and fwrite() to create the file
   - Verify that the file was created correctly with file_exists()
   - Append a new employee to the end:
     Empleado: Luis Martinez - Puesto: Analista - Salario: 2800 €
     Total empleados actualizado: 4
   - Display the final file content using file_get_contents()

---

### 🟡 Intermediate Level (1 exercise)

1. Inventory CSV Generator
   A company needs to create and manage a CSV file with product inventory data.

   Tasks to perform:
   - Create a file productos.csv with initial data:
     Header: nombre,precio,stock
     Products:
     Portatil,650,10
     Raton,25,30
     Teclado,45,15
     Monitor,180,8
   - Use fputcsv() to write the CSV file
   - Verify that the file was created
   - Append a new product: Auriculares,35,20
   - Read and display all products
   - Calculate and display the total number of products and average price

---

### 🔴 Difficult Level (1 exercise)

1. Invoice Generation System
   A sales company needs an automated invoice generation system.

   Input (simulated):
   $pedido = [
       "cliente" => "Maria Lopez",
       "email" => "maria@email.com",
       "fecha" => "29/07/2026",
       "productos" => [
           ["nombre" => "Portatil", "cantidad" => 1, "precio" => 650],
           ["nombre" => "Raton", "cantidad" => 2, "precio" => 25],
           ["nombre" => "Teclado", "cantidad" => 1, "precio" => 45]
       ]
   ];

   Tasks to perform:
   - Create a facturas/ directory if it doesn't exist
   - Generate an invoice file with the following format:
     ========================================
               FACTURA
     ========================================
     Cliente: Maria Lopez
     Email: maria@email.com
     Fecha: 29/07/2026
     ----------------------------------------
     Producto     Cantidad   Precio   Total
     Portatil     1          650      650
     Raton        2          25       50
     Teclado      1          45       45
     ----------------------------------------
     Subtotal: 745 €
     IVA (21%): 156.45 €
     TOTAL: 901.45 €
     ========================================
   - Save the invoice in facturas/ with a unique name using date('Ymd_His')
   - Create a registro_facturas.txt file with a log entry:
     Fecha: 29/07/2026 - Cliente: Maria Lopez - Total: 901.45 €
   - Display confirmation of the generated invoice

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What function writes to an open file in PHP? | B) `fwrite()` |
| 2 | What mode is used to create and write a file from scratch (overwrites if exists)? | C) `"w"` |
| 3 | What mode is used to append content to the end of a file without deleting existing content? | B) `"a"` |
| 4 | What function writes a line in CSV format? | B) `fputcsv()` |
| 5 | What constant is used with `file_put_contents()` to append content to the end of a file? | C) `FILE_APPEND` |
| 6 | What function checks if a file exists on the server? | A) `file_exists()` |
| 7 | What function closes an open file? | A) `fclose()` |
| 8 | What function creates a directory in PHP? | A) `mkdir()` |
| 9 | What is the output with `fwrite()` and `FILE_APPEND`? | C) "Hola Mundo" |
| 10 | What function reads all content from a file? | B) `file_get_contents()` |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What function writes to an open file? | B | B | ✅ |
| 2 | What mode creates and writes from scratch? | C | C | ✅ |
| 3 | What mode appends without deleting? | B | B | ✅ |
| 4 | What function writes CSV? | B | B | ✅ |
| 5 | What constant appends content? | C | C | ✅ |
| 6 | What function checks if a file exists? | A | A | ✅ |
| 7 | What function closes a file? | A | A | ✅ |
| 8 | What function creates a directory? | A | A | ✅ |
| 9 | Output with fwrite() and FILE_APPEND? | C | C | ✅ |
| 10 | What function reads all content? | B | B | ✅ |

Result: 10/10 (100%) ✅

---

## 🛠️ Technologies Used

- PHP – Core language, fopen(), fwrite(), fclose(), file_put_contents(), FILE_APPEND, fputcsv(), fgetcsv(), mkdir(), file_exists(), str_pad(), date()
- HTML5 – Structure
- CSS3 – Styling

---

## 📂 Folder Structure

26-file-create-write/
├── css/
│   └── style.css
├── php/
│   └── main.php
├── index.html
└── README.md

---

## 👤 Author

NTR1991 – Full Stack in training | FP DAW Student

## 📅 Date

September 2026
