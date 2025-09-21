@echo off
echo Starting database seeding process...
echo.

echo 1. Running migrations...
php artisan migrate:fresh

echo.
echo 2. Running database seeders...
php artisan db:seed

echo.
echo 3. Creating storage link...
php artisan storage:link

echo.
echo Database seeding completed successfully!
echo.
echo You now have:
echo - 20+ sample posts with Persian content
echo - 200+ sample comments with various statuses
echo - Realistic data for testing your blog MVP
echo.
pause
