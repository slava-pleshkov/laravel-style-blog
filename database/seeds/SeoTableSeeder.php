<?php

use Illuminate\Database\Seeder;
use App\Seo;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new Seo();
        $home->description = 'Description wordsmith';
        $home->keyword = 'Keyword wordsmith';
        $home->url = 'http://wordsmith.local/';
        $home->save();

        $blog = new Seo();
        $blog->description = 'Description wordsmith';
        $blog->keyword = 'Keyword wordsmith';
        $blog->url = '/';
        $blog->save();

        $about = new Seo();
        $about->description = 'Description about';
        $about->keyword = 'Keyword about';
        $about->url = 'http://wordsmith.local/about';
        $about->save();

        $contact = new Seo();
        $contact->description = 'Description contact';
        $contact->keyword = 'Keyword contact';
        $contact->url = 'http://wordsmith.local/contact';
        $contact->save();
    }
}