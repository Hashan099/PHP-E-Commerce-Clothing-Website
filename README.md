<div align="center">

# 👗 Celene Clothing - Full-Stack PHP E-Commerce Web Application

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-PDO-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-3.3.7-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![Institution](https://img.shields.io/badge/Academic%20Project-NIBM-005691?style=for-the-badge)](https://www.nibm.lk/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](LICENSE)

*A full-stack, responsive E-Commerce clothing and apparel web application built with vanilla PHP, MySQL (PDO), Bootstrap, jQuery, and PHPMailer.*

**Final Capstone Project | Diploma in Software Engineering / Computing — NIBM (National Institute of Business Management)**

</div>

<img width="2550" height="3749" alt="screencapture-localhost-PHP-E-Commerce-Clothing-Website-index-php-2026-10-16-20_35_41" src="https://github.com/user-attachments/assets/b4ae8377-470c-412f-86c4-44e6d2745e52" />


---

## 🎓 Academic Background & Project Context

This project was developed as the **Final Capstone Project** for the Diploma program at the **National Institute of Business Management (NIBM)**, Sri Lanka.

### Purpose & Learning Objectives
The objective of this capstone was to design, architect, and implement a full-featured commercial web application from the ground up without using monolithic frameworks (such as Laravel or Symfony). By developing in pure PHP with MySQL:
- **Core Web Architecture**: Deeply mastered HTTP lifecycle, session management, secure cookie handling, and dynamic routing.
- **Relational Database Design**: Designed a normalized MySQL relational database schema with 25+ tables handling multi-tier product hierarchies, customer records, transactions, orders, and CMS configuration.
- **Security Engineering**: Implemented secure coding standards including PDO prepared statements against SQL injection, custom anti-CSRF token verification, and input sanitization.
- **Full-Stack Implementation**: Bridged server-side business logic with responsive front-end UI and a dedicated administrative backoffice dashboard.

---

## 📌 Project Overview

**Celene Clothing** is an online fashion boutique web application offering an end-to-end e-commerce workflow:
1. **Customer-Facing Storefront**: Product exploration through dynamic 3-tier categorization (Top &rarr; Mid &rarr; End Category), real-time cart, country-based shipping calculation, PayPal IPN & Bank Deposit checkout, and customer self-service dashboards.
2. **Backoffice Admin Control Panel**: A fully equipped administrative suite (AdminLTE) enabling site administrators to manage live inventory, fulfill orders, communicate with customers, adjust website banners and content, and configure payment and email gateways.

---

## ✨ Key Features

### 🛍️ Storefront (Customer Experience)
- **Hierarchical Product Catalog**: Navigate apparel through multi-level categories (e.g., *Men &rarr; Casual &rarr; Shirts*); filter products by size, color, and price.
- **Interactive Product Details**: Multi-angle photo gallery with zoom/modal viewer, customer star ratings, dynamic related product carousels, and real-time stock availability check.
- **Session-Based Shopping Cart**: Add, update quantities, remove items, and preserve cart state across navigation.
- **Multi-Gateway Checkout**:
  - **PayPal IPN Integration**: Automated payment handling with instant payment notification callback.
  - **Direct Bank Deposit**: Offline payment workflow allowing buyers to submit bank transfer receipts and references.
- **Customer Account Portal**:
  - Profile and billing/shipping address management.
  - Live order tracking (Order date, Payment status: *Pending / Completed*, Shipping status: *Pending / Completed*).
  - Secure password management and token-based password reset via email.
- **Email Verification & Notifications**: Account activation via secure email tokens powered by PHPMailer.
- **Customer Engagement**: Contact form with automated admin notifications, client testimonials, and newsletter subscription with verification.

### 🛡️ Admin Control Panel (Backoffice)
- **Executive Dashboard**: Real-time KPI summary (Total Products, Completed Orders, Pending Payments, Active Customers, and Registered Subscribers).
- **Product & Inventory Management**: Create, edit, and archive products with multi-photo uploads, size/color variant mapping, and stock quantity tracking.
- **3-Level Category Taxonomy**: Manage Top Categories, Mid Categories, and End Categories with on/off menu display toggles.
- **Order Fulfillment & Customer Messaging**:
  - Filter orders by payment and shipping status.
  - Send templated HTML email updates directly to customers from the order management screen.
- **Comprehensive CMS**:
  - Configure hero sliders, banner graphics, site logo, and favicon.
  - Edit static pages (About Us, FAQ, Contact Us) with a rich WYSIWYG editor.
  - Dynamic multi-language dictionary management (`tbl_language`).
- **Customer & Subscriber Control**: View registered customer data, activate/ban accounts, and export newsletter subscribers as CSV.

---

## 🛠️ Technology Stack

| Layer | Technologies |
| :--- | :--- |
| **Backend** | PHP (7.4+, 8.0, 8.1, 8.2) — Vanilla / Framework-free |
| **Database** | MySQL / MariaDB using **PDO** (Prepared Statements) |
| **Frontend UI** | HTML5, CSS3, JavaScript (ES6), jQuery, Bootstrap 3.3.7 |
| **Admin UI** | AdminLTE 2.4, FontAwesome 4.7, IonIcons, iCheck |
| **Mailing Service**| PHPMailer 6.x (Bundled standalone + Composer compatible) |
| **Security** | PDO Parameterized Queries, Anti-CSRF Tokens, Password Hashing, XSS Sanitization |

---

## 📂 Project Structure

```plaintext
PHP-E-Commerce-Clothing-Website/
├── admin/                     # AdminLTE backend control panel
│   ├── css/                   # Admin stylesheets (Bootstrap, AdminLTE, iCheck)
│   ├── js/                    # Admin JavaScript plugins (DataTables, Select2)
│   ├── inc/                   # Core backend configurations
│   │   ├── config.php         # PDO database connection & base URL routing
│   │   ├── CSRF_Protect.php   # Anti-CSRF token verification class
│   │   └── functions.php      # Image upload validation and auto-increment helpers
│   ├── index.php              # Admin dashboard metrics
│   ├── login.php              # Admin authentication
│   ├── order.php              # Order fulfillment & customer messaging
│   ├── product.php            # Product inventory management
│   └── settings.php           # Global site & payment settings
├── assets/                    # Customer storefront assets
│   ├── css/                   # Front-end styling (responsive grids, carousels)
│   ├── js/                    # Front-end scripts & plugins (Magnific Popup, Owl Carousel)
│   ├── fonts/                 # Webfonts & icon sets
│   ├── img/                   # Static UI assets & loaders
│   └── uploads/               # Product photos, banners, and media uploads
├── database/                  # Database migration scripts
│   ├── schema.sql             # Complete database schema & sanitized seed data
│   └── celeneclothing.sql     # Database dump compatible with standard phpMyAdmin imports
├── payment/                   # Payment gateway integration scripts
│   ├── bank/                  # Bank transfer deposit handler
│   └── paypal/                # PayPal checkout & IPN verification handler
├── third_party/               # Vendor libraries
│   └── PHPMailer/             # PHPMailer core classes (Exception, PHPMailer, SMTP)
├── .env.example               # Environment variables template
├── .gitignore                 # Production-grade Git ignore rules
├── composer.json              # Composer package manifest (PHP >= 7.4, PHPMailer)
├── header.php                 # Global storefront header & navigation
├── footer.php                 # Global storefront footer & newsletter capture
├── index.php                  # Storefront homepage
├── cart.php                   # Shopping cart controller
├── checkout.php               # Multi-gateway checkout controller
├── mailerconfig.php           # SMTP configuration file
├── mailerconfig.example.php   # SMTP configuration template
├── LICENSE                    # MIT License
└── README.md                  # Project documentation
```

---

## 🚀 Installation & Local Setup

### 1. Prerequisites
- **Web Server Stack**: [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/), or [Laragon](https://laragon.org/)
- **PHP**: Version `7.4` or higher (fully compatible with PHP `8.x`)
- **Database**: MySQL `5.7+` or MariaDB `10.3+`
- **Extensions**: `pdo_mysql`, `curl`, `mbstring`, `openssl`

---

### 2. Step-by-Step Setup

#### Step 1: Clone the Repository
Clone the repository into your local web root directory (e.g., `C:\xampp\htdocs\` for XAMPP):
```bash
git clone https://github.com/Hashan099/PHP-E-Commerce-Clothing-Website.git
```

#### Step 2: Import the Database
1. Open **phpMyAdmin** in your browser: `http://localhost/phpmyadmin`
2. Create a new database named:
   ```sql
   CREATE DATABASE celeneclothing CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```
3. Select `celeneclothing` in the left panel and navigate to the **Import** tab.
4. Select `database/schema.sql` (or `database/celeneclothing.sql`) and click **Import**.

#### Step 3: Configure Database & App Settings
The application works out-of-the-box with default local credentials (`root` with an empty password).

If your environment uses custom database credentials, you can configure them in either:
- **Environment variables** (create a `.env` file from `.env.example`):
  ```ini
  DB_HOST=localhost
  DB_NAME=celeneclothing
  DB_USER=root
  DB_PASS=
  BASE_URL=http://localhost/PHP-E-Commerce-Clothing-Website/
  ```
- **Or directly in `admin/inc/config.php`**:
  ```php
  $dbhost = 'localhost';
  $dbname = 'celeneclothing';
  $dbuser = 'root';
  $dbpass = '';
  ```

#### Step 4: Configure Email / SMTP (Optional)
To test account verification or password resets, open `mailerconfig.php` and configure your SMTP credentials (or use a test inbox like [Mailtrap](https://mailtrap.io/)):
```php
$smtpHost     = 'smtp.gmail.com';
$smtpUsername = 'your_email@gmail.com';
$smtpPassword = 'your_google_app_password';
$smtpPort     = 587;
$smtpSecure   = 'tls';
```

#### Step 5: Run the Project
Open your browser and navigate to:
- **🛍️ Storefront**: `http://localhost/PHP-E-Commerce-Clothing-Website/`
- **🛡️ Admin Panel**: `http://localhost/PHP-E-Commerce-Clothing-Website/admin/`

---

## 🔑 Default Test Credentials

The database comes pre-seeded with sanitized demo accounts for immediate testing:

### 🛡️ Administrator Account
| Field | Value |
| :--- | :--- |
| **Login URL** | `http://localhost/PHP-E-Commerce-Clothing-Website/admin/` |
| **Email** | `admin@gmail.com` |
| **Password** | `admin12345` |
| **Role** | Super Admin |

### 👤 Demo Customer Account
| Field | Value |
| :--- | :--- |
| **Login URL** | `http://localhost/PHP-E-Commerce-Clothing-Website/login.php` |
| **Email** | `customer@example.com` |
| **Password** | `12345` |
| **Status** | Active / Verified |

---

## 🔒 Security & Code Refinements

This repository was reviewed and refactored from its original diploma submission:
- **PII Sanitization**: Removed all real developer contact information, phone numbers, and addresses from test database rows; replaced with demo data.
- **SQL Injection Prevention**: Converted all database interactions to parameterized PDO queries.
- **CSRF Token Guards**: All sensitive POST actions validate anti-CSRF tokens through `CSRF_Protect`.
- **PHP 8 Compatibility**: Replaced deprecated functions (e.g. `get_magic_quotes_gpc()`) with modern, safe alternatives.
- **Clean Vendor Footprint**: Removed unneeded vendor documentation and language translation files to keep the repository lightweight.

---

## 📄 License

This project is licensed under the **MIT License**. See the [`LICENSE`](LICENSE) file for details.

---

## 👨‍💻 Author

**Hashan Gunathilake**
- GitHub: [@Hashan099](https://github.com/Hashan099)
- Academic Institution: **National Institute of Business Management (NIBM)**
