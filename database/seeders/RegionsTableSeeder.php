<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            [
                'name' => 'Kandy',
                'image' => 'assets/images/kandy/pexels-eugene-dorosh-230277-739409.jpg',
                'description' => 'The cultural capital of Sri Lanka, home to the sacred Temple of the Tooth and surrounded by lush hills. Experience traditional Kandyan dance and explore the beautiful Royal Botanical Gardens.',
                'tags' => 'Cultural Heritage,Hill Country',
            ],
            [
                'name' => 'Down South',
                'image' => 'assets/images/down-south/pexels-freestockpro-319948.jpg',
                'description' => 'Historic Galle Fort, pristine beaches of Unawatuna and Mirissa, and excellent whale watching opportunities. Perfect for beach lovers and history enthusiasts alike.',
                'tags' => 'Beaches,Colonial History',
            ],
            [
                'name' => 'Nuwara Eliya',
                'image' => 'assets/images/nuware-eliya/pexels-sarath-de-vass-gunawardane-3523665-5328041.jpg',
                'description' => "Known as 'Little England', this cool hill station features tea plantations, colonial architecture, and fresh strawberries. Perfect for escaping the tropical heat.",
                'tags' => 'Tea Country,Cool Climate',
            ],
            [
                'name' => 'Ella',
                'image' => 'assets/images/ella/pexels-freestockpro-321569.jpg',
                'description' => "A charming hill country town famous for the Nine Arches Bridge, Ella Rock, and Little Adam's Peak. Popular with backpackers and nature lovers.",
                'tags' => 'Hiking,Scenic Views',
            ],
            [
                'name' => 'Sigiriya & Dambulla',
                'image' => 'assets/images/sigiriya/pexels-iakub-arifulin-205356454-11994203.jpg',
                'description' => "Ancient rock fortress of Sigiriya and the magnificent cave temples of Dambulla. UNESCO World Heritage sites showcasing Sri Lanka's ancient civilization.",
                'tags' => 'Ancient Sites,UNESCO Heritage',
            ],
            [
                'name' => 'Jaffna',
                'image' => 'assets/images/jaffna/pexels-amith-anuradha-3230049-7927514.jpg',
                'description' => 'The cultural heart of Tamil Sri Lanka, featuring historic temples, Dutch colonial architecture, and unique cuisine including the famous Jaffna crab curry.',
                'tags' => 'Tamil Culture,Unique Cuisine',
            ],
            [
                'name' => 'Anuradhapura',
                'image' => 'assets/images/anuradhapura/pexels-kalpa-chathuranga-3828233-6840389.jpg',
                'description' => 'Ancient capital of Sri Lanka with magnificent stupas, the sacred Bodhi Tree, and extensive ruins spanning over 1,000 years of history.',
                'tags' => 'Ancient Capital,Buddhist Heritage',
            ],
            [
                'name' => 'Trincomalee & Nilaveli',
                'image' => 'assets/images/Trincomalee & Nilaveli/pexels-h-m-r-b-h-s-bandara-3420216-5106967.jpg',
                'description' => 'Pristine beaches, excellent diving and snorkeling, whale watching, and the historic Koneswaram Temple perched on a cliff overlooking the ocean.',
                'tags' => 'Pristine Beaches,Diving',
            ],
            [
                'name' => 'Colombo',
                'image' => 'assets/images/colombo/pexels-jalitha-hewage-1324742-2547175.jpg',
                'description' => 'The bustling commercial capital with modern shopping, colonial architecture, vibrant markets, and the best street food including authentic kottu roti.',
                'tags' => 'Urban,Street Food',
            ],
            [
                'name' => 'Arugam Bay & East Coast',
                'image' => 'assets/images/Arugam Bay & East Coast/pexels-freestockpro-11266598.jpg',
                'description' => 'World-renowned surfing destination with laid-back beach vibes, wildlife safaris in nearby national parks, and fresh seafood by the ocean.',
                'tags' => 'Surfing,Wildlife',
            ],
        ]);
    }
}
