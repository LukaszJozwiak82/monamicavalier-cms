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
        Post::create([
            'category_id' => 3,
            'title' => [
                'pl' => 'Baghira',
                'en' => 'Baghira',
            ],
            'value' => [
                'pl'=>'Baghira była u nas pierwsza i jest naszą  „miłością od pierwszego wejrzenia”. Pochodzi z renomowanej polskiej hodowli Maradeco King. Jest bardzo żywiołowym i wspaniale okazującym emocje psiakiem, inteligentnym i starającym się cały czas kontrolować otoczenie. Nigdy nie ma dosyć głaskania i pieszczot.  Towarzyszy nam nieodłącznie we wszystkich zajęciach domowych. Ma zdrowe serduszko i rzepki – badania w załaczeniu. Jej rodzice jak i ona sa wolni od chorób genetycznych typowych dla cavalierów.',
                'en' => 'Baghira is our first cavalier and our "love at first sight". She comes from a renowned Polish kennel - Maradeco King. She is a very lively, positively charged, and emotionally beautiful pooch; she is very intelligent, always trying to control her surroundings. There is no such thing as too much stroking and caressing for her. She accompanies us inextricably in all household chores. She has a healthy heart and a healthy patella - tests included (see photographs on this page for details). Baghira and her parents are free from genetic diseases specific to cavaliers.'
            ]
        ]);

        Post::create([
            'category_id' => 3,
            'title' => [
                'pl' => 'Sabrinka',
                'en' => 'Sabrinka'
            ],
            'value' => [
                'pl'=>'Sabrinka pojawiła się u nas jako druga. Przywieźliśmy ją z odległej, znanej i renomowanej niemieckiej hodowli „vom Kaninchengarten”.',
                'en' => 'Sabrinka is our second cavalier. We brought her from a very distant, known and reputable, German kennel "vom Kaninchengarten".'
            ]
        ]);
    }
}
