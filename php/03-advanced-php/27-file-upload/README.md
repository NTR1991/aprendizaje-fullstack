# 📘 PHP File Upload

## 📋 Description

A PHP script demonstrating how to handle file uploads in real-world business scenarios, including uploading single images, multiple documents for employees, and product images with validation, renaming, and logging.

---

## 🎯 Learning Objectives

- Using `$_FILES` superglobal to access uploaded files
- Using `move_uploaded_file()` to save files to the server
- Validating file types with `in_array()`
- Validating file sizes (individual and total)
- Creating directories with `mkdir()`
- Generating unique filenames with `time()`
- Handling multiple file uploads
- Logging uploads to a file
- Simulating image thumbnail creation
- Applying file upload in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

````
1. Product Image Upload
   A company needs a system to upload product images to their online store.

   Input (simulated):
   $_FILES['producto'] = [
       'name' => 'laptop.jpg',
       'type' => 'image/jpeg',
       'tmp_name' => '/tmp/phpXyZ123',
       'error' => 0,
       'size' => 150000
   ];

   Tasks to perform:
   - Create a `uploads/` directory if it doesn't exist
   - Verify that there are no upload errors (`error === 0`)
   - Validate file type (only JPG, PNG, GIF allowed)
   - Validate file size (max 2MB)
   - Move the file to `uploads/` with a unique name using timestamp
   - Display success or error message
````
---

### 🟡 Intermediate Level (1 exercise)

````
1. Employee Document Upload System
   An HR company needs a system to upload employee documents (CV, cover letter, certificates).

   Input (simulated):
   $_FILES['documentos'] = [
       'name' => ['cv.pdf', 'carta.docx', 'titulo.jpg'],
       'type' => ['application/pdf', 'application/msword', 'image/jpeg'],
       'tmp_name' => ['/tmp/phpA1B2C3', '/tmp/phpD4E5F6', '/tmp/phpG7H8I9'],
       'error' => [0, 0, 0],
       'size' => [250000, 180000, 350000]
   ];

   Business rules:
   - Allowed file types: PDF, DOCX, JPG, PNG
   - Max individual file size: 2MB
   - Max total file size: 5MB
   - Create employee folder: `uploads/empleado_ID/`
   - Rename files: `tipo_documento_fecha.ext` (e.g., `cv_20260903.pdf`)
   - Log each upload in a file

````
---

### 🔴 Difficult Level (1 exercise)


````
1. Product Image Gallery Upload System
   An e-commerce company needs a system to upload multiple product images with strict validations.

   Input (simulated):
   $_FILES['imagenes'] = [
       'name' => ['producto1.jpg', 'producto2.png', 'producto3.gif', 'producto4.webp', 'producto5.jpg'],
       'type' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/jpeg'],
       'tmp_name' => ['/tmp/phpA1', '/tmp/phpA2', '/tmp/phpA3', '/tmp/phpA4', '/tmp/phpA5'],
       'error' => [0, 0, 0, 0, 0],
       'size' => [800000, 500000, 200000, 900000, 1200000]
   ];

   Business rules:
   - Max 5 images per product
   - Allowed types: JPG, PNG, GIF, WEBP
   - Max individual size: 1MB
   - Max total size: 3MB
   - Create product folder: `uploads/producto_ID/`
   - Unique filename: `producto_ID_timestamp_nombre_original.ext`
   - Create log file in `logs/subidas.log`
   - Simulate thumbnail creation (200x200 px)
   - Display detailed summary
````
---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What superglobal is used to handle uploaded files in PHP? | C) `$_FILES` |
| 2 | What field of `$_FILES` contains the original filename? | B) `name` |
| 3 | What function moves an uploaded file to its final location? | A) `move_uploaded_file()` |
| 4 | What error value indicates no upload errors? | D) `0` |
| 5 | What mode is used to append content to a log file? | C) `"a"` |
| 6 | What function checks if a file was uploaded via HTTP POST? | A) `is_uploaded_file()` |
| 7 | Which of the following is NOT an allowed image type? | C) `application/pdf` |
| 8 | What function creates a directory in PHP? | B) `mkdir()` |
| 9 | What field of `$_FILES` contains the file size in bytes? | D) `size` |
| 10 | What does error code `4` in `$_FILES` mean? | B) No file was uploaded |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What superglobal handles uploaded files? | C | C | ✅ |
| 2 | What field contains the original filename? | B | B | ✅ |
| 3 | What function moves an uploaded file? | A | A | ✅ |
| 4 | What error value indicates no errors? | D | D | ✅ |
| 5 | What mode appends to a log file? | C | C | ✅ |
| 6 | What function checks if a file was uploaded via POST? | A | A | ✅ |
| 7 | Which is NOT an allowed image type? | C | C | ✅ |
| 8 | What function creates a directory? | B | B | ✅ |
| 9 | What field contains the file size? | D | D | ✅ |
| 10 | What does error code `4` mean? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- PHP – Core language, `$_FILES`, `move_uploaded_file()`, `is_uploaded_file()`, `mkdir()`, `file_exists()`, `file_put_contents()`, `pathinfo()`, `time()`, `date()`
- HTML5 – Structure
- CSS3 – Styling

---

## 📂 Folder Structure

````
27-file-upload/
├── css/
│ └── style.css
├── php/
│ └── main.php
├── index.html
└── README.md
````


---

## 👤 Author

NTR1991 – Full Stack in training | FP DAW Student

## 📅 Date

July 2026
