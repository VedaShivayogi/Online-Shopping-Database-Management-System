# Online Shopping Database Management System

A comprehensive e-commerce platform with an admin dashboard for managing products, users, suppliers, and orders. Built with PHP and MySQL, this system provides a complete solution for online retail operations.

## 📋 Table of Contents

- [Features](#features)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Project Structure](#project-structure)
- [Database Schema](#database-schema)
- [User Guide](#user-guide)
- [Admin Guide](#admin-guide)
- [API Documentation](#api-documentation)
- [Security Features](#security-features)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)

## ✨ Features

### Customer Features

- **User Authentication**
  - User registration with email validation
  - Secure login system
  - Session management
  - Password security

- **Product Management**
  - Browse products by categories
  - Product search and filtering
  - Detailed product information
  - Product image gallery with zoom functionality

- **Shopping Cart**
  - Add/remove items from cart
  - Update quantities
  - Real-time price calculation
  - Cart persistence

- **Checkout & Payment**
  - Multi-step checkout process
  - Secure payment processing
  - Order confirmation
  - Payment success notifications

- **Newsletter**
  - Email subscription management
  - Marketing communications

### Admin Features

- **Dashboard**
  - Sales overview
  - Daily sales report
  - User activity tracking

- **Product Management**
  - Add/edit products
  - Manage product categories
  - Inventory management
  - Bulk product operations

- **User Management**
  - View all users
  - Edit user profiles
  - User activity monitoring
  - Account management

- **Supplier Management**
  - Add/manage suppliers
  - Supplier information
  - Product-supplier mapping

- **Order Management**
  - View all orders
  - Track order status
  - Manage order fulfillment
  - Order history

## 🔧 System Requirements

- **Server**
  - PHP 5.6 or higher
  - Apache Web Server (or compatible)
  - MySQL 5.5 or higher

- **Browser**
  - Chrome, Firefox, Safari, or Edge (latest versions recommended)
  - JavaScript enabled
  - Cookies enabled

- **Disk Space**
  - Minimum 100MB for initial installation
  - Additional space for product images and database growth

## 📦 Installation

### 1. Prerequisites

Ensure you have the following installed:

- XAMPP, WAMP, or LAMP server running
- MySQL database service
- PHP CLI (optional, for command-line operations)

### 2. Download Project

```bash
# Clone or download the project
git clone <repository-url>
cd Online-Shopping-Database-Management-System-main
```

### 3. Setup Database

- Open phpMyAdmin
- Create a new database named `ecommerece` (note the spelling)
- Import the SQL file:

```sql
Import the file: database/onlineshop.sql
```

### 4. Configure Settings

Edit `config.php` with your database credentials:

```php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_DATABASE', 'ecommerece');
```

### 5. Deploy Files

- Copy all project files to your web root directory (htdocs for XAMPP)
- Set proper file permissions:

```bash
chmod 755 product_images/
chmod 644 *.php
```

### 6. Access Application

- Customer Portal: `http://localhost/Online-Shopping-Database-Management-System-main/`
- Admin Panel: `http://localhost/Online-Shopping-Database-Management-System-main/admin/`

## ⚙️ Configuration

### Database Configuration

Update `config.php`:

```php
define('DB_SERVER', 'localhost');      // Database host
define('DB_USERNAME', 'root');         // Database user
define('DB_PASSWORD', '');             // Database password
define('DB_DATABASE', 'ecommerece');   // Database name
```

### Upload Directory

Ensure the `product_images/` directory has write permissions:

```bash
chmod 777 product_images/
```

### Session Configuration

Sessions are managed in `config.php`:

```php
session_start(); // Initialize sessions
```

## 📂 Project Structure

```
Online-Shopping-Database-Management-System/
├── index.php                 # Homepage
├── store.php                 # Product store page
├── product.php               # Product detail page
├── cart.php                  # Shopping cart
├── checkout.php              # Checkout page
├── checkout_process.php      # Checkout processing
├── payment_success.php       # Payment confirmation
├── login.php                 # User login
├── register.php              # User registration
├── logout.php                # User logout
├── config.php                # Configuration file
├── db.php                    # Database connection
├── header.php                # Header template
├── footer.php                # Footer template
├── body.php                  # Main body template
├── admin/                    # Admin panel
│   ├── index.php            # Admin dashboard
│   ├── login.php            # Admin login
│   ├── admin/
│   │   ├── products_list.php
│   │   ├── add_products.php
│   │   ├── manageuser.php
│   │   ├── orders.php
│   │   ├── salesofday.php
│   │   └── ...
│   └── server/
│       └── server.php       # Admin operations
├── database/
│   └── onlineshop.sql       # Database schema
├── css/                     # Stylesheets
├── js/                      # JavaScript files
└── product_images/          # Product images
```

## 🗄️ Database Schema

### Key Tables

**admin_info**

- Stores admin user credentials and information

**users**

- Customer account information
- Email and encrypted passwords

**categories**

- Product categories

**products**

- Product details, prices, and inventory

**brands**

- Product brand information

**suppliers**

- Supplier information and details

**orders**

- Customer orders and order history

**order_items**

- Individual items within orders

**cart**

- Shopping cart items (temporary)

## 👥 User Guide

### Creating an Account

1. Click "Register" on the homepage
2. Enter username, email, and password
3. Confirm password and submit
4. Account created successfully

### Shopping

1. Browse products in the store
2. Click product to view details
3. Click "Add to Cart"
4. Continue shopping or proceed to checkout
5. Review cart items and proceed to payment

### Checkout

1. Review order details
2. Enter shipping information
3. Select payment method
4. Complete payment
5. Receive confirmation email

## 🔐 Admin Guide

### Admin Login

- Access: `admin/login.php`
- Default credentials are in the database

### Managing Products

1. Go to "Products" section
2. View all products or add new
3. Edit product details, prices, and inventory
4. Upload product images to `product_images/`

### Managing Users

1. Navigate to "Users" section
2. View user information
3. Edit or delete user accounts
4. Monitor user activity

### Managing Orders

1. Go to "Orders" section
2. View all orders and statuses
3. Update order status
4. Track fulfillment

### Viewing Analytics

1. Dashboard shows sales overview
2. View daily sales report
3. Track user activity
4. Monitor inventory levels

## 📡 API Documentation

### Authentication

All requests require valid session or login credentials.

### Key Functions

**User Authentication**

```php
// Login
POST: login.php
Parameters: username, password

// Register
POST: register.php
Parameters: username, email, password, password_2

// Logout
GET: logout.php
```

**Shopping Operations**

```php
// Add to cart
POST: action.php
Parameters: action, product_id, quantity

// View cart
GET: cart.php

// Process checkout
POST: checkout_process.php
Parameters: payment_method, shipping_address
```

## 🔒 Security Features

- **Password Security**
  - Passwords are hashed using MD5 (recommend upgrading to bcrypt/password_hash)
  - SQL injection prevention using `mysqli_real_escape_string()`

- **Session Management**
  - Server-side session handling
  - Session timeout protection

- **Input Validation**
  - Form validation on server-side
  - Error handling for invalid inputs

- **Database Security**
  - Prepared statements recommended
  - Database credentials in separate config file

### ⚠️ Security Recommendations

1. Upgrade password hashing from MD5 to `password_hash()`
2. Use prepared statements for all database queries
3. Implement HTTPS/SSL certificates
4. Add CSRF token protection
5. Implement rate limiting for login attempts
6. Keep PHP and MySQL updated

## 🆘 Troubleshooting

### Database Connection Error

- Ensure MySQL service is running
- Verify database credentials in `config.php`
- Check if database `ecommerece` exists

### "Cannot add to cart" Error

- Ensure product images are writable
- Check file permissions on directories
- Verify database tables are populated

### Admin Login Issues

- Clear browser cookies/cache
- Verify admin credentials in database
- Check session permissions

### Product Images Not Displaying

- Ensure `product_images/` directory exists
- Verify directory permissions (755 or 777)
- Check image file format (JPG, PNG, GIF)

### Payment Processing Fails

- Verify payment gateway configuration
- Check internet connectivity
- Review payment logs in checkout_process.php

## 📝 License

[Specify your license here]

## 👨‍💻 Contributing

Contributions are welcome! Please:

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Submit a pull request

## 📞 Support

For support and questions:

- Check the Troubleshooting section
- Review admin documentation
- Contact the development team


