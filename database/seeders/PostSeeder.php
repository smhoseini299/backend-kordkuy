<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // More diverse posts about technology
        $posts = [
            [
                'title' => 'آموزش کامل Node.js از صفر تا صد',
                'content' => 'Node.js یکی از محبوب‌ترین runtime های JavaScript است که امکان اجرای کد JavaScript در سمت سرور را فراهم می‌کند. در این آموزش کامل، از مفاهیم اولیه تا پیشرفته Node.js را یاد می‌گیرید. از Express.js تا MongoDB، از WebSocket تا RESTful API، همه چیز را پوشش می‌دهیم.',
                'slug' => 'complete-nodejs-tutorial-zero-to-hero',
            ],
            [
                'title' => 'راهنمای کامل TypeScript برای توسعه‌دهندگان JavaScript',
                'content' => 'TypeScript یک superset از JavaScript است که type safety را به کد شما اضافه می‌کند. در این راهنمای کامل، با مفاهیم TypeScript، interfaces، generics، decorators و integration با فریمورک‌های مختلف آشنا می‌شویم.',
                'slug' => 'complete-typescript-guide-javascript-developers',
            ],
            [
                'title' => 'مقدمه‌ای بر Microservices Architecture',
                'content' => 'معماری Microservices یکی از الگوهای مهم در توسعه نرم‌افزارهای بزرگ است. در این مقاله با مفاهیم، مزایا، معایب و نحوه پیاده‌سازی Microservices آشنا می‌شویم. همچنین ابزارهای مفید برای مدیریت این معماری را بررسی می‌کنیم.',
                'slug' => 'introduction-microservices-architecture',
            ],
            [
                'title' => 'آموزش GraphQL: آینده API ها',
                'content' => 'GraphQL یک query language و runtime برای API ها است که توسط Facebook توسعه یافته. در این آموزش با مفاهیم GraphQL، Schema Definition Language، Resolvers و integration با فریمورک‌های مختلف آشنا می‌شویم.',
                'slug' => 'graphql-tutorial-future-of-apis',
            ],
            [
                'title' => 'بهترین روش‌های Performance Optimization در Frontend',
                'content' => 'بهینه‌سازی عملکرد در frontend یکی از مهم‌ترین جنبه‌های توسعه وب است. در این مقاله با روش‌های مختلف بهینه‌سازی، از code splitting تا lazy loading، از caching تا image optimization آشنا می‌شویم.',
                'slug' => 'frontend-performance-optimization-best-practices',
            ],
            [
                'title' => 'آموزش کامل Kubernetes برای DevOps',
                'content' => 'Kubernetes یک container orchestration platform است که مدیریت و deployment اپلیکیشن‌های containerized را آسان می‌کند. در این آموزش کامل، از مفاهیم اولیه تا advanced topics Kubernetes را یاد می‌گیرید.',
                'slug' => 'complete-kubernetes-tutorial-devops',
            ],
            [
                'title' => 'مقایسه Database ها: SQL vs NoSQL',
                'content' => 'انتخاب نوع دیتابیس یکی از تصمیمات مهم در طراحی سیستم است. در این مقاله انواع مختلف دیتابیس‌ها، مزایا و معایب هر کدام، و نحوه انتخاب مناسب برای پروژه‌های مختلف را بررسی می‌کنیم.',
                'slug' => 'database-comparison-sql-vs-nosql',
            ],
            [
                'title' => 'آموزش Redis: Cache و Session Management',
                'content' => 'Redis یک in-memory data structure store است که به عنوان database، cache و message broker استفاده می‌شود. در این آموزش با مفاهیم Redis، data types، persistence و کاربردهای مختلف آن آشنا می‌شویم.',
                'slug' => 'redis-tutorial-cache-session-management',
            ],
            [
                'title' => 'راهنمای کامل Testing در Laravel',
                'content' => 'Testing یکی از مهم‌ترین جنبه‌های توسعه نرم‌افزار است. Laravel ابزارهای قدرتمندی برای testing فراهم می‌کند. در این راهنمای کامل، با Unit Testing، Feature Testing، Database Testing و Mocking در Laravel آشنا می‌شویم.',
                'slug' => 'complete-laravel-testing-guide',
            ],
            [
                'title' => 'آموزش Vue.js 3 Composition API',
                'content' => 'Vue.js 3 با Composition API جدید، روش جدیدی برای نوشتن component ها ارائه می‌دهد. در این آموزش با Composition API، reactivity system، lifecycle hooks و migration از Options API آشنا می‌شویم.',
                'slug' => 'vuejs-3-composition-api-tutorial',
            ],
        ];

        // More comment authors
        $commentAuthors = [
            'احمد رضایی', 'زهرا محمدی', 'علی کریمی', 'فاطمه احمدی', 'محمد نوری',
            'مریم حسینی', 'حسن رضایی', 'سارا کریمی', 'رضا احمدی', 'نرگس محمدی',
            'حسین نوری', 'مینا رضایی', 'امیر کریمی', 'مریم احمدی', 'محمد حسینی',
            'زهرا رضایی', 'علی محمدی', 'فاطمه نوری', 'حسن کریمی', 'سارا احمدی'
        ];

        // More diverse comment contents
        $commentContents = [
            'پست بسیار مفیدی بود. ممنون از شما!',
            'خیلی عالی بود. منتظر پست‌های بعدی هستم.',
            'مطالب خوبی ارائه دادید.',
            'عالی! خیلی کاربردی بود.',
            'ممنون از توضیحات کامل شما.',
            'خیلی مفصل و خوب توضیح دادید.',
            'این مطلب خیلی به درد من خورد.',
            'عالی بود! لطفاً بیشتر از این مطالب بذارید.',
            'خیلی خوب و قابل فهم بود.',
            'ممنون از زحمات شما.',
            'بسیار آموزنده بود.',
            'خیلی عالی! منتظر مطالب بعدی هستم.',
            'مطالب خیلی خوبی ارائه می‌دید.',
            'عالی بود! خیلی استفاده کردم.',
            'خیلی مفید بود. ممنون!',
            'توضیحات خیلی واضح و مفصل بود.',
            'این مقاله خیلی به درد من خورد.',
            'عالی! خیلی چیزهای جدید یاد گرفتم.',
            'ممنون از زحمات شما. خیلی مفید بود.',
            'خیلی خوب توضیح دادید. ممنون!',
            'این مطلب خیلی کاربردی بود.',
            'عالی بود! منتظر مطالب بعدی هستم.',
            'خیلی مفصل و خوب بود.',
            'ممنون از توضیحات کامل.',
            'این مقاله خیلی آموزنده بود.'
        ];

        foreach ($posts as $postData) {
            $post = Post::create($postData);
            
            // Create random number of comments for each post (3-10 comments)
            $commentCount = rand(3, 10);
            
            for ($i = 0; $i < $commentCount; $i++) {
                $status = ['approved', 'pending', 'rejected'][rand(0, 2)];
                // Make sure at least 3 comments are approved for each post
                if ($i < 3) {
                    $status = 'approved';
                }
                
                Comment::create([
                    'post_id' => $post->id,
                    'author_name' => $commentAuthors[array_rand($commentAuthors)],
                    'content' => $commentContents[array_rand($commentContents)],
                    'status' => $status,
                    'created_at' => now()->subDays(rand(1, 60)),
                ]);
            }
        }

        // Create some additional standalone comments with different statuses
        for ($i = 0; $i < 25; $i++) {
            Comment::create([
                'post_id' => rand(1, count($posts)),
                'author_name' => $commentAuthors[array_rand($commentAuthors)],
                'content' => $commentContents[array_rand($commentContents)],
                'status' => ['approved', 'pending', 'rejected'][rand(0, 2)],
                'created_at' => now()->subDays(rand(1, 90)),
            ]);
        }
    }
}
