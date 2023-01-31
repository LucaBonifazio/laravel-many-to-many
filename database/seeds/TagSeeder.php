<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'php', 'Laravel', 'VueJs', 'Cucina Moderna', 'Piatti tipici', 'Acqua minerale', 'Roma', 'Torino', 'Valle d\'Aosta',
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'slug' => Tag::getSlug($tag),
                'name' => $tag,
            ]);
        }
    }
}
