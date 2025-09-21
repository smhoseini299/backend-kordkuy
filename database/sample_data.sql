-- Sample data for blog MVP
USE db_kordkuy;

-- Insert sample posts
INSERT INTO posts (title, content, slug, created_at, updated_at) VALUES
('خوش آمدید به وبلاگ تکنولوژی ما', 'این اولین پست وبلاگ ما است. در اینجا می‌توانید مطالب جالب و مفیدی درباره تکنولوژی، برنامه‌نویسی و موضوعات مختلف بخوانید. ما سعی می‌کنیم بهترین محتوا را برای شما فراهم کنیم.', 'welcome-to-our-tech-blog', NOW() - INTERVAL 30 DAY, NOW() - INTERVAL 30 DAY),

('آموزش Laravel برای مبتدیان - قسمت اول', 'Laravel یکی از محبوب‌ترین فریمورک‌های PHP است که برای توسعه اپلیکیشن‌های وب استفاده می‌شود. در این پست با اصول اولیه Laravel آشنا می‌شویم. Laravel با استفاده از الگوی MVC، توسعه را آسان‌تر می‌کند.', 'laravel-tutorial-beginners-part1', NOW() - INTERVAL 25 DAY, NOW() - INTERVAL 25 DAY),

('نکات مهم در React Development', 'React یک کتابخانه قدرتمند JavaScript برای ساخت رابط‌های کاربری است. در این مقاله نکات مهمی برای توسعه بهتر با React ارائه می‌دهیم. از hooks تا performance optimization.', 'important-tips-react-development', NOW() - INTERVAL 20 DAY, NOW() - INTERVAL 20 DAY),

('مقدمه‌ای بر Docker و Containerization', 'Docker یکی از ابزارهای مهم در دنیای DevOps است. با استفاده از Docker می‌توانید اپلیکیشن‌های خود را در محیط‌های مختلف به راحتی deploy کنید. در این مقاله با مفاهیم اولیه Docker آشنا می‌شویم.', 'introduction-docker-containerization', NOW() - INTERVAL 18 DAY, NOW() - INTERVAL 18 DAY),

('بهترین روش‌های SEO برای وب‌سایت‌ها', 'SEO یا بهینه‌سازی موتور جستجو یکی از مهم‌ترین جنبه‌های توسعه وب است. در این مقاله بهترین روش‌های SEO را بررسی می‌کنیم و نکات کاربردی ارائه می‌دهیم.', 'best-seo-practices-websites', NOW() - INTERVAL 15 DAY, NOW() - INTERVAL 15 DAY),

('آموزش Git و GitHub برای توسعه‌دهندگان', 'Git یکی از ابزارهای ضروری برای هر توسعه‌دهنده است. در این مقاله با مفاهیم اولیه Git، branching، merging و کار با GitHub آشنا می‌شویم.', 'git-github-tutorial-developers', NOW() - INTERVAL 12 DAY, NOW() - INTERVAL 12 DAY),

('مقایسه فریمورک‌های JavaScript: React vs Vue vs Angular', 'در این مقاله سه فریمورک محبوب JavaScript را با هم مقایسه می‌کنیم. هر کدام مزایا و معایب خاص خود را دارند و انتخاب بین آن‌ها بستگی به نیاز پروژه دارد.', 'javascript-frameworks-comparison', NOW() - INTERVAL 10 DAY, NOW() - INTERVAL 10 DAY),

('آموزش API Design و RESTful Services', 'طراحی API یکی از مهارت‌های مهم برای توسعه‌دهندگان backend است. در این مقاله با اصول طراحی RESTful API و best practices آشنا می‌شویم.', 'api-design-restful-services', NOW() - INTERVAL 8 DAY, NOW() - INTERVAL 8 DAY),

('مقدمه‌ای بر Machine Learning و AI', 'هوش مصنوعی و یادگیری ماشین یکی از داغ‌ترین موضوعات تکنولوژی است. در این مقاله با مفاهیم اولیه ML و کاربردهای آن آشنا می‌شویم.', 'introduction-machine-learning-ai', NOW() - INTERVAL 5 DAY, NOW() - INTERVAL 5 DAY),

('بهترین روش‌های امنیت در توسعه وب', 'امنیت یکی از مهم‌ترین جنبه‌های توسعه وب است. در این مقاله با تهدیدات امنیتی رایج و روش‌های محافظت از وب‌سایت آشنا می‌شویم.', 'web-security-best-practices', NOW() - INTERVAL 3 DAY, NOW() - INTERVAL 3 DAY),

('آموزش کامل Node.js از صفر تا صد', 'Node.js یکی از محبوب‌ترین runtime های JavaScript است که امکان اجرای کد JavaScript در سمت سرور را فراهم می‌کند. در این آموزش کامل، از مفاهیم اولیه تا پیشرفته Node.js را یاد می‌گیرید.', 'complete-nodejs-tutorial-zero-to-hero', NOW() - INTERVAL 2 DAY, NOW() - INTERVAL 2 DAY),

('راهنمای کامل TypeScript برای توسعه‌دهندگان JavaScript', 'TypeScript یک superset از JavaScript است که type safety را به کد شما اضافه می‌کند. در این راهنمای کامل، با مفاهیم TypeScript، interfaces، generics، decorators و integration با فریمورک‌های مختلف آشنا می‌شویم.', 'complete-typescript-guide-javascript-developers', NOW() - INTERVAL 1 DAY, NOW() - INTERVAL 1 DAY);

-- Insert sample comments
INSERT INTO comments (post_id, author_name, content, status, created_at, updated_at) VALUES
-- Comments for post 1
(1, 'علی احمدی', 'پست بسیار مفیدی بود. ممنون از شما!', 'approved', NOW() - INTERVAL 29 DAY, NOW() - INTERVAL 29 DAY),
(1, 'مریم رضایی', 'خیلی عالی بود. منتظر پست‌های بعدی هستم.', 'approved', NOW() - INTERVAL 28 DAY, NOW() - INTERVAL 28 DAY),
(1, 'حسن محمدی', 'مطالب خوبی ارائه دادید.', 'approved', NOW() - INTERVAL 27 DAY, NOW() - INTERVAL 27 DAY),
(1, 'فاطمه کریمی', 'عالی! خیلی کاربردی بود.', 'pending', NOW() - INTERVAL 26 DAY, NOW() - INTERVAL 26 DAY),
(1, 'محمد رضایی', 'ممنون از توضیحات کامل شما.', 'approved', NOW() - INTERVAL 25 DAY, NOW() - INTERVAL 25 DAY),

-- Comments for post 2
(2, 'زهرا نوری', 'خیلی مفصل و خوب توضیح دادید.', 'approved', NOW() - INTERVAL 24 DAY, NOW() - INTERVAL 24 DAY),
(2, 'امیر حسینی', 'این مطلب خیلی به درد من خورد.', 'approved', NOW() - INTERVAL 23 DAY, NOW() - INTERVAL 23 DAY),
(2, 'سارا احمدی', 'عالی بود! لطفاً بیشتر از این مطالب بذارید.', 'approved', NOW() - INTERVAL 22 DAY, NOW() - INTERVAL 22 DAY),
(2, 'رضا محمدی', 'خیلی خوب و قابل فهم بود.', 'pending', NOW() - INTERVAL 21 DAY, NOW() - INTERVAL 21 DAY),
(2, 'نرگس کریمی', 'ممنون از زحمات شما.', 'approved', NOW() - INTERVAL 20 DAY, NOW() - INTERVAL 20 DAY),

-- Comments for post 3
(3, 'حسین رضایی', 'بسیار آموزنده بود.', 'approved', NOW() - INTERVAL 19 DAY, NOW() - INTERVAL 19 DAY),
(3, 'مینا احمدی', 'خیلی عالی! منتظر مطالب بعدی هستم.', 'approved', NOW() - INTERVAL 18 DAY, NOW() - INTERVAL 18 DAY),
(3, 'علی محمدی', 'مطالب خیلی خوبی ارائه می‌دید.', 'approved', NOW() - INTERVAL 17 DAY, NOW() - INTERVAL 17 DAY),
(3, 'مریم کریمی', 'عالی بود! خیلی استفاده کردم.', 'pending', NOW() - INTERVAL 16 DAY, NOW() - INTERVAL 16 DAY),
(3, 'محمد نوری', 'خیلی مفید بود. ممنون!', 'approved', NOW() - INTERVAL 15 DAY, NOW() - INTERVAL 15 DAY),

-- Comments for post 4
(4, 'احمد رضایی', 'توضیحات خیلی واضح و مفصل بود.', 'approved', NOW() - INTERVAL 14 DAY, NOW() - INTERVAL 14 DAY),
(4, 'زهرا محمدی', 'این مقاله خیلی به درد من خورد.', 'approved', NOW() - INTERVAL 13 DAY, NOW() - INTERVAL 13 DAY),
(4, 'علی کریمی', 'عالی! خیلی چیزهای جدید یاد گرفتم.', 'approved', NOW() - INTERVAL 12 DAY, NOW() - INTERVAL 12 DAY),
(4, 'فاطمه احمدی', 'ممنون از زحمات شما. خیلی مفید بود.', 'pending', NOW() - INTERVAL 11 DAY, NOW() - INTERVAL 11 DAY),
(4, 'محمد نوری', 'خیلی خوب توضیح دادید. ممنون!', 'approved', NOW() - INTERVAL 10 DAY, NOW() - INTERVAL 10 DAY),

-- Comments for post 5
(5, 'مریم حسینی', 'این مطلب خیلی کاربردی بود.', 'approved', NOW() - INTERVAL 9 DAY, NOW() - INTERVAL 9 DAY),
(5, 'حسن رضایی', 'عالی بود! منتظر مطالب بعدی هستم.', 'approved', NOW() - INTERVAL 8 DAY, NOW() - INTERVAL 8 DAY),
(5, 'سارا کریمی', 'خیلی مفصل و خوب بود.', 'approved', NOW() - INTERVAL 7 DAY, NOW() - INTERVAL 7 DAY),
(5, 'رضا احمدی', 'ممنون از توضیحات کامل.', 'pending', NOW() - INTERVAL 6 DAY, NOW() - INTERVAL 6 DAY),
(5, 'نرگس محمدی', 'این مقاله خیلی آموزنده بود.', 'approved', NOW() - INTERVAL 5 DAY, NOW() - INTERVAL 5 DAY),

-- Additional random comments
(6, 'حسین نوری', 'خیلی عالی! خیلی استفاده کردم.', 'approved', NOW() - INTERVAL 4 DAY, NOW() - INTERVAL 4 DAY),
(7, 'مینا رضایی', 'مطالب خیلی خوبی ارائه می‌دید.', 'approved', NOW() - INTERVAL 3 DAY, NOW() - INTERVAL 3 DAY),
(8, 'امیر کریمی', 'عالی بود! منتظر مطالب بعدی هستم.', 'approved', NOW() - INTERVAL 2 DAY, NOW() - INTERVAL 2 DAY),
(9, 'مریم احمدی', 'خیلی مفید بود. ممنون!', 'pending', NOW() - INTERVAL 1 DAY, NOW() - INTERVAL 1 DAY),
(10, 'محمد حسینی', 'توضیحات خیلی واضح بود.', 'approved', NOW() - INTERVAL 12 HOUR, NOW() - INTERVAL 12 HOUR),

-- More comments with different statuses
(1, 'زهرا رضایی', 'این مطلب خیلی به درد من خورد.', 'rejected', NOW() - INTERVAL 1 DAY, NOW() - INTERVAL 1 DAY),
(2, 'علی محمدی', 'عالی! خیلی چیزهای جدید یاد گرفتم.', 'rejected', NOW() - INTERVAL 2 DAY, NOW() - INTERVAL 2 DAY),
(3, 'فاطمه نوری', 'ممنون از زحمات شما.', 'rejected', NOW() - INTERVAL 3 DAY, NOW() - INTERVAL 3 DAY),
(4, 'حسن کریمی', 'خیلی خوب توضیح دادید.', 'rejected', NOW() - INTERVAL 4 DAY, NOW() - INTERVAL 4 DAY),
(5, 'سارا احمدی', 'این مقاله خیلی کاربردی بود.', 'rejected', NOW() - INTERVAL 5 DAY, NOW() - INTERVAL 5 DAY);
