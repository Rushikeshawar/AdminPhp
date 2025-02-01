# Admin Panel

## Tech Stack:

**Frontend:** HTML, CSS, Bootstrap, PHP  
**Backend:** PHP (with MySQL)  
**Database:** MySQL  
**Authentication:** JWT (JSON Web Token)  

## Project Overview

This is an admin panel designed to help admins manage products in an e-commerce platform. The application allows for adding, viewing, updating, and deleting products, with access secured via JWT authentication. The backend is built using PHP, and the database is managed using MySQL.

## Features & Functionality

### 1. Authentication (Login & Registration)
- Admin can log in using JWT authentication.
- Upon successful login, the Navbar with product management options becomes visible.

### 2. Navbar (Visible Only to Admin)
Admin has access to the following options in the Navbar:
✅ Add Product  
✅ Show Products  

### 3. Add Product (Form Validation & Database Integration)
- This feature is accessible only to Admin.
- Admin can enter product details, including:
  - Name
  - Price
  - Description
  - Image
- Input fields are validated before saving the product to the MySQL database.

### 4. Show Products (Fetch & Display Data from Database)
- Displays all products stored in the database.
- Provides action buttons for each product:
  ✅ Update Product  
  ✅ Delete Product  

### 5. Update & Delete Product (CRUD Operations)
Admin can:
✅ Update product details.  
✅ Delete products from the database.  

## Development Roadmap

### 1. Backend (PHP + MySQL)
✅ Setup PHP project.  
✅ Create API routes:
   - `/Admin`
   - `/login`
   - `/add-product`
   - `/update-product`
   - `/delete-product`
   - `/get-products`
✅ Implement JWT Authentication.  
✅ Configure MySQL database.  

### 2. Frontend (HTML, CSS, Bootstrap, PHP)
✅ Create Login & Registration Page.  
✅ Implement Protected Routes (only Admin can access the dashboard).  
✅ Build Product Form (Add & Update).  
✅ Fetch and display products.  
✅ Add Update & Delete functionality.
