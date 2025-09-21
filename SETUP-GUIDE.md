# راهنمای راه‌اندازی Blog MVP

## مشکل: PHP نصب نیست

اگر با خطای `php : The term 'php' is not recognized` مواجه شدید، این راهنما را دنبال کنید.

## راه حل 1: نصب PHP (توصیه شده)

### گزینه A: دانلود مستقیم PHP
1. به [php.net/downloads](https://www.php.net/downloads.php) بروید
2. آخرین نسخه PHP برای Windows را دانلود کنید
3. فایل را در `C:\php` extract کنید
4. مسیر `C:\php` را به PATH اضافه کنید:
   - Windows + R → `sysdm.cpl` → Advanced → Environment Variables
   - در System Variables، PATH را انتخاب کنید
   - Edit → New → `C:\php` اضافه کنید

### گزینه B: نصب XAMPP
1. [XAMPP](https://www.apachefriends.org/download.html) را دانلود کنید
2. نصب کنید (PHP در `C:\xampp\php` قرار می‌گیرد)
3. مسیر `C:\xampp\php` را به PATH اضافه کنید

### گزینه C: استفاده از Chocolatey
```powershell
# نصب Chocolatey (اگر نصب نیست)
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))

# نصب PHP
choco install php
```

## راه حل 2: استفاده از فایل‌های SQL (بدون PHP)

اگر نمی‌خواهید PHP نصب کنید، می‌توانید مستقیماً از فایل‌های SQL استفاده کنید:

### مراحل:
1. MySQL را اجرا کنید
2. فایل‌های SQL را اجرا کنید:

```bash
# روش 1: استفاده از فایل batch
setup-database.bat

# روش 2: استفاده از PowerShell
.\setup-database.ps1

# روش 3: دستی
mysql -u root -p < database\create_tables.sql
mysql -u root -p < database\sample_data.sql
```

## راه حل 3: استفاده از Docker (پیشرفته)

اگر Docker نصب دارید:

```bash
# ایجاد container با PHP و MySQL
docker run -d --name blog-mvp -p 8000:8000 -p 3306:3306 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=db_kordkuy php:8.1-apache

# اجرای دستورات Laravel
docker exec -it blog-mvp bash
composer install
php artisan migrate
php artisan db:seed
```

## بررسی نصب

بعد از نصب PHP، این دستورات را تست کنید:

```bash
php --version
composer --version
```

## اجرای پروژه

بعد از نصب PHP:

```bash
# نصب dependencies
composer install

# کپی فایل .env
copy .env.example .env

# ایجاد کلید اپلیکیشن
php artisan key:generate

# اجرای migration ها
php artisan migrate

# اجرای seeder ها
php artisan db:seed

# ایجاد لینک storage
php artisan storage:link

# راه‌اندازی سرور
php artisan serve
```

## تست API

بعد از راه‌اندازی، این endpoint ها در دسترس هستند:

- `GET http://localhost:8000/api/posts` - لیست پست‌ها
- `GET http://localhost:8000/api/posts/1` - جزئیات پست
- `POST http://localhost:8000/api/comments` - ارسال کامنت
- `GET http://localhost:8000/api/posts/1/comments` - کامنت‌های پست

## فایل‌های ایجاد شده

- `database/create_tables.sql` - ایجاد جداول
- `database/sample_data.sql` - داده‌های نمونه
- `setup-database.bat` - اسکریپت Windows
- `setup-database.ps1` - اسکریپت PowerShell

## نکات مهم

1. مطمئن شوید MySQL در حال اجرا است
2. دیتابیس `db_kordkuy` ایجاد شود
3. کاربر `root` دسترسی کامل داشته باشد
4. پورت 8000 آزاد باشد

## مشکل دارید؟

اگر هنوز مشکل دارید:
1. مطمئن شوید MySQL نصب و در حال اجرا است
2. مسیر PHP را در PATH بررسی کنید
3. از فایل‌های SQL مستقیم استفاده کنید
4. لاگ‌های خطا را بررسی کنید
