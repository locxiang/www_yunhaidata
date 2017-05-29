<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categorys')->delete();

        \Models\Categorys::create([
            'category_name' => '公告',
            'category_parent' => 0,
            'category_flag' => 'bulletin',
        ]);

        \Models\Categorys::create([
            'category_name' => '新闻',
            'category_parent' => 0,
            'category_flag' => 'news',
        ]);

        \Models\Categorys::create([
            'category_name' => '综合',
            'category_parent' => 0,
            'category_flag' => 'default',
        ]);

        \Models\Categorys::create([
            'category_name' => '中标',
            'category_parent' => 0,
            'category_flag' => 'successful',
        ]);
        
        
    }
}