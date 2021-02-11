<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
           'question' =>'Where and how can I use the HZ student card?',
           'answer' =>"The HZ student card can be used by topping it up using the machine located next to the help desk at the entrance of the campus. Once you've put cash on the card, you can scan it at the printer, coffee and vending machines and lockers ",
           'link'=> NULL
        ]);

        DB::table('faqs')->insert([
            'question' =>' How can you print a document from your laptop at HZ? ',
            'answer' =>" To print at HZ, you have to have a student identification card. You scan in and then proceed to print.  ",
            'link'=> NULL
        ]);

        DB::table('faqs')->insert([
            'question' =>' What do you need to do when you are sick / show symptoms of coronavirus? ',
            'answer' =>"Refrain from visiting the campus and get in contact with one of the study coaches to inform them of your situation. ",
            'link'=> "https://coronatest.nl/"
        ]);

        DB::table('faqs')->insert([
            'question' =>' How can you book a project space in one of the wings? ',
            'answer' =>"To book a project room in one of the wings, you go to the hz.nl portal > self service portal and then click, 'new reservation'. ",
            'link'=> "https://topdesk.hz.nl/tas/public/ssp/"
        ]);

        DB::table('faqs')->insert([
            'question' =>' What are the instructions if you want to park your car at the HZ parking lot? ',
            'answer' =>"To park in the HZ parking lot, you also need to use your student ID at the front gate's scanner. ",
            'link'=> NULL
        ]);
    }
}
