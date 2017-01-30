<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@admin.ru',
                'password' =>  bcrypt('admin'),
                'created_at'=>time()
        ]);

        DB::table('tree')->insert([
            'lft' => 1,
            'rgt' => 26,
            'depth' => 0,
            'lang' => 'ru',
            'title' => 'Главная страница',
            'template' => 'index',
            'active' => 1,
            'in_menu' => 0,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 1,
            'lft' => 2,
            'rgt' => 11,
            'depth' => 1,
            'lang' => 'ru',
            'slug' => 'about',
            'title' => 'О компании',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 2,
            'lft' => 3,
            'rgt' => 4,
            'depth' => 2,
            'lang' => 'ru',
            'slug' => 'polikristallicheskiy-modules3',
            'title' => 'Поликристалические модули3',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 2,
            'lft' => 5,
            'rgt' => 6,
            'depth' => 2,
            'lang' => 'ru',
            'slug' => 'polikristallicheskiy-modules2',
            'title' => 'Поликристалические модули2',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 2,
            'lft' => 7,
            'rgt' => 8,
            'depth' => 2,
            'lang' => 'ru',
            'slug' => 'active-product',
            'title' => 'Активный продукт',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 2,
            'lft' => 9,
            'rgt' => 10,
            'depth' => 2,
            'lang' => 'ru',
            'slug' => 'where-buy',
            'title' => 'Где купить',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 1,
            'lft' => 12,
            'rgt' => 17,
            'depth' => 1,
            'lang' => 'ru',
            'slug' => 'catalog',
            'title' => 'Каталог продукции',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 7,
            'lft' => 13,
            'rgt' => 14,
            'depth' => 2,
            'lang' => 'ru',
            'slug' => 'polycrystalline-modules',
            'title' => 'Поликристалические модули',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 7,
            'lft' => 15,
            'rgt' => 16,
            'depth' => 2,
            'lang' => 'ru',
            'slug' => 'monokristalicheskie-modules',
            'title' => 'Монокристалические модули',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 1,
            'lft' => 18,
            'rgt' => 19,
            'depth' => 1,
            'lang' => 'ru',
            'slug' => 'about-solar-modules',
            'title' => 'О солнечных модулях',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 1,
            'lft' => 20,
            'rgt' => 21,
            'depth' => 1,
            'lang' => 'ru',
            'slug' => 'technologies',
            'title' => 'Технологии',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 1,
            'lft' => 22,
            'rgt' => 23,
            'depth' => 1,
            'lang' => 'ru',
            'slug' => 'projects',
            'title' => 'Проекты',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('tree')->insert([
            'parent_id' => 1,
            'lft' => 24,
            'rgt' => 25,
            'depth' => 1,
            'lang' => 'ru',
            'slug' => 'contacts',
            'title' => 'Контактная информация',
            'template' => 'inner',
            'active' => 1,
            'in_menu' => 1,
            'created_at' => '2017-01-27 10:50:18',
            'updated_at' => '2017-01-27 12:12:11'
        ]);

        DB::table('settings')->insert([
            'key'   => 'slider_interval',
            'value' => 4000
        ]);
    }
}
