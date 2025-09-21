<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the PostSeeder
        $this->call(PostSeeder::class);
        
        // Call the CommentSeeder
        $this->call(CommentSeeder::class);
        
        // Create sample posts with more variety
        $posts = [
            [
                'title' => 'خوش آمدید به وبلاگ تکنولوژی ما',
                'content' => 'این اولین پست وبلاگ ما است. در اینجا می‌توانید مطالب جالب و مفیدی درباره تکنولوژی، برنامه‌نویسی و موضوعات مختلف بخوانید. ما سعی می‌کنیم بهترین محتوا را برای شما فراهم کنیم.',
                'slug' => 'welcome-to-our-tech-blog',
            ],
            [
                'title' => 'آموزش Laravel برای مبتدیان - قسمت اول',
                'content' => 'Laravel یکی از محبوب‌ترین فریمورک‌های PHP است که برای توسعه اپلیکیشن‌های وب استفاده می‌شود. در این پست با اصول اولیه Laravel آشنا می‌شویم. Laravel با استفاده از الگوی MVC، توسعه را آسان‌تر می‌کند.',
                'slug' => 'laravel-tutorial-beginners-part1',
            ],
            [
                'title' => 'نکات مهم در React Development',
                'content' => 'React یک کتابخانه قدرتمند JavaScript برای ساخت رابط‌های کاربری است. در این مقاله نکات مهمی برای توسعه بهتر با React ارائه می‌دهیم. از hooks تا performance optimization.',
                'slug' => 'important-tips-react-development',
            ],
            [
                'title' => 'مقدمه‌ای بر Docker و Containerization',
                'content' => 'Docker یکی از ابزارهای مهم در دنیای DevOps است. با استفاده از Docker می‌توانید اپلیکیشن‌های خود را در محیط‌های مختلف به راحتی deploy کنید. در این مقاله با مفاهیم اولیه Docker آشنا می‌شویم.',
                'slug' => 'introduction-docker-containerization',
            ],
            [
                'title' => 'بهترین روش‌های SEO برای وب‌سایت‌ها',
                'content' => 'SEO یا بهینه‌سازی موتور جستجو یکی از مهم‌ترین جنبه‌های توسعه وب است. در این مقاله بهترین روش‌های SEO را بررسی می‌کنیم و نکات کاربردی ارائه می‌دهیم.',
                'slug' => 'best-seo-practices-websites',
            ],
            [
                'title' => 'آموزش Git و GitHub برای توسعه‌دهندگان',
                'content' => 'Git یکی از ابزارهای ضروری برای هر توسعه‌دهنده است. در این مقاله با مفاهیم اولیه Git، branching، merging و کار با GitHub آشنا می‌شویم.',
                'slug' => 'git-github-tutorial-developers',
            ],
            [
                'title' => 'مقایسه فریمورک‌های JavaScript: React vs Vue vs Angular',
                'content' => 'در این مقاله سه فریمورک محبوب JavaScript را با هم مقایسه می‌کنیم. هر کدام مزایا و معایب خاص خود را دارند و انتخاب بین آن‌ها بستگی به نیاز پروژه دارد.',
                'slug' => 'javascript-frameworks-comparison',
            ],
            [
                'title' => 'آموزش API Design و RESTful Services',
                'content' => 'طراحی API یکی از مهارت‌های مهم برای توسعه‌دهندگان backend است. در این مقاله با اصول طراحی RESTful API و best practices آشنا می‌شویم.',
                'slug' => 'api-design-restful-services',
            ],
            [
                'title' => 'مقدمه‌ای بر Machine Learning و AI',
                'content' => 'هوش مصنوعی و یادگیری ماشین یکی از داغ‌ترین موضوعات تکنولوژی است. در این مقاله با مفاهیم اولیه ML و کاربردهای آن آشنا می‌شویم.',
                'slug' => 'introduction-machine-learning-ai',
            ],
            [
                'title' => 'بهترین روش‌های امنیت در توسعه وب',
                'content' => 'امنیت یکی از مهم‌ترین جنبه‌های توسعه وب است. در این مقاله با تهدیدات امنیتی رایج و روش‌های محافظت از وب‌سایت آشنا می‌شویم.',
                'slug' => 'web-security-best-practices',
            ],
        ];

        // Sample comment authors
        $commentAuthors = [
            'علی احمدی', 'مریم رضایی', 'حسن محمدی', 'فاطمه کریمی', 'محمد رضایی',
            'زهرا نوری', 'امیر حسینی', 'سارا احمدی', 'رضا محمدی', 'نرگس کریمی',
            'حسین رضایی', 'مینا احمدی', 'علی محمدی', 'مریم کریمی', 'محمد نوری'
        ];

        // Sample comment contents
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
            'خیلی مفید بود. ممنون!'
        ];

        foreach ($posts as $postData) {
            $post = Post::create($postData);
            
            // Create random number of comments for each post (2-8 comments)
            $commentCount = rand(2, 8);
            
            for ($i = 0; $i < $commentCount; $i++) {
                $status = ['approved', 'pending', 'rejected'][rand(0, 2)];
                // Make sure at least 2 comments are approved for each post
                if ($i < 2) {
                    $status = 'approved';
                }
                
                Comment::create([
                    'post_id' => $post->id,
                    'author_name' => $commentAuthors[array_rand($commentAuthors)],
                    'content' => $commentContents[array_rand($commentContents)],
                    'status' => $status,
                    'created_at' => now()->subDays(rand(1, 30)),
                ]);
            }
        }

        // Create some additional standalone comments
        for ($i = 0; $i < 15; $i++) {
            Comment::create([
                'post_id' => rand(1, count($posts)),
                'author_name' => $commentAuthors[array_rand($commentAuthors)],
                'content' => $commentContents[array_rand($commentContents)],
                'status' => ['approved', 'pending', 'rejected'][rand(0, 2)],
                'created_at' => now()->subDays(rand(1, 45)),
            ]);
        }
    }
}
