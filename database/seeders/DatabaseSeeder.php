<?php

namespace Database\Seeders;

use App\Models\Locale;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => bcrypt('12345')
        ]);

        $locTitles = ['English', 'Русский'];
        $locValues = ['en', 'ru'];
        
        for($i=0; $i<count($locTitles); $i++) {
            $locale = new Locale();
            $locale->title = $locTitles[$i];
            $locale->value = $locValues[$i];
            $locale->save();
        }

        $post = new Post();
        $post->save();

        $post->translation('en')->update([
            'title' => 'Sample post title #1',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ]);

        $post->translation('ru')->update([
            'title' => 'Заголовок поста #1',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using `Content here, content here`, making it look like readable English.'
        ]);
    }
}