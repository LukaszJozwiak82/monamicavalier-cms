<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Post::create([
        //     'category_id' => 3,
        //     'title' => [
        //         'pl' => 'Baghira',
        //         'en' => 'Baghira',
        //     ],
        //     'value' => [
        //         'pl'=>'Baghira była u nas pierwsza i jest naszą  „miłością od pierwszego wejrzenia”. Pochodzi z renomowanej polskiej hodowli Maradeco King. Jest bardzo żywiołowym i wspaniale okazującym emocje psiakiem, inteligentnym i starającym się cały czas kontrolować otoczenie. Nigdy nie ma dosyć głaskania i pieszczot.  Towarzyszy nam nieodłącznie we wszystkich zajęciach domowych. Ma zdrowe serduszko i rzepki – badania w załaczeniu. Jej rodzice jak i ona sa wolni od chorób genetycznych typowych dla cavalierów.',
        //         'en' => 'Baghira is our first cavalier and our "love at first sight". She comes from a renowned Polish kennel - Maradeco King. She is a very lively, positively charged, and emotionally beautiful pooch; she is very intelligent, always trying to control her surroundings. There is no such thing as too much stroking and caressing for her. She accompanies us inextricably in all household chores. She has a healthy heart and a healthy patella - tests included (see photographs on this page for details). Baghira and her parents are free from genetic diseases specific to cavaliers.'
        //     ]
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'title' => [
        //         'pl' => 'Sabrinka',
        //         'en' => 'Sabrinka'
        //     ],
        //     'value' => [
        //         'pl'=>'Sabrinka pojawiła się u nas jako druga. Przywieźliśmy ją z odległej, znanej i renomowanej niemieckiej hodowli „vom Kaninchengarten”.',
        //         'en' => 'Sabrinka is our second cavalier. We brought her from a very distant, known and reputable, German kennel "vom Kaninchengarten".'
        //     ]
        // ]);

        Post::create([
            'category_id' => 2,
            'title' => [
                'pl' => 'About',
                'en' => 'About',
            ],
            'value' => [
                'pl'=>'Jesteśmy początkującą, rodzinną  hodowlą psów rasy Cavalier Kings Charles Spaniel. Należymy do jedynej uznanej i prawdziwej organizacji kynologicznej
                Związku Kynologicznego w Polsce ( ZKwP ) zrzeszonej w międzynarodowej federacji kynologicznej FCI. Oznacza to, że szczenięta,
                które rodzą się u nas są RASOWE- otrzymują od nas rodowód swojego pochodzenia, w którym wymienieni są przodkowie do piątego pokolenia.
                Obecnie w hodowli posiadamy dwie suczki: Baghira Maradeco King i Caipirincha vom Kaninchengarten. \n<div class=\"flex flex-wrap\">\n
                <div class=\"w-5/6 sm:w-1/2 p-6\">\n<p class=\"text-gray-600 mb-8 text-justify\">\nPochodzą one z renomowanych hodowli z Polski i z Niemiec.
                Obie suczki są zdrowe, przebadane w kierunku występujących u cavalierów chorób.Jak większość cavalierów posiadają bardzo przyjazny i towarzyski charakter,
                nie mają w sobie śladu agresji, są wspaniałymi towarzyszkami dla dorosłych i dla dzieci. \n </div>\n     <div class=\"w-full sm:w-2/4 p-6\">\n
                <img class=\" rounded-t w-full md:w-4/5 z-50\" src=\"/../img/dog.jpg\" />\n     </div>\n    </div>\n     <div class=\"align-middle\">\n
                p class=\"text-gray-600 mb-8 text-justify\">\nPlanujemy szczeniaki pochodzące od najwyższej klasy psów, a szczenięta będą odchowywane w domowej,
                rodzinnej atmosferze. Nie zamierzamy robić miotów komercyjnych, co oznacza , że szczeniaki będą pojawiać się u nas rzadko, a osoby które zdecydują się na wzięcie
                szczeniaczka od nas mogą być pewne, że był on otoczony troskliwa opieka i miłością.  Prosimy o przemyślane decyzje odnośnie posiadania psa.
                Traktujemy nasze psy jak członków rodziny i takich też rodzin poszukujemy dla naszych szczeniąt. Posiadanie psa wiąże się z dużą radością ale też z wieloma obowiązkami.
                Zapraszamy do przeglądania naszej strony.\n<br /></p></div>',
                'en' => 'We are an aspiring family kennel of Cavalier Kings Charles Spaniel dogs. We are members of the only officially recognized cynological organization,
                the Kennel Club of Poland (ZKwP), associated with the FCI World Canine Organization (Fédération Cynologique International).
                This means that the puppies born with us are PUREBRED – and they receive an official pedigree certificate of their ancestry,
                in which ancestors up to the fifth generation are listed.
                We currently have two females in our kennel: Baghira Maradeco King and Caipirinha vom Kaninchengarten.
                \n<div class=\"flex flex-wrap\">\n <div class=\"w-5/6 sm:w-1/2 p-6\">\n<p class=\"text-gray-600 mb-8 text-justify\">\nBoth females come from reputable kennels
                from Poland (Baghira) and Germany (Caipirinha). They are healthy and tested for cavalier related diseases. Like most cavaliers, they have a very friendly
                and sociable personalities, have no trace of aggression, and are great companions for adults and children. \n</div>\n     <div class=\"w-full sm:w-2/4 p-6\">\n
                <img class=\" rounded-t w-full md:w-4/5 z-50\" src=\"/../img/dog.jpg\" />\n     </div>\n    </div>\n
                 <div class=\"align-middle\">\n     <p class=\"text-gray-600 mb-8 text-justify\">\nWe are planning puppies from top-class dogs,
                 and the puppies will be raised in a home, family atmosphere. We do not intend to make commercial litters, which means that puppies will rarely come to us,
                 and people who decide to take a puppy from us can be sure that that he was surrounded by tender care and love. Please make informed decisions about dog ownership.
                 We treat our dogs as family members and we are looking for such families for our puppies. Having a dog is associated with a lot of joy, but also with many
                 responsibilities. We invite you to browse our website.\n<br /></p></div>'
            ]
        ]);
    }
}
