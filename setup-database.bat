@echo off
echo Setting up database for Blog MVP...
echo.

echo 1. Creating database and tables...
mysql -u root -p < database\create_tables.sql

echo.
echo 2. Inserting sample data...
mysql -u root -p < database\sample_data.sql

echo.
echo Database setup completed successfully!
echo.
echo You now have:
echo - Database: db_kordkuy
echo - 12 sample posts with Persian content
echo - 30+ sample comments with various statuses
echo - Ready for testing your blog MVP
echo.
pause
