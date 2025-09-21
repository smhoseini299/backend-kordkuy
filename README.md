# Blog MVP - Laravel Backend

یک سیستم وبلاگ ساده با Laravel که شامل مدیریت پست‌ها و کامنت‌ها است.

## ویژگی‌ها

- ✅ مدیریت پست‌ها (CRUD)
- ✅ مدیریت کامنت‌ها با سیستم تایید
- ✅ آپلود تصاویر برای پست‌ها
- ✅ Pagination با Cursor
- ✅ RESTful API

## نصب و راه‌اندازی

### 1. نصب Dependencies

```bash
composer install
```

### 2. تنظیم فایل Environment

فایل `.env` را کپی کنید:

```bash
copy .env.example .env
```

سپس تنظیمات دیتابیس را در فایل `.env` تغییر دهید:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_kordkuy
DB_USERNAME=root
DB_PASSWORD=
```

### 3. ایجاد کلید اپلیکیشن

```bash
php artisan key:generate
```

### 4. ایجاد دیتابیس

در MySQL دیتابیس `db_kordkuy` را ایجاد کنید:

```sql
CREATE DATABASE db_kordkuy CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 5. اجرای Migration ها

```bash
php artisan migrate
```

### 6. اجرای Seeder (اختیاری)

برای ایجاد داده‌های نمونه:

```bash
php artisan db:seed
```

### 7. ایجاد لینک Symbolic برای Storage

```bash
php artisan storage:link
```

### 8. راه‌اندازی سرور

```bash
php artisan serve
```

سرور روی `http://localhost:8000` در دسترس خواهد بود.

## API Endpoints

### پست‌ها

- `GET /api/posts` - لیست پست‌ها (با cursor pagination)
- `GET /api/posts/{id}` - جزئیات یک پست
- `POST /api/admin/posts` - ایجاد پست جدید (admin)
- `PUT /api/admin/posts/{id}` - ویرایش پست (admin)
- `DELETE /api/admin/posts/{id}` - حذف پست (admin)

### کامنت‌ها

- `GET /api/posts/{id}/comments` - کامنت‌های تایید شده یک پست
- `POST /api/comments` - ارسال کامنت جدید
- `GET /api/admin/comments` - لیست همه کامنت‌ها (admin)
- `PUT /api/admin/comments/{id}/status` - تغییر وضعیت کامنت (admin)
- `POST /api/admin/comments/{id}/approve` - تایید کامنت (admin)
- `POST /api/admin/comments/{id}/reject` - رد کامنت (admin)
- `DELETE /api/admin/comments/{id}` - حذف کامنت (admin)

## ساختار دیتابیس

### جدول posts
- `id` - شناسه یکتا
- `title` - عنوان پست
- `content` - محتوای پست
- `image` - مسیر تصویر
- `slug` - نام مستعار URL
- `created_at` - تاریخ ایجاد
- `updated_at` - تاریخ آخرین ویرایش

### جدول comments
- `id` - شناسه یکتا
- `post_id` - شناسه پست مربوطه
- `author_name` - نام نویسنده کامنت
- `content` - محتوای کامنت
- `status` - وضعیت (pending, approved, rejected)
- `created_at` - تاریخ ایجاد
- `updated_at` - تاریخ آخرین ویرایش

## نکات مهم

1. تصاویر در پوشه `storage/app/public/posts` ذخیره می‌شوند
2. کامنت‌ها به صورت پیش‌فرض در وضعیت `pending` قرار می‌گیرند
3. فقط کامنت‌های `approved` در API عمومی نمایش داده می‌شوند
4. برای دسترسی به API های admin، احراز هویت لازم است (در نسخه فعلی ساده‌سازی شده)

## تست API

می‌توانید از Postman یا هر ابزار دیگری برای تست API استفاده کنید. نمونه درخواست‌ها:

### ایجاد پست جدید
```bash
POST http://localhost:8000/api/admin/posts
Content-Type: multipart/form-data

title: عنوان پست
content: محتوای پست
image: [فایل تصویر]
```

### ارسال کامنت
```bash
POST http://localhost:8000/api/comments
Content-Type: application/json

{
    "post_id": 1,
    "author_name": "نام کاربر",
    "content": "متن کامنت"
}
```
