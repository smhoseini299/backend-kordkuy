Write-Host "Starting database seeding process..." -ForegroundColor Green
Write-Host ""

Write-Host "1. Running migrations..." -ForegroundColor Yellow
php artisan migrate:fresh

Write-Host ""
Write-Host "2. Running database seeders..." -ForegroundColor Yellow
php artisan db:seed

Write-Host ""
Write-Host "3. Creating storage link..." -ForegroundColor Yellow
php artisan storage:link

Write-Host ""
Write-Host "Database seeding completed successfully!" -ForegroundColor Green
Write-Host ""
Write-Host "You now have:" -ForegroundColor Cyan
Write-Host "- 20+ sample posts with Persian content" -ForegroundColor White
Write-Host "- 200+ sample comments with various statuses" -ForegroundColor White
Write-Host "- Realistic data for testing your blog MVP" -ForegroundColor White
Write-Host ""
Read-Host "Press Enter to continue"
