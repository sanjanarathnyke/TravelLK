<?php

namespace Database\Seeders;

use App\Models\Attraction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopAttractionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            1 => [ // Kandy
                'Temple of the Sacred Tooth Relic' => 'The most sacred Buddhist temple in Sri Lanka, housing a tooth relic of Buddha. Experience the daily rituals and evening ceremonies with traditional drumming.',
                'Royal Botanical Gardens, Peradeniya' => '147-acre botanical garden featuring over 4,000 species of plants, including a magnificent orchid house and giant bamboo collection.',
                'Kandy Lake' => 'Artificial lake in the heart of the city, perfect for peaceful walks with views of the temple and surrounding hills.',
                'Udawattakele Forest Reserve' => 'Historic forest sanctuary above the temple, offering nature trails and panoramic views of Kandy city.',
            ],
            2 => [ // Down South
                'Galle Fort' => 'Historic Dutch Fort offering colonial architecture and ocean views.',
                'Unawatuna Beach' => 'Palm-lined sandy beach popular for swimming and snorkeling.',
                'Mirissa Whale Watching' => 'Famous coastal town offering boat trips to see blue whales.',
                'Hikkaduwa Coral Reefs' => 'Snorkeling destination with shallow coral gardens and marine life.',
            ],
            3 => [ // Nuwara Eliya
                'Gregory Lake' => 'Popular spot for paddle boating and relaxing in cool climate.',
                'Hakgala Botanical Garden' => 'Beautiful garden with diverse flora nestled below a towering cliff.',
                'Lover’s Leap Waterfall' => 'Small but scenic waterfall with romantic folklore.',
                'Pedro Tea Estate' => 'Working tea plantation with guided tours and tea tasting.',
            ],
            4 => [ // Ella
                'Nine Arches Bridge' => 'An iconic colonial-era railway bridge surrounded by lush greenery and a famous Instagram spot.',
                'Little Adam’s Peak' => 'A short hike offering panoramic views of tea plantations and the Ella Gap.',
                'Ella Rock' => 'A challenging hike to a summit with sweeping valley views.',
                'Ravana Falls' => 'A picturesque waterfall linked to the legend of the Ramayana epic.',
            ],
            5 => [ // Sigiriya & Dambulla
                'Sigiriya Rock Fortress' => 'UNESCO World Heritage site with a royal palace built atop a massive rock.',
                'Dambulla Cave Temple' => 'A complex of Buddhist cave temples filled with ancient murals and statues.',
                'Pidurangala Rock' => 'An alternative to Sigiriya with equally stunning views.',
                'Sigiriya Museum' => 'A modern museum showcasing the history and architecture of Sigiriya.',
            ],
            6 => [ // Jaffna
                'Jaffna Fort' => 'A massive 17th-century fort built by the Portuguese and later expanded by the Dutch.',
                'Nallur Kandaswamy Temple' => 'One of the most significant Hindu temples in Sri Lanka.',
                'Casuarina Beach' => 'Peaceful beach ideal for swimming and sunsets.',
                'Jaffna Library' => 'Historic landmark and symbol of Tamil culture.',
            ],
            7 => [ // Anuradhapura
                'Ruwanwelisaya Stupa' => 'One of the largest and most sacred stupas in Sri Lanka.',
                'Sri Maha Bodhi Tree' => 'Sacred fig tree believed to be the world’s oldest with a known planting date.',
                'Jetavanaramaya Monastery' => 'Massive brick structure that was once one of the tallest buildings in the ancient world.',
                'Isurumuniya Temple' => 'Rock temple famous for its carvings, including the Lovers Statue.',
            ],
            8 => [ // Trincomalee & Nilaveli
                'Nilaveli Beach' => 'Pristine white sandy beach ideal for relaxation and snorkeling.',
                'Koneswaram Temple' => 'Historic Hindu temple perched on a cliff above the sea.',
                'Pigeon Island National Park' => 'Marine sanctuary with coral reefs and tropical fish.',
                'Hot Water Wells of Kanniya' => 'Ancient hot spring complex with cultural and medicinal value.',
            ],
            9 => [ // Colombo
                'Galle Face Green' => 'Popular oceanfront urban park perfect for evening walks.',
                'Independence Memorial Hall' => 'Historic monument celebrating Sri Lanka’s independence.',
                'Colombo National Museum' => 'Houses artifacts reflecting Sri Lankan history and heritage.',
                'Pettah Market' => 'Bustling open market known for street food and shopping.',
            ],
            10 => [ // Arugam Bay & East Coast
                'Arugam Bay Beach' => 'World-famous surfing hotspot with chilled beach vibes.',
                'Panama Crocodile Tank' => 'Wildlife-rich wetland known for crocodiles and bird watching.',
                'Muhudu Maha Viharaya' => 'Ancient Buddhist temple on the beach with stone ruins.',
                'Kumana National Park' => 'Bird sanctuary and wildlife safari destination.',
            ],
        ];

        foreach ($data as $regionId => $attractions) {
            Attraction::create([
                'region_id' => $regionId,
                'attraction_no1' => array_keys($attractions)[0],
                'description_attraction_no1' => array_values($attractions)[0],
                'attraction_no2' => array_keys($attractions)[1],
                'description_attraction_no2' => array_values($attractions)[1],
                'attraction_no3' => array_keys($attractions)[2],
                'description_attraction_no3' => array_values($attractions)[2],
                'attraction_no4' => array_keys($attractions)[3],
                'description_attraction_no4' => array_values($attractions)[3],
            ]);
        }
    }
}
