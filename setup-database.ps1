Write-Host "Setting up database for Blog MVP..." -ForegroundColor Green
Write-Host ""

Write-Host "1. Creating database and tables..." -ForegroundColor Yellow
mysql -u root -p < database\create_tables.sql

Write-Host ""
Write-Host "2. Inserting sample data..." -ForegroundColor Yellow
mysql -u root -p < database\sample_data.sql

Write-Host ""
Write-Host "Database setup completed successfully!" -ForegroundColor Green
Write-Host ""
Write-Host "You now have:" -ForegroundColor Cyan
Write-Host "- Database: db_kordkuy" -ForegroundColor White
Write-Host "- 12 sample posts with Persian content" -ForegroundColor White
Write-Host "- 30+ sample comments with various statuses" -ForegroundColor White
Write-Host "- Ready for testing your blog MVP" -ForegroundColor White
Write-Host ""
Read-Host "Press Enter to continue"
