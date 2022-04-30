<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memes = [
            [
                "name" => "faizOff",
                "genre" => "Tech",
                "joke" => "How many programmers does it take to change a light bulb? None, because it is a hardware problem.",
            ],
            [
                "name" => "faizAN",
                "genre" => "Tech",
                "joke" => " How many types of people are there in the world? There are 10 types of people in the world: those who understand binary and those who do not.",
            ],
            [
                "name" => "faiz",
                "genre" => "Tech",
                "joke" => "Why did the boy get fired from his keyboard factory job? Because he was not doing enough shifts.",
            ],
            [
                "name" => "faiz",
                "genre" => "Tech",
                "joke" => " What do you call an iPhone that sleeps too much? Dead Siri-ous.",
            ],
            [
                "name" => "faiz",
                "genre" => "Tech",
                "joke" => " What made the JavaScript developer so sad? He did not Node how to Express himself.",
            ],
            [
                "name" => "faiz",
                "genre" => "Tech",
                "joke" => "Why was the mobile phone wearing glasses? Because it lost its contacts.",
            ],
            [
                "name" => "faiz",
                "genre" => "Tech",
                "joke" => "Why did the developer become so poor? Because he used up all his cache.",
            ],
            [
                "name" => "faiz",
                "genre" => "Tech",
                "joke" => "What did the computer have during his break time? He had a byte!",
            ],
            [
                "name" => "faiz",
                "genre" => "Tech",
                "joke" => "What kind of computer sings the best? A Dell.",
            ],
            [
                "name" => "faiz",
                "genre" => "Tech",
                "joke" => "What was the spider doing on the computer? He was making a web-site!",
            ],
            [
                "name" => "faiz",
                "genre" => "Business",
                "joke" => "I just started a business where we specialize in weighing tiny objects. Its a small scale operation.",
            ],
            [
                "name" => "faiz",
                "genre" => "Business",
                "joke" => "I tried to start a hot air ballooning business but it never took off.",
            ],
            [
                "name" => "faiz",
                "genre" => "Business",
                "joke" => "What sort of money do need if you want to start your own landscaping business? A hedge fund.",
            ],
            [
                "name" => "faiz",
                "genre" => "Business",
                "joke" => "Ive started a business making boats in my attic. Sails are going through the roof.",
            ],
            [
                "name" => "faiz",
                "genre" => "Business ",
                "joke" => "I used to be a doctor but then I lost patients.",
            ],
            [
                "name" => "faiz",
                "genre" => "Business",
                "joke" => "I used to be a banker but I lost interest.",
            ],
            [
                "name" => "faiz",
                "genre" => "Business",
                "joke" => "I used to own a donut making company, but I got fed up of the hole business.",
            ],
            [
                "name" => "faiz",
                "genre" => "Business",
                "joke" => "My boss asked me to make a presentation and said I should start it with a joke. So I put my payslip on the first slide.",
            ],
            [
                "name" => "faiz",
                "genre" => "Biology",
                "joke" => "Why did the biologist break up with the physicist? They had no chemistry.",
            ],
            [
                "name" => "faiz",
                "genre" => "Biology",
                "joke" => "What did the cell say when he ran into the table? Mitosis!",
            ],
            [
                "name" => "faiz",
                "genre" => "Biology",
                "joke" => "Why wouldnt the scientist go into the haunted house? He was too petrified.",
            ],
            [
                "name" => "faiz",
                "genre" => "Biology",
                "joke" => "Why didnt anyone want the biologists new book? It was a hard cell.",
            ],
            [
                "name" => "faiz",
                "genre" => "Biology",
                "joke" => "What does a biologist tell you when you have to give blood? B positive!",
            ],
            [
                "name" => "faiz",
                "genre" => "Biology",
                "joke" => "Why did the woman break up with the biologist? He was too cell-fish.",
            ],
            
            
        ];
        DB::table('memes')->insert($memes);
    }
    
}
