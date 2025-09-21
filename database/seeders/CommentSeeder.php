<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all posts
        $posts = Post::all();
        
        if ($posts->isEmpty()) {
            return;
        }

        // Extended comment authors
        $commentAuthors = [
            'علی احمدی', 'مریم رضایی', 'حسن محمدی', 'فاطمه کریمی', 'محمد رضایی',
            'زهرا نوری', 'امیر حسینی', 'سارا احمدی', 'رضا محمدی', 'نرگس کریمی',
            'حسین رضایی', 'مینا احمدی', 'علی محمدی', 'مریم کریمی', 'محمد نوری',
            'احمد رضایی', 'زهرا محمدی', 'علی کریمی', 'فاطمه احمدی', 'محمد نوری',
            'مریم حسینی', 'حسن رضایی', 'سارا کریمی', 'رضا احمدی', 'نرگس محمدی',
            'حسین نوری', 'مینا رضایی', 'امیر کریمی', 'مریم احمدی', 'محمد حسینی',
            'زهرا رضایی', 'علی محمدی', 'فاطمه نوری', 'حسن کریمی', 'سارا احمدی',
            'مهدی رضایی', 'نازنین محمدی', 'کامران کریمی', 'لیلا احمدی', 'بهرام نوری'
        ];

        // Extended comment contents
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
            'این مقاله خیلی آموزنده بود.',
            'خیلی عالی! خیلی استفاده کردم.',
            'مطالب خیلی خوبی ارائه می‌دید.',
            'عالی بود! منتظر مطالب بعدی هستم.',
            'خیلی مفید بود. ممنون!',
            'توضیحات خیلی واضح بود.',
            'این مطلب خیلی به درد من خورد.',
            'عالی! خیلی چیزهای جدید یاد گرفتم.',
            'ممنون از زحمات شما.',
            'خیلی خوب توضیح دادید.',
            'این مقاله خیلی کاربردی بود.',
            'عالی بود! منتظر مطالب بعدی هستم.',
            'خیلی مفصل و خوب بود.',
            'ممنون از توضیحات کامل.',
            'این مقاله خیلی آموزنده بود.',
            'خیلی عالی! خیلی استفاده کردم.'
        ];

        // Create additional comments for existing posts
        foreach ($posts as $post) {
            // Add 5-15 more comments to each post
            $additionalComments = rand(5, 15);
            
            for ($i = 0; $i < $additionalComments; $i++) {
                $status = ['approved', 'pending', 'rejected'][rand(0, 2)];
                
                Comment::create([
                    'post_id' => $post->id,
                    'author_name' => $commentAuthors[array_rand($commentAuthors)],
                    'content' => $commentContents[array_rand($commentContents)],
                    'status' => $status,
                    'created_at' => now()->subDays(rand(1, 120)),
                ]);
            }
        }

        // Create some random standalone comments
        for ($i = 0; $i < 50; $i++) {
            Comment::create([
                'post_id' => $posts->random()->id,
                'author_name' => $commentAuthors[array_rand($commentAuthors)],
                'content' => $commentContents[array_rand($commentContents)],
                'status' => ['approved', 'pending', 'rejected'][rand(0, 2)],
                'created_at' => now()->subDays(rand(1, 180)),
            ]);
        }
    }
}
