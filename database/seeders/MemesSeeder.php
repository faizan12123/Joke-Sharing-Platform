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
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => "How many programmers does it take to change a light bulb? None, because it is a hardware problem.",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => " How many types of people are there in the world? There are 10 types of people in the world: those who understand binary and those who do not.",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => "Why did the boy get fired from his keyboard factory job? Because he was not doing enough shifts.",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => " What do you call an iPhone that sleeps too much? Dead Siri-ous.",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => " What made the JavaScript developer so sad? He did not Node how to Express himself.",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => "Why was the mobile phone wearing glasses? Because it lost its contacts.",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => "Why did the developer become so poor? Because he used up all his cache.",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => "What did the computer have during his break time? He had a byte!",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => "What kind of computer sings the best? A Dell.",
            ],
            [
                "name" => "faizan",
                "genre" => "Tech",
                "joke" => "What was the spider doing on the computer? He was making a web-site!",
            ],
            [
                "name" => "faizan",
                "genre" => "Business",
                "joke" => "I just started a business where we specialize in weighing tiny objects. Its a small scale operation.",
            ],
            [
                "name" => "faizan",
                "genre" => "Business",
                "joke" => "I tried to start a hot air ballooning business but it never took off.",
            ],
            [
                "name" => "faizan",
                "genre" => "Business",
                "joke" => "What sort of money do need if you want to start your own landscaping business? A hedge fund.",
            ],
            [
                "name" => "faizan",
                "genre" => "Business",
                "joke" => "Ive started a business making boats in my attic. Sails are going through the roof.",
            ],
            [
                "name" => "faizan",
                "genre" => "Business ",
                "joke" => "I used to be a doctor but then I lost patients.",
            ],
            [
                "name" => "faizan",
                "genre" => "Business",
                "joke" => "I used to be a banker but I lost interest.",
            ],
            [
                "name" => "faizan",
                "genre" => "Business",
                "joke" => "I used to own a donut making company, but I got fed up of the hole business.",
            ],
            [
                "name" => "faizan",
                "genre" => "Business",
                "joke" => "My boss asked me to make a presentation and said I should start it with a joke. So I put my payslip on the first slide.",
            ],
            [
                "name" => "faizan",
                "genre" => "Biology",
                "joke" => "Why did the biologist break up with the physicist? They had no chemistry.",
            ],
            [
                "name" => "faizan",
                "genre" => "Biology",
                "joke" => "What did the cell say when he ran into the table? Mitosis!",
            ],
            [
                "name" => "faizan",
                "genre" => "Biology",
                "joke" => "Why wouldnt the scientist go into the haunted house? He was too petrified.",
            ],
            [
                "name" => "faizan",
                "genre" => "Biology",
                "joke" => "Why didnt anyone want the biologists new book? It was a hard cell.",
            ],
            [
                "name" => "faizan",
                "genre" => "Biology",
                "joke" => "What does a biologist tell you when you have to give blood? B positive!",
            ],
            [
                "name" => "faizan",
                "genre" => "Biology",
                "joke" => "Why did the woman break up with the biologist? He was too cell-fish.",
            ],
            [
                "name" => "faizan",
                "genre" => "Other",
                "joke" => "How was the nurse's advice on Q-tips received? It went inside one ear and out of the other.",
            ],
            [
                "name" => "faizan",
                "genre" => "Other",
                "joke" => "What did the nurse advise the patient got heartburn after eating a birthday cake? She advised him to take the candles off first.",
            ],
            [
                "name" => "faizan",
                "genre" => "Other",
                "joke" => "What did the behaviorist ask the other behaviorist when he bumped into him on the street? How am I performing today?",
            ],
            [
                "name" => "faizan",
                "genre" => "Other",
                "joke" => "What is a boat full of psychiatrists labeled as? Freudian ship.",
            ],
            [
                "name" => "faizan",
                "genre" => "Other",
                "joke" => "What did the retired hippocampus tell all of his clients? Thank you for all of the memories.",
            ],
            
            
        ];
        DB::table('memes')->insert($memes);
    }
    
}
