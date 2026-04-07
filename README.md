

# 🛒 ShopEase AI

### Smart Online Shopping Management System

**PHP MySQL JavaScript HTML CSS | MIT License**



## 🎯 Objectives

### Objective 1 — Seamless Online Shopping Experience

Provide users with an intuitive platform to browse products, manage carts, and place orders efficiently with a smooth UI/UX experience.

### Objective 2 — Intelligent Product Organization

Organize products using categories and brands to enable structured navigation and fast product discovery.

### Objective 3 — Automated Order & Data Management

Handle orders, payments, and user data efficiently using a relational database with triggers and constraints.



## 🏗️ Architecture

```
Online Shopping System
│
├── Backend (PHP/)
│   ├── admin/              ← Admin panel & controls
│   ├── includes/           ← Database & core logic
│   ├── api/                ← Data handling scripts
│
├── Frontend (UI/)
│   ├── css/                ← Styling files
│   ├── js/                 ← Client-side logic
│   ├── images/             ← Product assets
│
├── Database (MySQL)
│   ├── products            ← Product data
│   ├── users               ← User accounts
│   ├── orders              ← Order records
│   └── cart                ← Temporary cart data
│
└── Server (XAMPP/WAMP)
```



## 🔄 Data Flow

```
User Interaction
    │
    ▼
[Frontend UI]
    │
    ▼
[PHP Backend Logic]
    │
    ▼
[MySQL Database]
    │
    ▼
[Order Processing & Storage]
    │
    ▼
[User Dashboard / Admin Panel]
```



## 🧠 Key Features

### 👤 User Module

* User Registration & Login
* Browse Products by Categories & Brands
* Add to Cart
* Checkout & Place Orders
* View Order History

### 🛠️ Admin Module

* Admin Authentication
* Product Management (CRUD)
* Category & Brand Management
* Order Monitoring



## 🗄️ Database Design

### 🔹 Core Tables

* `user_info` – User data
* `admin_info` – Admin credentials
* `products` – Product catalog
* `categories` – Product grouping
* `brands` – Brand classification

### 🔹 Transaction Tables

* `cart` – Shopping cart
* `orders` – Order summary
* `orders_info` – Customer details
* `order_products` – Ordered items

### 🔹 Advanced Features

* 📌 Stored Procedure: `getcat`
* 📌 Trigger: Auto backup (`user_info_backup`)
* 📌 Foreign Keys for relational integrity



## ⚙️ Tech Stack

### 🔹 Backend

| Layer    | Technology | Purpose           |
| -------- | ---------- | ----------------- |
| Language | PHP        | Server-side logic |
| Database | MySQL      | Data storage      |
| Server   | XAMPP      | Local hosting     |

### 🔹 Frontend

| Layer       | Technology | Purpose          |
| ----------- | ---------- | ---------------- |
| Structure   | HTML       | Page layout      |
| Styling     | CSS        | UI design        |
| Interaction | JavaScript | Dynamic behavior |



## 📁 Project Structure

```
online-shopping-system/
│
├── 📂 admin/                # Admin dashboard
├── 📂 css/                  # Stylesheets
├── 📂 js/                   # Scripts
├── 📂 images/               # Product images
├── 📂 includes/             # DB connection & config
├── 📂 database/             # SQL file
├── index.php                # Homepage
├── login.php                # User login
├── cart.php                 # Cart system
└── README.md
```



## 🚀 Quick Start

### 🔹 Prerequisites

* XAMPP / WAMP installed
* PHP 7+
* MySQL


### 1️⃣ Clone Repository

```bash
https://github.com/VedaShivayogi/Online-Shopping-Database-Management-System
cd Online-Shopping-Database-Management-System
```


### 2️⃣ Setup Database

* Open **phpMyAdmin**
* Create DB: `onlineshop`
* Import SQL file


### 3️⃣ Run Project

```
http://localhost/Online-Shopping-Database-Management-System
```

---

## 🔐 Default Admin Login

```
Email: ved@gmail.com  
Password: 123456789 (MD5)
```


## 📊 Output

### 🏠 Homepage

* Product listing with categories

### 🛒 Cart System

* Add/remove products

### 📦 Order System

* Place and track orders




## 👨‍💻 Author

**Veda**

